import Lottie from "lottie-web";

let login = document.getElementById('login');
Lottie.loadAnimation({
    container: login,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/login.json'
});

let screen = document.getElementById('screen');
Lottie.loadAnimation({
    container: screen,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/screen.json'
});