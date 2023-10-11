document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.admin__card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            const name = card.querySelector('.admin__name');
            card.classList.add('admin__card-hover');
            name.classList.add('admin__name-hover');


        });
        card.addEventListener('mouseleave', () => {
            const name = card.querySelector('.admin__name');
            card.classList.remove('admin__card-hover');
            name.classList.remove('admin__name-hover');
        });
    });
});