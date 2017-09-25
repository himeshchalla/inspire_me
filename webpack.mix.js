let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/html5.js', 'public/js')
    .js('resources/assets/js/jquery-1-8-2.js', 'public/js')
    .js('resources/assets/js/jquery-ui.js', 'public/js')
    .js('resources/assets/js/=index.js', 'public/js')
    .js('resources/assets/js/=jquery.min.js', 'public/js')
//    .js('resources/assets/js/pikaday.js', 'public/js')
    .js('resources/assets/js/script.js', 'public/js')
    .copy('resources/assets/css/fonts', 'public/css/fonts')
    .copy( 'resources/assets/images', 'public/images', false )
    .sass('resources/assets/sass/app.scss', 'public/css')
    .styles('resources/assets/css/globle.css', 'public/css/globle.css')
    .styles('resources/assets/css/fonts.css', 'public/css/fonts.css')
    .styles('resources/assets/css/jquery-ui.css', 'public/css/fonts.css')
    .styles('resources/assets/css/pikaday.css', 'public/css/fonts.css');
