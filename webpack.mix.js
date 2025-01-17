const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */




require('mix-tailwindcss');

mix
    .js(`resources/js/app.js`, 'public/js')
    .sass('resources/sass/vanilla.scss', 'public/css')
    .sass('resources/sass/tailwind.scss', 'public/css')
    .tailwind();
