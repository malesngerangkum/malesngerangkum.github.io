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

mix.js('resources/js/breakpoints.min.js', 'public/js')
    .js('resources/js/browser.min.js', 'public/js')
    .js('resources/js/jquery.min.js', 'public/js')
    .js('resources/js/jquery.scrollex.min.js', 'public/js')
    .js('resources/js/jquery.scrolly.min.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .js('resources/js/util.js', 'public/js')
    .postCss('resources/css/fontawesome-all.min.css', 'public/css')
    .sass('resources/sass/main.scss', 'public/css')
    .sass('resources/sass/noscript.scss', 'public/css')
