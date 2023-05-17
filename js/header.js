'use strict';

const header = document.getElementById('header');
const social = document.getElementById('social');

document.addEventListener('scroll', () => {
    header.classList.toggle('scroll', window.scrollY > 0);
    social.classList.toggle('d-none', window.scrollY > 0);
});