var myVar;function load(lang){var translate=new Translate();var currentLng=lang;var attributeName='data-tag';translate.init(attributeName,currentLng);translate.process();}
function showPage(){document.getElementById("loader").style.display="none";document.getElementById("mypage").style.display="unset";}
function formPlaceholder(){document.sentMessage.name.placeholder=LngObject['placeholderName'];document.sentMessage.email.placeholder=LngObject['placeholderEmail'];document.sentMessage.phone.placeholder=LngObject['placeholderTelefon'];document.sentMessage.message.placeholder=LngObject['placeholderMessage'];}