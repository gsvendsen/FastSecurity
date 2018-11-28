var languages;

const translates = document.querySelectorAll('.translate');

const enFlag = document.querySelector('.en');
const svFlag = document.querySelector('.sv');


// Replace ./data.json with your JSON feed
const updateLang = (language) => {
  fetch('api/lang-session.php?locale='+language).then(response => {
    return response.json();
  }).then(data => {

    var selectedLang = data;

    fetch('api/language.php?locale='+selectedLang).then(response => {
      return response.json();
    }).then(data => {

      // Work with JSON data here
      languages = data;

      translates.forEach((translate) => {

        translateData = translate.dataset.translate.split(" ");
        translateKey = translateData[0];
        let translateValue = translateData[1];
        let dataSection = data[translateKey];

        let selectedContent = dataContent[translateValue];

        translate.textContent = selectedContent;

      })


    }).catch(err => {
      // Do something for an error here
    });
    }

  ).catch(err => {
    // Do something for an error here
  });
}


enFlag.addEventListener("click", ()=>{
  updateLang('en');
})

svFlag.addEventListener("click", ()=>{
  updateLang('sv');
})
