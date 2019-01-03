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

mix.js('resources/asset/js/app.js', 'public/js')
   .sass('resources/asset/sass/app.scss', 'public/css')
   .copy('resources/asset/sass/font-awesome.css', 'public/css')
   .copy('resources/asset/img', 'public/images')
   .copy('node_modules/admin-lte/plugins/font-awesome/fonts' ,'public/fonts');
