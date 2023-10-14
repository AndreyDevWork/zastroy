document.addEventListener('DOMContentLoaded', () => {
    const wrappers = document.querySelectorAll('.sales__wrapper-info');
    wrappers.forEach(wrapper => {
        const btn = wrapper.querySelector('.sales__to');
        console.log(btn)
        btn.addEventListener('click', () => {
            btn.classList.toggle('sales__to_active')
        });
    });
});