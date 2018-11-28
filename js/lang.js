var languages;

const translates = document.querySelectorAll('.translate');

const enFlag = document.querySelector('.en');
const svFlag = document.querySelector('.sv');


var selectedLang = 'en';

// Replace ./data.json with your JSON feed
const updateLang = () => {

  fetch('api/language.php?locale='+selectedLang).then(response => {
    return response.json();
  }).then(data => {

    // Work with JSON data here
    languages = data;

    translates.forEach((translate) => {

      translateKey = translate.dataset.translate;

      translate.textContent = data[translateKey];

    })


  }).catch(err => {
    // Do something for an error here
  });
}

enFlag.addEventListener("click", ()=>{
  selectedLang = "en";
  updateLang();
})

svFlag.addEventListener("click", ()=>{
  selectedLang = "sv";
  updateLang();
})
