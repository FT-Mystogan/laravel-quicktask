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

mix.styles([
    'bower_components/laravel-quicktask/css/reset.css',
    'bower_components/laravel-quicktask/css/text.css',
    'bower_components/laravel-quicktask/css/grid.css',
    'bower_components/laravel-quicktask/css/layout.css',
    'bower_components/laravel-quicktask/css/nav.css',
], 'public/css/bootstrap.css');
mix.styles([
    'bower_components/laravel-quicktask/css/table/demo_page.css'
], 'public/css/app.css');
mix.copy('bower_components/laravel-quicktask/css/stylelogin.css', 'public/css/stylelogin.css');
mix.scripts([
    'bower_components/laravel-quicktask/js/jquery-1.6.4.min.js',
    'bower_components/laravel-quicktask/js/jquery-ui/jquery.ui.core.min.js',
    'bower_components/laravel-quicktask/js/jquery-ui/jquery.ui.widget.min.js',
    'bower_components/laravel-quicktask/js/jquery-ui/jquery.ui.accordion.min.js',
    'bower_components/laravel-quicktask/js/jquery-ui/jquery.effects.core.min.js',
    'bower_components/laravel-quicktask/js/jquery-ui/jquery.effects.slide.min.js',
    'bower_components/laravel-quicktask/js/jquery-ui/jquery.ui.mouse.min.js',
    'bower_components/laravel-quicktask/js/jquery-ui/jquery.ui.sortable.min.js',
    'bower_components/laravel-quicktask/js/table/jquery.dataTables.min.js'
], 'public/js/jquery.js');
mix.scripts([
    'bower_components/laravel-quicktask/js/setup.js'
], 'public/js/app.js');
mix.styles([
    'bower_components/font-awesome.min/index.css'
], 'public/css/font-awesome.min.css');

