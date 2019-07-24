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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/front.scss', 'public/css', {
     sourceComments: 'map',
     sourceMap: 'sass',
     outputStyle: 'nested'
   })
   .sass('resources/assets/sass/auth.scss', 'public/css')
   .copy('resources/assets/fonts/**/*', 'public/fonts')
    .copy('resources/assets/img/', 'public/img') // site images
    .copy('resources/assets/images/', 'public/images') // vendor imag
