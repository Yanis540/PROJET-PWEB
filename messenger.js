let microDisplay=document.getElementById('micro-display');
let aboutPage=document.getElementById('about');
let microLogoMesg=microDisplay.firstElementChild;

microDisplay.addEventListener('click',(e)=>{
   aboutPage.classList.toggle('show');
   microDisplay.classList.toggle('transition');
   if(microLogoMesg.getAttribute('data-before')==1)microLogoMesg.setAttribute('data-before',0);
})
