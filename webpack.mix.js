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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.sass('resources/sass/app.sass', 'public/css')
mix.sass('resources/sass/home.sass', 'public/css')
mix.sass('resources/sass/style.sass', 'public/css')
mix.sass('resources/sass/login.sass', 'public/css')
mix.sass('resources/sass/admin.sass', 'public/css')
mix.sass('resources/sass/vide.sass', 'public/css')

