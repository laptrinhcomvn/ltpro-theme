var fs = require('fs');
var gcc = require('google-closure-compiler').compiler;
var CleanCSS = require('clean-css');
var sass = require('node-sass');

sass.render({
    file: 'scss/style.scss',
    outputStyle: 'compressed',
},
    function (error, result) {
    if (!error) {
        // No errors during the compilation, write this result on the disk
        fs.writeFile('css/style.css', result.css.toString(), function (err) {
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


new CleanCSS().minify(['css/style.css', 'css/responsive.css']);

new gcc({
    js: ['js/ltpro.js'],
    js_output_file: 'js/ltpro.min.js'
}).run(function (exitCode, stdOut, stdErr) {
    if (stdErr)console.log(stdErr);
    if (stdOut)console.log(stdOut);
});
