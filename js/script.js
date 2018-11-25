const hamButton = document.querySelector(".hamburger-menu");
const hamBar = document.querySelector(".bar");
const menu = document.querySelector('.menu');
const menuItems = document.querySelectorAll('.menu>ul>.menu-item')
const logo = document.querySelector('.logo-container');
const hyperLinks = document.querySelectorAll('a');
const navBar = document.querySelector('.navbar');
const downArrow = document.querySelector('.down-arrow');
const historySection = document.querySelector('.history');

/* HAMBURGER MENU TOGGLE FOR MOBILE/TABLET */
hamButton.addEventListener("click", ()=>{
  console.log("bla");
  hamBar.classList.toggle("clicked");
  menu.classList.toggle("open");
  document.body.classList.toggle("no-scroll");
});

downArrow.addEventListener('click', ()=>{
  historySection.scrollIntoView({block:'center'});
})

/* GIVES MENU ITEM CLASS SELECTED WHEN CLICKED */
menuItems.forEach((menuItem) => {
  menuItem.addEventListener("click", ()=>{

    menuItems.forEach((menuItem) => {
      menuItem.classList.remove("selected");
    });
    menuItem.classList.add("selected");

  })
});

/* PREVENTS LINKS FROM WORKING FOR DEMO AND PROMPTS USER */
hyperLinks.forEach((hyperLink)=>{
  hyperLink.addEventListener('click', (e)=>{
    if (!hyperLink.classList.contains('lang-option')){

      e.preventDefault();

      hyperLink.classList.add('deny');
      setTimeout(function(){
        hyperLink.classList.remove('deny');
      }, 500)
    }
  })
})

/* FADES LOGO OUT WHEN WINDOW SCROLLS DOWN */
window.addEventListener('scroll', ()=>{

  /* HIDES LOGO THROUGH INITIAL SCROLL DOWN */
  logo.style.opacity = 1 - window.pageYOffset / 250;
  if(logo.style.opacity < 0) {
    logo.style.display = "none";
  } else {
    logo.style.display = "flex";
  }

  /* HIDES NAVBAR AT TOP OR BOTTOM OF PAGE */
  if(window.pageYOffset < 20 || (window.innerHeight + window.scrollY) >= document.body.offsetHeight){
    navBar.classList.add('hidden');
  } else {
    navBar.classList.remove('hidden');
  }
})
