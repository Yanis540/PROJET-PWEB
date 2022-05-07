const nav = document.querySelector('nav');
const landingpage=document.getElementById('landing-page')
const options={
 rootMargin:'-50px',
 threshold: [0]
}

const observer= new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
        if(entry.isIntersecting)
        {
            nav.classList.remove('change-color');

        }
        else{
            nav.classList.add('change-color');

        }
    })
},options)

observer.observe(landingpage);
