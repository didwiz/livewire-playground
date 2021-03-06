const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

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

mix
  .js("resources/js/app.js", "public/js")
  .copyDirectory("resources/img", "public/img")
  .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
  .webpackConfig({
    module: {
      rules: [
        {
          test: /\.postcss$/,
          use: ["style-loader", "postcss-loader"]
        }
      ]
    }
  });

mix.browserSync("https://audiotap.test").disableNotifications();
if (mix.inProduction()) {
  mix.version();
}
