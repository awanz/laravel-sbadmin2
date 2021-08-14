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

mix.styles(
    ['node_modules/startbootstrap-sb-admin-2/css/sb-admin-2'], 
    'public/assets/sbadmin2/css/sbadmin2.css'
);

mix.scripts(
    ['node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.js'], 
    'public/assets/sbadmin2/js/sbadmin2.js'
);

mix.copy('node_modules/startbootstrap-sb-admin-2/vendor', 'public/assets/sbadmin2/vendor');
mix.copy('node_modules/startbootstrap-sb-admin-2/js/demo', 'public/assets/sbadmin2/js/demo');
mix.copy('node_modules/startbootstrap-sb-admin-2/img', 'public/assets/sbadmin2/img');