const burger = document.querySelector('.burger');
const container = document.querySelector('.container');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
    container.classList.toggle('active');
});
