const themeToggle=document.querySelector('#theme-toggle');

themeToggle.addEventListener('click',()=>{
   document.body.classList.contains('light-theme')
   ? enableDarkmode()
   : enableLightmode();
   
})

function enableDarkmode()
{
    document.body.classList.remove('light-theme');
    document.body.classList.add('dark-theme');
}
function enableLightmode()
{
    document.body.classList.remove('dark-theme');
    document.body.classList.add('light-theme');

}
// check the prefrences
function setthemePreferences(){
  if(window.matchMedia('(prefers-color-scheme:dark)').matches)
  {
      return enableDarkmode();
  }
  enableLightmode();
}
document.onload =setthemePreferences();