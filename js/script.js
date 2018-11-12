const hamButton = document.querySelector(".hamburger-menu");
const hamBar = document.querySelector(".bar");
const menu = document.querySelector('.menu');
const menuItems = document.querySelectorAll('.menu-item')

hamButton.addEventListener("click", ()=>{
  console.log("bla");
  hamBar.classList.toggle("clicked");
  menu.classList.toggle("open");
});

menuItems.forEach((menuItem) => {
  menuItem.addEventListener("click", ()=>{

    menuItems.forEach((menuItem) => {
      menuItem.classList.remove("selected");
    });
    menuItem.classList.add("selected");

  })
});
