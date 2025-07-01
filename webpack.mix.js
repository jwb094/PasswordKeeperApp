const mix = require('laravel-mix');
//require('laravel-mix-postcss-config');

// mix.sass('resources/css/main.scss', 'resources/dist/css/main.css', {
//   sassOptions: {
//     includePaths: [
//       './node_modules/uniformcss',
//       './node_modules/flexboxgrid'
//     ]
//   }})

// mix.sass('resources/css/main.scss', 'resources/css/', {
//     sassOptions: {
//       includePaths: [
//         './node_modules/uniformcss',
//         './node_modules/flexboxgrid'
//       ]
//     }})
mix.sass('resources/css/main.scss', 'resources/dist/css/main.css', {
    sassOptions: {
      includePaths: [
        './node_modules/uniformcss',
        './node_modules/flexboxgrid'
      ]
    }})
.js('resources/js/accordion.js', 'resources/dist/js')
.js('resources/js/test.js', 'resources/dist/js')
.copyDirectory('resources/imgs', 'resources/dist/imgs')
.copyDirectory('resources/assets', 'resources/dist/assets');

// // mix.sass('resources/sass/app.scss', 'public/css');


// // mix.js('resources/sass/app.scss', 'public/css');


// // mix.js('src/app.js', 'js');

// let mix = require('laravel-mix');

// mix.js('./resources/js/test.js', './resources/dist/js')
//    .sass('./resources/css/app.scss', './resources/dist/css').setPublicPath('dist');;