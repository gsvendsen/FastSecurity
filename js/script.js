const hamButton = document.querySelector(".hamburger-menu");
const hamBar = document.querySelector(".bar");
const menu = document.querySelector('.menu');
const menuItems = document.querySelectorAll('.menu>ul>.menu-item')
const logo = document.querySelector('.logo-container');


/* HAMBURGER MENU TOGGLE FOR MOBILE/TABLET */
hamButton.addEventListener("click", ()=>{
  console.log("bla");
  hamBar.classList.toggle("clicked");
  menu.classList.toggle("open");
  document.body.classList.toggle("no-scroll");
});

/* GIVES MENU ITEM CLASS SELECTED WHEN CLICKED */
menuItems.forEach((menuItem) => {
  menuItem.addEventListener("click", ()=>{

    menuItems.forEach((menuItem) => {
      menuItem.classList.remove("selected");
    });
    menuItem.classList.add("selected");

  })
});

/* FADES LOGO OUT WHEN WINDOW SCROLLS DOWN */
window.addEventListener('scroll', ()=>{
  logo.style.opacity = 1 - window.pageYOffset / 250;

  if(logo.style.opacity < 0) {
    logo.style.display = "none";
  } else {
    logo.style.display = "block";
  }

})

const navBar = document.querySelector('.navbar')
var startScrollPos = 0;

window.addEventListener('scroll', ()=>{
  if(window.pageYOffset == startScrollPos || (window.innerHeight + window.scrollY) >= document.body.offsetHeight){
    navBar.classList.add('hidden');
  } else {
    navBar.classList.remove('hidden');
  }
})
