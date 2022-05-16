let microDisplay=document.getElementById('micro-display');
let aboutPage=document.getElementById('about');
let microLogoMesg=microDisplay.firstElementChild;
let closeMessenger=document.getElementById('close-messenger');
let clickMessage=document.getElementById('click-message')
let clickTriangle=document.getElementById('triangle-message')
let triangle=document.getElementById('triangle');

const modalOverlayMessenger=document.getElementById('overlay-messenger');
microDisplay.addEventListener('click',(e)=>{
   microDisplay.classList.toggle('transition');
   setTimeout(()=>{
    handleOpenClose(e);

   },75);

   if(microLogoMesg.getAttribute('data-before')==1)microLogoMesg.setAttribute('data-before',0);
})

closeMessenger.addEventListener('click',(e)=>{
    handleOpenClose(e);
})
modalOverlayMessenger.addEventListener('click',(e)=>{
    handleOpenClose(e);
})
const handleOpenClose=(e)=>{
    if(aboutPage.classList.contains('show'))
    {
        aboutPage.classList.remove('show');
        triangle.classList.remove('show');
        clickTriangle.classList.remove('hide');
        clickMessage.classList.remove('hide'); 
        modalOverlayMessenger.classList.remove('active');
    }
    else
    {
        aboutPage.classList.add('show');
        triangle.classList.add('show');
        clickTriangle.classList.add('hide');
        clickMessage.classList.add('hide');  
        handleRemoveClick();
        modalOverlayMessenger.classList.add('active');
        console.log("here");
    }
}
const handleRemoveClick=async()=>{
    setTimeout(()=>{
        clickTriangle.classList.add('hide');
        clickMessage.classList.add('hide');  
     },5000)

}
handleRemoveClick();