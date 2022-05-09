import Toast from '../Toast/Toast.js'

let navLogo=document.getElementById('nav-logo-name');


let inputs=Array.from(document.getElementsByClassName('form-input'));
inputs.forEach(input=>{
  const label=input.nextElementSibling;
  input.addEventListener('focusin',(e)=>{
    label.classList.add('enter');
    input.classList.add('enter');
  })
  input.addEventListener('focusout',(e)=>{
    if(input?.value.length==0){
      label.classList.remove('enter');
      input.classList.remove('enter');
    }
  })
})

navLogo.addEventListener('click',(e)=>{
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

/*Modal part */
const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const modalOverlay = document.getElementById('modal-overlay')
const modalOverlayMessenger=document.getElementById('overlay-messenger');
openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

modalOverlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

const openModal=(modal) =>{
  if (modal == null) return
  modal.classList.add('active')
  modalOverlay.classList.add('active')
}
const closeModal=(modal)=> {
  if (modal == null) return
  modal.classList.remove('active')
  modalOverlay.classList.remove('active')
}

/*                 FORM VALIDATIONS                        */
/*CONTACT  */

let contactForm=document.getElementById('contact-form');
contactForm.addEventListener('submit',(e)=>{
  let contactMail=document.getElementById('contact-email')?.value;
  let message=document.getElementById('contact-message')?.value;

  if(contactMail.length==0 ||!message|| message?.length==0)
  {
  e.preventDefault();

    const toast=new Toast({
      position:screen.width>600 ? 'top-right':'top-center',
      text:'Add email and msg',
      pauseOnHover:true
    })
  }
  else{
    location.href = "mailto:contact@microclub.net"+'?cc='+contactMail+'&subject=Contact'+'&body='+message
    contactForm.reset()
    const toast=new Toast({
      position:screen.width>600 ? 'top-right':'top-center',
      text:'Great 😀😁',
      pauseOnHover:true
    })
  }
})


/* register form   */
let registerForm=document.getElementById('register-form');

registerForm.addEventListener('submit',(e)=>{
  let matriculeInput=document.getElementById('matricule')
  let matricule=matriculeInput?.value

  let firstNameInput=document.getElementById('first-name')
  let firstName=firstNameInput?.value

  let lastNameInput=document.getElementById('last-name')
  let lastName=lastNameInput?.value

  let registerEmailInput=document.getElementById('register-email')
  let registerEmail=registerEmailInput?.value

  let registerPhoneInput=document.getElementById('register-phone')
  let registerPhone=registerPhoneInput?.value
  
  let year  =document.getElementById('register-year');
  let registerYear=year.options[year.selectedIndex]?.value;

  let fac  =document.getElementById('register-faculty');
  let registerFaculty=fac.options[fac.selectedIndex]?.value;

  let registerMessageInput=document.getElementById('register-message')
  let registerMessage=registerMessageInput?.value

  if(firstName.length==0||lastName.length==0||registerMessage.length==0||!matricule|| !registerPhone)
  {
    e.preventDefault();
    const toast=new Toast({
      position:screen.width>600 ? 'top-right':'top-center',
      text:'Add All fields 🙈',
      pauseOnHover:true
    })
    return 
  }
  else
  {
    if(registerMessage.length <40)
    {
      e.preventDefault()
      const toast=new Toast({
        position:screen.width>600 ? 'top-right':'top-center',
        text:'you are not too motivated 😔',
        pauseOnHover:true
      })
      return 
    }
    if(registerEmail.length>75 ||firstName.length>75 || lastName.length>75 )
    {
      e.preventDefault()
      const toast=new Toast({
        position:screen.width>600 ? 'top-right':'top-center',
        text:'email, first name and last name should be 75 caraters max',
        pauseOnHover:true
      })
      return 
    }
  }
  
})

let body=document.body;
if(body.classList.contains('added'))
{
  const toast=new Toast({
    position:screen.width>600 ? 'top-right':'top-center',
    text:'We added You 😀😁',
    pauseOnHover:true
  })
  body.classList.remove('added');
}

if(body.classList.contains('duplicate'))
{
  const toast=new Toast({
    position:screen.width>600 ? 'top-right':'top-center',
    text:'You are already amoung us 😀😁 , or your email has already been used',
    pauseOnHover:true
  })
  body.classList.remove('duplicate');
}
if(body.classList.contains('other'))
{
  const toast=new Toast({
    position:screen.width>600 ? 'top-right':'top-center',
    text:'There was a problem , could not add you 😔',
    pauseOnHover:true
  })
  body.classList.remove('other');
}
