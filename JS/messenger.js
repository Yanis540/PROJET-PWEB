let microDisplay=document.getElementById('micro-display');
let aboutPage=document.getElementById('about');
let microLogoMesg=microDisplay.firstElementChild;
let closeMessenger=document.getElementById('close-messenger');
let triangle=document.getElementById('triangle');

const modalOverlayMessenger=document.getElementById('overlay-messenger');
microDisplay.addEventListener('click',(e)=>{

   aboutPage.classList.toggle('show');
   microDisplay.classList.toggle('transition');
   triangle.classList.toggle('show');
   if(aboutPage.classList.contains('show')) modalOverlayMessenger.classList.add('active');
   else modalOverlayMessenger.classList.remove('active');
   if(microLogoMesg.getAttribute('data-before')==1)microLogoMesg.setAttribute('data-before',0);
})

closeMessenger.addEventListener('click',(e)=>{
    handleClose(e);
})
modalOverlayMessenger.addEventListener('click',(e)=>{
    handleClose(e);
})
const handleClose=(e)=>{
    if(aboutPage.classList.contains('show'))
    {
        aboutPage.classList.remove('show');
        modalOverlayMessenger.classList.remove('active');
    }
}