var languages;

const translates = document.querySelectorAll('.translate');

/* Function that fetches current language session and data */

const updateLang = (language) => {

  /* Sets and fetches current php language session */
  fetch('api/lang-session.php?locale='+language).then(response => {

    return response.json();

  }).then(data => {

    var selectedLang = data;

    /* Fetches selected language data */
    fetch('api/language.php?locale='+selectedLang).then(response => {

      return response.json();
    }).then(data => {

      languages = data;

      /* Changes textcontent of each translate element */
      translates.forEach((translate) => {

        /* Uses element data-translate key to fetch translation from json data */
        translateData = translate.dataset.translate.split(" ");
        translateKey = translateData[0];
        var translateValue = translateData[1];
        var dataSection = data[translateKey];
        var selectedContent = dataSection[translateValue];

        translate.textContent = selectedContent;

      })


    })
  })
}


const enFlag = document.querySelectorAll('.en');
const svFlag = document.querySelectorAll('.sv');


/* Click eventlistener if user presses language option */

var currentState = history.state;

enFlag.forEach((flag)=>{
  flag.addEventListener("click", ()=>{
    updateLang('en');
    history.pushState(null , null, "?lang=en")
  })
})

svFlag.forEach((flag)=>{
  flag.addEventListener("click", ()=>{
    updateLang('sv');
    history.pushState(null, null, "?lang=sv")
  })
})
