'use strict';

const header = document.getElementById('header');
const social = document.getElementById('social');
const listContent = document.getElementById('list-content')

document.addEventListener('scroll', () => {
    header.classList.toggle('scroll', window.scrollY > 0);
    social.classList.toggle('d-none', window.scrollY > 0);
    //listContent.classList.toggle('h-0', window.scrollY == 0);
    listContent.classList.toggle('list--header-scroll', window.scrollY > 0);
});