"use strict";
document.addEventListener('DOMContentLoaded', () => {
    const eye = document.querySelector('.login__eye');
    const eyeSpan = document.querySelector('.login__span');
    const input = document.querySelector('#loginform-password');
    eye.addEventListener('click', () => {
        eyeSpan.classList.toggle('login__span_active');
        input.type === 'password' ? input.type = 'text' : input.type = 'password';
    });
});
