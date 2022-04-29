import Toast from './Toast/Toast.js'

let navLogo=document.getElementById('nav-logo-name');
let contactButton=document.getElementById('contact-button');
let message=document.getElementById('message')
let messageLabel=document.getElementById('message-label');

message.addEventListener('focusin',(e)=>{
    messageLabel.classList.add('enter');
})
message.addEventListener('focusout',(e)=>{
    if(message.value.length==0)messageLabel.classList.remove('enter');
})

contactButton.addEventListener('click',(e)=>{
   e.preventDefault();
   let contactMail=document.getElementById('email').value;
   let message=document.getElementById('message').value;
   if(contactMail.length==0 || message.length==0)
   {
       const toast=new Toast({
        position:screen.width>600 ? 'top-right':'top-center',
        text:'Add email and msg',
        pauseOnHover:true
      })
   }
   else{
    location.href = "mailto:contact@microclub.net"+'?cc='+contactMail+'&subject=Contact'+'&body='+message
   }
})
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


