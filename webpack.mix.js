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

mix.js('resources/assets/js/site.js', 'public/js')
    .sass('resources/assets/sass/site.scss', 'public/css');
mix.js('resources/assets/js/auth.js', 'public/js')
    .sass('resources/assets/sass/auth.scss', 'public/css');
mix.js('resources/assets/js/admin.js', 'public/js')
    .sass('resources/assets/sass/admin.scss', 'public/css');
mix.js('resources/assets/js/logs.js', 'public/js')
    .sass('resources/assets/sass/logs.scss', 'public/css');
mix.js('resources/assets/js/error.js', 'public/js')
    .sass('resources/assets/sass/error.scss', 'public/css');