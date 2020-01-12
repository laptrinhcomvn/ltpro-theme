var fs = require('fs');
var CleanCSS = require('clean-css');
var sass = require('node-sass');

sass.render({
        file: 'scss/style.scss',
        outputStyle: 'compressed',
    },
    function (error, result) {
        if (!error) {
          // No errors during the compilation, write this result on the disk
          fs.writeFile("css/style.css", result.css.toString(), function(err) {
            if (err) {
              console.log(err);
            }
          });
        } else {
          console.log(error);
        }
    });


sass.render({
        file: 'scss/responsive.scss',
        outputStyle: 'compressed',
    },
    function (error, result) {
        if (!error) {
          // No errors during the compilation, write this result on the disk
          fs.writeFile("css/responsive.css", result.css.toString(), function(
            err
          ) {
            if (err) {
              console.log(err);
            }
          });
        } else {
          console.log(error);
        }
    });


new CleanCSS().minify(['css/style.css', 'css/responsive.css']);


var Terser = require("terser");
var result = Terser.minify(fs.readFileSync("js/ltpro.js", "utf8"), {
    compress: {
        dead_code: true,
        global_defs: {
            DEBUG: false
        }
    }
});
fs.writeFileSync("js/ltpro.min.js", result.code, "utf8");