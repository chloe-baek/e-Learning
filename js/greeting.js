'use strict';
const loginForm = document.querySelector('#login-form');
const loginInput = loginForm.querySelector('input');
const clearStorage = document.querySelector('#clearStorage');
const greeting = document.querySelector('#greeting');

const HIDDEN = 'hidden';
const USERNAME_KEY = 'username';

const savedUsername = localStorage.getItem(USERNAME_KEY);

function paintGreetings(username) {
  greeting.innerHTML = `${username}`;
  greeting.classList.remove(HIDDEN);
}

if (savedUsername === null) {
  //show the form
  loginForm.classList.remove(HIDDEN);
} else {
  //show the greetings
  paintGreetings(savedUsername);
  clearStorage.classList.remove(HIDDEN);
}

loginForm.addEventListener('submit', function (e) {
  e.preventDefault();
  loginForm.classList.add(HIDDEN);
  clearStorage.classList.remove(HIDDEN);

  const username = loginInput.value;
  localStorage.setItem(USERNAME_KEY, username);
  paintGreetings(username);
});

clearStorage.addEventListener('click', function () {
  localStorage.clear();
  loginForm.classList.toggle(HIDDEN);

  clearStorage.classList.toggle(HIDDEN);
  greeting.classList.add(HIDDEN);
});
