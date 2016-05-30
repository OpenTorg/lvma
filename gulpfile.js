process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.scripts([
        'jquery/dist/jquery.js',
        'vue/dist/vue.js',
        'keen-ui/dist/keen-ui.js'
    ],
        'public/js/all.js', 'resources/assets/vendors');

    mix.styles([
        'keen-ui/dist/keen-ui.css'
    ], 'public/css/all.css', 'resources/assets/vendors');

    mix.less('app.less');

    mix.browserify([
        'app.js'
    ]);

    mix.copy(
        'resources/fonts', 'public/fonts'
    );
});
