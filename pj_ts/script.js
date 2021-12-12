let openloginRight = document.querySelector('.h1');
let loginWrapper = document.querySelector(".login-wrapper");

openloginRight.addEventListener('click', function() {
    loginWrapper.classList.toggle('open');
});