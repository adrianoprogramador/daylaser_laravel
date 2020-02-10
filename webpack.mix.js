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

mix

    .styles([
        'resources/views/site/css/fonts.css',
        'resources/views/site/css/bootstrap.css',
        'resources/views/site/css/style.css'
    ], 'public/site/css/style.css')

    .scripts([ 
        'resources/views/site/js/core.min.js',
        'resources/views/site/js/script.js'
    ], 'public/site/js/script.js')

    .styles([
        'resources/views/admin/bootstrap/css/bootstrap.min.css',
        'resources/views/admin/dist/css/AdminLTE.min.css',
        'resources/views/admin/dist/css/skins/_all-skins.min.css'        
    ], 'public/admin/css/style.css')

    .scripts([ 
        'resources/views/admin/plugins/jQuery/jquery-2.2.3.min.js',
        'resources/views/admin/bootstrap/js/bootstrap.min.js',
        'resources/views/admin/plugins/slimScroll/jquery.slimscroll.min.js',
        'resources/views/admin/plugins/fastclick/fastclick.js',
        'resources/views/admin/dist/js/app.min.js',
        'resources/views/admin/dist/js/demo.js'
    ], 'public/admin/js/script.js')
   
    .version();