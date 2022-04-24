const DEFAULT_OPTIONS={
    autoClose:3000,
    position:'top-right',
    onClose:()=>{},
    canClose:true,
    showProgress:true
}
export default class Toast {
    #toastElem
    #autoCloseInterval
    #removeBinded
    #autoClose
    #timeVisible=0
    #progressInteral
    #isPaused=false;
    #unpause
    #pause
    constructor(options)
    {
        this.#toastElem=document.createElement('div');
        this.#toastElem.classList.add('toast');
        requestAnimationFrame(()=>{
          this.#toastElem.classList.add('show');
        })
        this.#removeBinded=this.remove.bind(this)
        this.#unpause=()=>this.#isPaused=false
        this.#pause=()=>this.#isPaused=true
        //problem you can't call this.remove you will have two choices to call it in the addeventlistener 
        // you do addeventlistener('click',()=>{this.remove})
        // or you can use the function bind that will allow you to use the current values of the instances 
        this.update({...DEFAULT_OPTIONS,...options});
    }
    set autoClose(value)
    {
        this.#autoClose=value;
        this.#timeVisible=0
        if(value===false)  return
        let lastTime;
        const func=(time)=>{
            if(lastTime==null)
            {
                lastTime=time
                this.#autoCloseInterval=requestAnimationFrame(func);
                return 
            }
            if(!this.#isPaused)
            {
                this.#timeVisible+=time- lastTime
                if(this.#timeVisible >=this.#autoClose){
                    this.remove();
                    return 
                } 
            }
            lastTime=time
            this.#autoCloseInterval=requestAnimationFrame(func);
        }
        this.#autoCloseInterval=requestAnimationFrame(func)
    }
    set position(value){
        const currentContainer=this.#toastElem.parentElement;
        const selector=`.toast-container[data-position="${value}"]`;
        const container=document.querySelector(selector) ||createContainer(value)
        container.append(this.#toastElem);
        if(currentContainer==null ||currentContainer.hasChildNodes()) return ;
        currentContainer.remove()
    }
    set text(value)
    {
      this.#toastElem.textContent=value;

    }
    set canClose(value){
        this.#toastElem.classList.toggle("can-close",value);
        if(value==true) this.#toastElem.addEventListener('click',this.#removeBinded)
        else  this.#toastElem.removeEventListener('click',this.#removeBinded)
    }
    set showProgress(value)
    {
        this.#toastElem.classList.toggle('progress',value)
        this.#toastElem.style.setProperty('--progress',1);
        if(value)
        {
            const func=()=>{
               
                if(!this.#isPaused)
                {
                    this.#toastElem.style.
                    setProperty(
                     '--progress',
                     (1-(this.#timeVisible/this.#autoClose))
                    );
                }
                this.#progressInteral=requestAnimationFrame(func)
            }
            
            this.#progressInteral=requestAnimationFrame(func)
        }
    }
    set pauseOnHover(value)
    {
        if(value==true){
            this.#toastElem.addEventListener('mouseover',this.#pause)
            this.#toastElem.addEventListener('mouseleave',this.#unpause)
        } 
        else
        {
            this.#toastElem.removeEventListener('mouseover',this.#pause)
            this.#toastElem.removeEventListener('mouseleave',this.#unpause)
        }
    }
    update(options)
    {
        Object.entries(options).forEach(([key,value])=>{
            this[key]=value;
        })
    }
    remove()
    {
        clearTimeout(this.#autoCloseInterval);
        cancelAnimationFrame(this.#progressInteral);
        const container=this.#toastElem.parentElement
        this.#toastElem.classList.remove('show');
        this.#toastElem.addEventListener('transitionend',()=>{
           this.#toastElem.remove();
           if(container.hasChildNodes()) return;
           container.remove()
        })
        this.onClose();
    }
}
const createContainer=(position)=>{
    const container=document.createElement('div');
    container.classList.add('toast-container');
    container.dataset.position=position;
    document.body.append(container)
    return container
}
/*
  import Toast from './Toast.js'
  const toast=new Toast({
     position:'top-right',
     text:'hello',
     pauseOnHover:true
  })
*/