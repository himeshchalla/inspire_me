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

mix.js('resources/assets/js/html5.js', 'public/js/html5.js')
    .js('resources/assets/js/jquery-1-8-2.js', 'public/js/jquery-1-8-2.js')
    .js('resources/assets/js/jquery-ui.js', 'public/js/jquery-ui.js')
    .js('resources/assets/js/=index.js', 'public/js/=index.js')
    .js('resources/assets/js/=jquery.min.js', 'public/js/=jquery.min.js')
    .js('resources/assets/js/vue-form-wizard.js', 'public/js/vue-form-wizard.js')
    .js('resources/assets/js/app.js', 'public/js/app.js')
//    .js('resources/assets/js/pikaday.js', 'public/js/pikaday.js')
    .js('resources/assets/js/script.js', 'public/js/script.js')
    .copy('resources/assets/css/fonts', 'public/css/fonts')
    .copy( 'resources/assets/images', 'public/images', false )
    .sass('resources/assets/sass/app.scss', 'public/css')
    .styles('resources/assets/css/globle.css', 'public/css/globle.css')
    .styles('resources/assets/css/fonts.css', 'public/css/fonts.css')
    .styles('resources/assets/css/jquery-ui.css', 'public/css/jquery-ui.css')
    .styles('resources/assets/css/pikaday.css', 'public/css/pikaday.css')
    .styles('resources/assets/css/vue-form-wizard.min.css', 'public/css/vue-form-wizard.min.css')
    .styles('resources/assets/css/themify-icons.css', 'public/css/themify-icons.css');