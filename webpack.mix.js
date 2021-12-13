let mix = require('laravel-mix');
mix
    .sass('src/sass/app.scss', 'css')
    .js('src/js/app.js', 'js')
    .setPublicPath('assets');