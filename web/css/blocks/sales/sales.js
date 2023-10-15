document.addEventListener('DOMContentLoaded', () => {
    const wrappers = document.querySelectorAll('.sales__wrapper-info');
    wrappers.forEach(wrapper => {
        const btn = wrapper.querySelector('.sales__to');
        const rowLast = wrapper.querySelector('.sales__row-last');
        const title = wrapper.querySelector('.title14')
        const person = wrapper.querySelector('.sales__person')
        console.log(btn)
        btn.addEventListener('click', () => {
            btn.classList.toggle('sales__to_active');
            rowLast.classList.toggle('sales__row-last_active');
            title.classList.toggle('regular');
            person.classList.toggle('sales__person_active');
        });
    });
});