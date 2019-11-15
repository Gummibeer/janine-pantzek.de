const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const glob = require('glob');
const path = require('path');

Mix.listen('configReady', webpackConfig => {
    webpackConfig.module.rules.forEach(rule => {
        if (Array.isArray(rule.use)) {
            rule.use.forEach(ruleUse => {
                if (ruleUse.loader === 'resolve-url-loader') {
                    ruleUse.options.engine = 'postcss';
                }
            });
        }
    });
});
mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.svg(\?.*)?$/,
                use: [
                    {
                        loader: 'svgo-loader',
                        options: {
                            plugins: [
                                {removeTitle: true},
                                {convertColors: {shorthex: false}},
                                {convertPathData: false}
                            ]
                        }
                    }
                ]
            }
        ]
    }
});
mix.options({
    processCssUrls: true,
    postCss: [
        require('postcss-discard-comments')({
            removeAll: true,
        }),
    ],
});
mix.purgeCss();
mix.version();

mix
    .sass('resources/assets/scss/app.scss', 'css')
    .js('resources/assets/js/app.js', 'public/js/app.js')
    .copy('resources/assets/img/moved.svg', 'public/images/moved.svg')
;

glob.sync(path.resolve(__dirname, 'resources', 'assets', 'img') + '/**/*.jpg').forEach(img => {
    mix.copy(img, img.replace(path.resolve(__dirname, 'resources', 'assets', 'img'), 'public/images'));
});
