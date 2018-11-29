var languages;

const translates = document.querySelectorAll('.translate');

const enFlag = document.querySelectorAll('.en');
const svFlag = document.querySelectorAll('.sv');


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
        var translateValue = translateData[1];
        var dataSection = data[translateKey];

        var selectedContent = dataSection[translateValue];

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


enFlag.forEach((flag)=>{
  flag.addEventListener("click", ()=>{
    updateLang('en');
  })
})

svFlag.forEach((flag)=>{
  flag.addEventListener("click", ()=>{
    updateLang('sv');
  })
})
