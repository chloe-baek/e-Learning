'use strict';
const quizContainer = document.querySelector('.quiz');
const resultsContainer = document.querySelector('.results');
const btnSubmit = document.querySelector('.submit');
const btnNext = document.querySelector('.btn-next');
const btnAgain = document.querySelector('.btn-again');
const modulePage = document.querySelector('.module');
const testPage = document.querySelector('.test');
const btnForTest = document.querySelector('.btn-test');

const HIDDEN = 'hidden';

// Module ⬅︎➡︎ Test
btnForTest.addEventListener('click', function () {
  modulePage.classList.add(HIDDEN);
  testPage.classList.remove(HIDDEN);
});

// Test
let questions = [
  {
    question: '1+1',
    answers: {
      a: '2',
      b: '1',
      c: '3',
    },
    correctAnswer: 'a',
  },
  {
    question: '2+2?',
    answers: {
      a: '4',
      b: '5',
      c: '6',
    },
    correctAnswer: 'a',
  },
  {
    question: '3+3?',
    answers: {
      a: '6',
      b: '5',
      c: '4',
    },
    correctAnswer: 'a',
  },
  // {
  //     question: "4+4?",
  //     answers: {
  //         a: '7',
  //         b: '8',
  //         c: '9'
  //     },
  //     correctAnswer: 'b'
  // },
  // {
  //     question: "5+5?",
  //     answers: {
  //         a: '10',
  //         b: '20',
  //         c: '30'
  //     },
  //     correctAnswer: 'a'
  // },
];

generateQuiz(questions, quizContainer, resultsContainer, btnSubmit);

function generateQuiz(questions, quizContainer, resultsContainer, btnSubmit) {
  function showQuestions(questions, quizContainer) {
    let output = [];
    let answers;

    for (let i = 0; i < questions.length; i++) {
      answers = [];

      for (let letter in questions[i].answers) {
        answers.push(
          `<label><input type="radio" name='question${i}' value="${letter}">${letter} : ${questions[i].answers[letter]}</label>`
        );
      }

      output.push(
        `<div class="question">${questions[i].question}</div>
                <div class="answers">${answers.join('')}</div>`
      );
    }

    quizContainer.innerHTML = output.join('');
  }
  function showResults(questions, quizContainer, resultsContainer) {
    let answerContainers = quizContainer.querySelectorAll('.answers');
    let userAnswer = '';
    let numCorrect = 0;

    for (let i = 0; i < questions.length; i++) {
      userAnswer = (
        answerContainers[i].querySelector(`input[name=question${i}]:checked`) ||
        {}
      ).value;

      // correct
      if (userAnswer === questions[i].correctAnswer) {
        numCorrect++;
        answerContainers[i].style.color = 'blue';
      }
      // incorrect
      else {
        answerContainers[i].style.color = 'red';
      }

      //pass to next module
      if (numCorrect >= 2) {
        resultsContainer.classList.remove(HIDDEN);
        btnSubmit.classList.add(HIDDEN);
        btnNext.classList.remove(HIDDEN);
        btnAgain.classList.add(HIDDEN);
      }
      // try again
      else {
        btnSubmit.classList.add(HIDDEN);
        btnAgain.classList.remove(HIDDEN);
        btnAgain.addEventListener('click', function () {
          quizContainer.reset();
          answerContainers[i].style.color = 'black';
          btnSubmit.classList.remove(HIDDEN);
          btnAgain.classList.add(HIDDEN);
          resultsContainer.classList.add(HIDDEN);
        });
      }
    }

    resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length;
  }

  showQuestions(questions, quizContainer);

  btnSubmit.addEventListener('click', function () {
    showResults(questions, quizContainer, resultsContainer);
  });

  // btnAgain.addEventListener('click', function (e) {
  //   quizContainer.reset();
  //   answerContainers.forEach((a) => a.style.color('black'));
  // });
}
