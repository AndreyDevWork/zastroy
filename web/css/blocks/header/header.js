document.addEventListener('DOMContentLoaded', () => {
    const mark = document.querySelector('.header__btn');


    const menu = document.querySelector('.header__menu');
    mark.addEventListener('click', () => {
        console.log('dada')
        menu.classList.toggle('header__menu_active');
    });
});