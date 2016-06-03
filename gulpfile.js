process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');
var BrowserSync = require('laravel-elixir-browsersync2');

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

   /* BrowserSync.init();*/


    mix.scripts([
            'jquery/dist/jquery.js',
            'keen-ui/dist/keen-ui.js',
            'jqwidgets/jqwidgets/jqx-all.js'
        ],
        'public/js/all.js', 'resources/assets/vendors');

    mix.styles([
        'keen-ui/dist/keen-ui.css',
        'vue-animate/vue-animate.css',
        'jqwidgets/jqwidgets/styles/jqx.base.css',
        'jqwidgets/jqwidgets/styles/jqx.metro.css'
    ], 'public/css/all.css', 'resources/assets/vendors');

    mix.less('app.less');

    mix.browserify([
        'app.js'
    ]);

    mix.copy(
        'resources/fonts', 'public/build/fonts'
    );

/*    mix.Browserync({
        proxy : "lvma.local",
        logConnections: false,
        reloadOnRestart: false,
        notify: false,
        open: false,
        reloadDelay: 1000
    });*/
    
    mix.version(['public/css/all.css', 'public/css/app.css', 'public/js/all.js', 'public/js/bundle.js']);
});
