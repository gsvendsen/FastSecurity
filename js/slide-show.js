/* All queryselectors */
const slide = document.querySelector('.test-slide');
const next = document.querySelector('.right-arrow');
const prev = document.querySelector('.left-arrow')
const container = document.querySelector('.slide-container');
const slides = document.querySelectorAll('.slide');
const buttons = document.querySelectorAll('.slide-button');

var selectedImage = 0;
var isSliding = false;

/* Function that scrolls to slide with index num */
const slideScroll = (num)=>{
  selectedSlide = slides.item(num);
  selectedSlide.scrollIntoView({block: 'nearest'});
  updateButton(num);
}

/* Updates slideshow buttons to slide with index num */
const updateButton = (num)=>{
  currentButton = buttons.item(num);
  buttons.forEach((button)=>{
    button.classList.remove('selected-button');
  })
  currentButton.classList.add('selected-button');
}

/* Slide scroll to right if next arrow is clicked */
next.addEventListener('click', ()=>{
  if(isSliding) {
    return;
  }

  isSliding = true;

  if(selectedImage === 2){
    selectedImage = 0;
  } else {
    selectedImage = selectedImage + 1;
  }

  slideScroll(selectedImage);

  setTimeout(function(){
    isSliding = false
  }, 1000);
});

/* Slide scroll to left if next arrow is clicked */
prev.addEventListener('click', ()=>{

  if(isSliding) {
    return;
  }

  isSliding = true;

  if(selectedImage === 0){
    selectedImage = 2;
  } else {
    selectedImage = selectedImage - 1;
  }

  slideScroll(selectedImage);

  setTimeout(function(){
    isSliding = false
  }, 1000);
});

/* Slidescroll to slide with index same as button clicked */
buttons.forEach((button)=>{
  button.addEventListener('click', (e)=>{

    if(isSliding) {
      return;
    }

    isSliding = true;

    var parent = button.parentNode;
    var index = Array.prototype.indexOf.call(parent.children, button);

    slideScroll(index);

    setTimeout(function(){
      isSliding = false
    }, 1000);
  })
})
