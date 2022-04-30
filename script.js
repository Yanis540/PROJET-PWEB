import Toast from './Toast/Toast.js'

let navLogo=document.getElementById('nav-logo-name');
let contactButton=document.getElementById('contact-button');

let contactMessage=document.getElementById('contact-message');

let contactMessageLabel=document.getElementById('contact-message-label');

contactMessage.addEventListener('focusin',(e)=>{
    contactMessageLabel.classList.add('enter');
})
contactMessage.addEventListener('focusout',(e)=>{
    if(contactMessage.value.length==0)contactMessageLabel.classList.remove('enter');
})

contactButton.addEventListener('click',(e)=>{
   e.preventDefault();
   let contactMail=document.getElementById('contact-email')?.value;
   let message=document.getElementById('message')?.value;
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


/* Handle login  */
let registreButton=document.getElementById('register-button');


registreButton.addEventListener('click',(e)=>{
  e.preventDefault();
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

  if(firstName.length==0||
     lastName.length==0||
     registerMessage.length==0||
     !matricule|| 
     !registerPhone)
  {
    const toast=new Toast({
      position:screen.width>600 ? 'top-right':'top-center',
      text:'Add All fields 🙈',
      pauseOnHover:true
     })
  }
  else
  {
    if(registerMessage.length <40)
    {
      const toast=new Toast({
        position:screen.width>600 ? 'top-right':'top-center',
        text:'you are not too motivated 😔',
        pauseOnHover:true
       })
    }
    else
    {
      const toast=new Toast({
        position:screen.width>600 ? 'top-right':'top-center',
        text:'We added You 😀😁',
        pauseOnHover:true
       })
       console.log(matricule);
       firstNameInput.value=''
       lastNameInput.value=''
       matriculeInput.value=''
       console.log
       registerEmailInput.value=''
       registerMessageInput.value=''
       registerPhoneInput.value=''
       closeModalButtons.forEach(button => {
          const modal = button.closest('.modal')
          closeModal(modal)
      })
    }
   }
  

})