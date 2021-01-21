const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss")
    ])
    .webpackConfig(require("./webpack.config"));

mix.styles(
    [
        "resources/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css",
        "resources/assets/plugins/global/plugins.bundle.rtl.css",
        "resources/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css",
        "resources/assets/css/style.bundle.rtl.css"
    ],
    "public/css/admin/main.css"
);

mix.styles(
    [
        "resources/index/css/color-customize/color-customizer.css",
        "resources/index/css/magnific-popup/magnific-popup.css",
        "resources/index/css/owl-carousel/owl.carousel.css",
        "resources/index/css/animate.css",
        "resources/index/css/base.css",
        "resources/index/css/bootstrap.min.css",
        "resources/index/css/fontawesome-all.css",
        "resources/index/css/line-awesome.min.css",
        "resources/index/css/responsive.css",
        "resources/index/css/shortcodes.css",
        "resources/index/css/style.css"
    ],
    "public/css/index/main.css"
);

mix.scripts(
    [
        "resources/assets/plugins/global/plugins.bundle.js",
        "resources/assets/plugins/custom/prismjs/prismjs.bundle.js",
        "resources/assets/js/scripts.bundle.js",
        "resources/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js",
        "resources/assets/js/pages/widgets.js",
        "resources/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js",
        "resources/assets/js/pages/crud/forms/editors/ckeditor-classic.js"
    ],
    "public/js/admin/main.js"
);

mix.scripts(
    [
        "resources/index/js/theme.js",
        "resources/index/js/color-customize/color-customizer.js",
        "resources/index/js/contact-form/contact-form.js",
        "resources/index/js/countdown/jquery.countdown.min.js",
        "resources/index/js/counter/counter.js",
        "resources/index/js/magnific-popup/jquery.magnific-popup.min.js",
        "resources/index/js/menu/jquery.smartmenus.js",
        "resources/index/js/owl-carousel/owl.carousel.min.js",
        "resources/index/js/canvas.js",
        "resources/index/js/confetti.js",
        "resources/index/js/snap.svg.js",
        "resources/index/js/step.js",
        "resources/index/js/theme-script.js",
        "resources/index/js/wow.min.js"
    ],
    "public/js/index/main.js"
);
