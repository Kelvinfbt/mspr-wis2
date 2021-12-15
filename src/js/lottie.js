import Lottie from "lottie-web";

let register = document.getElementById('register');
Lottie.loadAnimation({
    container: register,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/register.json'
});

let screen = document.getElementById('screen');
Lottie.loadAnimation({
    container: screen,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/screen.json'
});