let mix = require('laravel-mix');
require('laravel-mix-sri');
const GoogleFontsPlugin = require("google-fonts-webpack-plugin")

mix
    .sass('resources/assets/scss/app.scss', 'public/css/app.min.css')
    .webpackConfig({
        plugins: [
            new GoogleFontsPlugin({
                filename: '/css/google-fonts.css',
                path: '/fonts/vendor/googlefonts/',
                fonts: [
                    {
                        family: "Lato",
                        variants: [
                            '300',
                            '300i',
                            '400',
                        ]
                    },
                    {
                        family: "Montserrat",
                        variants: [
                            '300',
                        ]
                    }
                ]
            }),
        ],
    })
;
