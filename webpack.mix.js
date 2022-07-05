let mix = require('laravel-mix');

mix.js("resources/js/app.js", "public/js")
    .sass('resources/css/style.scss', "public/css")
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ]);
mix.autoload({
    jquery: ['$', 'window.jQuery']
});
mix.options({
    processCssUrls: false,
    terser: {
        extractComments: false,
    }
});
