'use strict';
// Navigate Language
const lang = {
  en: {
    title: 'Hello',
    // content: 'MAIN PAGE CONTENT ',
    now_sys_lang: 'Your System Language: ',
  },
  ko: {
    title: '안녕하세요',
    // content: '메인 페이지 컨텐츠',
    now_sys_lang: '현재 시스템 언어: ',
  },
};

console.log(navigator.language);

function getLanguage() {
  return navigator.language || navigator.userLanguage;
}

function init(localeStr) {
  document.getElementById('locale').textContent = localeStr;
}

const currentLang = getLanguage();
init(currentLang);
render(currentLang.substr(0, 2));

// rendering
function render(locale) {
  const $lang = document.querySelectorAll('[data-lang]');
  $lang.forEach((el) => {
    const code = el.dataset.lang;
    el.textContent = lang[locale][code];
  });
}

// button event
// document.getElementById('btn-en').addEventListener('click', () => {
//   // render('en');
//   window.location.replace('learn-korean/english.php');
// });
// document.getElementById('btn-ko').addEventListener('click', () => {
//   // render('ko');
//   // document.getElementById('move').addEventListener('click', e => {
//   window.location.replace('learn-english/korean.php');
//   // })
// });
