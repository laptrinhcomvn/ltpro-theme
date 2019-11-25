var fs = require('fs');
var CleanCSS = require('clean-css');
var sass = require('node-sass');


sass.render({
    file: 'scss/main.scss',
    outputStyle: 'compressed',
},
    function (error, result) {
    if (!error) {
        // No errors during the compilation, write this result on the disk
        fs.writeFile('css/main.css', result.css.toString(), function (err) {
            if(err){console.log(err);}
        });
    }
    });

sass.render({
        file: 'scss/responsive.scss',
        outputStyle: 'compressed',
    },
    function (error, result) {
        if (!error) {
            // No errors during the compilation, write this result on the disk
            fs.writeFile('css/responsive.css', result.css.toString(), function (err) {
                if(err){console.log(err);}
            });
        }
    });


new CleanCSS().minify(['css/main.css', 'css/responsive.css']);



var Terser = require("terser");
var result = Terser.minify(fs.readFileSync("js/main.js", "utf8"), {
    compress: {
        dead_code: true,
        global_defs: {
            DEBUG: false
        }
    }
});
fs.writeFileSync("js/main.min.js", result.code, "utf8");