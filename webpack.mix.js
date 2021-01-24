const mix = require("laravel-mix");

const postCss = [
  require("postcss-import"),
  require("postcss-nested"),
  require("tailwindcss"),
];

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Genesis theme.
 |
 */

mix
  .js("src/js/admin.js", "js")
  .js("src/js/app.js", "js")

  .postCss("src/css/admin.css", "css", postCss)
  .postCss("src/css/app.css", "css", postCss)
  .postCss("src/css/editor.css", "css", postCss)

  .copy(["src/img"], "assets/img")

  .setPublicPath("assets")

  .version();
