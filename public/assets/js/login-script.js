const registerButton = document.getElementById('register');
const loginButton = document.getElementById('login');
const container = document.getElementById('container');

registerButton.addEventListener('click', () => {
    container.classList.add('active');
})
loginButton.addEventListener('click', () => {
    container.classList.remove('active');
})