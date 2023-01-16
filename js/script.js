'use strict';
// Module ⬅︎➡︎ Test
const modulePage = document.querySelector('.module');
const btnForTest = document.querySelector('.btn-test');
const testPage = document.querySelector('.test');
const HIDDEN = 'hidden';
btnForTest.addEventListener('click', function () {
  modulePage.classList.add(HIDDEN);
  testPage.classList.remove(HIDDEN);
});


// audio contents
const sectionContainer = document.querySelector('.section-container');

sectionContainer.addEventListener('click', function (e) {
  const clicked = e.target.closest('.headphones');
  console.log(e.target);

  const audioContent = document.querySelector(`.audio-${clicked.dataset.tab}`);

  if (audioContent.paused) {
    audioContent.play();
  } else {
    audioContent.pause();
  }
});

// quiz
const quizSectionContainer = document.querySelector('.quiz-section-container');
const formContainer = document.querySelector('.form-container');

quizSectionContainer.addEventListener('click', function (e) {
  const clicked = e.target.closest('.headphones');
  console.log(e.target);

  const audioContent = document.querySelector(`.audio-${clicked.dataset.tab}`);

  if (audioContent.paused) {
    audioContent.play();
  } else {
    audioContent.pause();
  }
});
