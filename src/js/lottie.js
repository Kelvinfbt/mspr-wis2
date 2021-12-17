import Lottie from "lottie-web";

let login = document.getElementById('login');
Lottie.loadAnimation({
    container: login,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/login.json'
});

let welcome = document.getElementById('welcome');
Lottie.loadAnimation({
    container: welcome,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/welcome.json'
});

let screen = document.getElementById('screen');
Lottie.loadAnimation({
    container: screen,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/screen.json'
});

let bug = document.getElementById('bug');
Lottie.loadAnimation({
    container: bug,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/bug.json'
});