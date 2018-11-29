/* All query selectors */
const hamButton = document.querySelector(".hamburger-menu");
const hamBar = document.querySelector(".bar");
const menu = document.querySelector('.menu');
const logo = document.querySelector('.logo-container');
const hyperLinks = document.querySelectorAll('a');
const navBar = document.querySelector('.navbar');
const downArrow = document.querySelector('.down-arrow');
const historySection = document.querySelector('.history');
const desktopNav = document.querySelector('.desktop-menu');
const navLinks = document.querySelectorAll('.nav-link')
const desktopLogo = document.querySelector('.desktop-logo')
const menuItems = document.querySelectorAll('.menu-item')
/* Hamburger menu toggle for mobile/tablet */
hamButton.addEventListener("click", ()=>{
  hamBar.classList.toggle("clicked");
  menu.classList.toggle("open");
  document.body.classList.toggle("no-scroll");
});

/* Eventlistener scroll down when hero arrow is clicked */
downArrow.addEventListener('click', ()=>{
  historySection.scrollIntoView({block:'center'});
})

/* Toggles selected class for clicked menu item */
menuItems.forEach((menuItem) => {
  menuItem.addEventListener("click", ()=>{

    menuItems.forEach((menuItem) => {
      menuItem.classList.remove("selected");
    });
    menuItem.classList.add("selected");

  })
});

/* Prevents all links from working for demo */
hyperLinks.forEach((hyperLink)=>{
  hyperLink.addEventListener('click', (e)=>{
    /* Exception for product folder link */
    if (!hyperLink.classList.contains('product-folder')){
      e.preventDefault();
    }
  })
})


window.addEventListener('scroll', ()=>{

  /* Hides logo and changes desktopnav bg on intial scrolldown */
  var scrollConstDown = 0 + window.pageYOffset / 250;

  logo.style.opacity = 1 - window.pageYOffset / 250;
  desktopNav.style.backgroundColor = "rgba(255,255,255,"+scrollConstDown+")";
  desktopLogo.style.webkitFilter = "invert("+scrollConstDown+")"

  /* Turns desktop menu links black according to scrollDown var */
  navLinks.forEach((navLink)=>{
    navLink.style.webkitFilter = "invert("+scrollConstDown+")"
  })

  if(logo.style.opacity < 0) {
    logo.style.display = "none";
  } else {
    logo.style.display = "flex";
  }

  /* Hides mobile navbar at bottom of page */
  if(window.pageYOffset < 20 || (window.innerHeight + window.scrollY) >= document.body.offsetHeight){
    navBar.classList.add('hidden');
  } else {
    navBar.classList.remove('hidden');
  }
})
