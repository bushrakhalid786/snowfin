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
mix.autoload({
    jquery: ["$", "window.jQuery", "jQuery", "window.$", "jquery", "window.jquery"],
})

.scripts([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'node_modules/popper.js/dist/umd/popper.js',
        'node_modules/admin-lte/plugins/jQueryUI/jquery-ui.js',
        'node_modules/multiselect/js/jquery.multi-select.js',
        'node_modules/admin-lte/plugins/iCheck/icheck.js',
        'node_module/admin-lte/inputmask/jquery.inputmask.js',
        'node_module/admin-lte/inputmask/jquery.inputmask.date.extensions.js',
        'resources/asset/js/app.js',
],
    'public/js/app.js')

    .sass('resources/asset/sass/app.scss', 'public/css')
    .copy('resources/asset/sass/font-awesome.css', 'public/css')
    .copy('resources/asset/img', 'public/images')
    .copy('node_modules/admin-lte/plugins/font-awesome/fonts', 'public/fonts');


