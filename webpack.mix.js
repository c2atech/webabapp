const mix = require('laravel-mix');

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

mix.js('resources/views/publico/assets/js/app.js', 'public/js')
   .sass('resources/views/publico/assets/sass/app.scss', 'public/css');

mix.copy('resources/views/publico/assets/images','public/img')
mix.copy('resources/views/publico/assets/assoc','public/assoc')

