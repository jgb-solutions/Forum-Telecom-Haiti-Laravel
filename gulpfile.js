var elixir = require('laravel-elixir');

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
    mix
        .copy('vendor/bower/angular/angular.js', 'resources/assets/js/angular.js')
        .copy('vendor/bower/jquery/dist/jquery.min.js', 'resources/assets/js/jquery.js')

        .less(['bootstrap.less', 'app.less'])

        .scripts([
            'jquery.js',
            'angular.js',
            'bootstrap.js',
            'jquery.easing.js',
            'site.js',
            'form.js',
            'team.js'
        ])

        .version(['css/app.css', 'js/all.js'])
});