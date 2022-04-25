import Toast from './Toast/Toast.js'

let navLogo=document.getElementById('nav-logo-name');

navLogo.addEventListener('click',(e)=>{

    // const toast=new Toast({
    //     position:screen.width>600 ? 'top-right':'top-center',
    //     text:'✨ 🦋 Welcome 🦋 ✨',
    //     pauseOnHover:true
    // })
    createRiples(navLogo,e)
    
})
const createRiples=(element,e)=>{
    let x=e.clientX - e.target.offsetLeft;
    let y=e.clientY - e.target.offsetTop;
    let riples = document.createElement('span');
    riples.style.left=x+'px';
    riples.style.top=y=+'px';
    riples.classList.add('riples');
    element.appendChild(riples);
    setTimeout(()=>{
        riples.remove()
    },1000)
}


