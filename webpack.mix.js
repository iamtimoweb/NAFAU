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

mix.js('resources/js/backend.js', 'public/backend/js')
    .js('resources/js/dashboard.js', 'public/backend/js')
    .js('resources/js/frontend.js', 'public/frontend/js')
    .sass('resources/sass/backend/backend.scss', 'public/backend/css')
    .sass('resources/sass/frontend/frontend.scss', 'public/frontend/css')
    .options({
        processCssUrls: false
    });
