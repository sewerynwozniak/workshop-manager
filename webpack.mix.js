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

 mix.js('resources/js/landingPage.js', 'public/js')
 .js('resources/js/dashboard.js', 'public/js')
 .sass('resources/sass/style.scss', 'public/css');

 
 mix.disableSuccessNotifications();
