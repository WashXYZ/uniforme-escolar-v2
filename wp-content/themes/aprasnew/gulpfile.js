var gulp = require('gulp');
var gulp_concat = require('gulp-concat');
var gulp_compass = require('gulp-compass');
var sync = require('browser-sync').create();

gulp.task('copylib', function() {

gulp.src('./node_modules/bootstrap/dist/js/bootstrap.js').pipe(gulp.dest('./js'));
gulp.src('./node_modules/jquery/dist/jquery.js').pipe(gulp.dest('./js'));
gulp.src('./node_modules/bootstrap/dist/css/bootstrap.css').pipe(gulp.dest('./css'));
gulp.src('./node_modules/font-awesome/css/font-awesome.css').pipe(gulp.dest('./css'));
gulp.src('./node_modules/font-awesome/fonts/**/*').pipe(gulp.dest('./webfonts'));

})


gulp.task('sass', function() {

var stream = gulp.src('./_dev/scss/style.scss').pipe(gulp_compass({

'sass':'./_dev/scss',
'config_file': './config.rb',
'css': './',

}))
.pipe(gulp.dest('./css'));

return stream;

})


gulp.task('concatJs', function() {

var stream =  

gulp.src([ 
'./js/jquery.js',
'./js/bootstrap.js',
"./node_modules/jquery-touchswipe/jquery.touchSwipe.js", 
'./_dev/js/**/*']).
pipe(gulp_concat('theme.js')).pipe(gulp.dest('./js'));


return stream;

});

gulp.task('concatCss', function() {

    var stream =  
    
    gulp.src(['./style.css', './css/bootstrap.css', "./node_modules/slick-carousel/slick/slick.css", 
    "./node_modules/slick-carousel/slick/slick-theme.css",
    './css/font-awesome.css']).
    pipe(gulp_concat('style.css')).pipe(gulp.dest('./'));
    
    return stream;
    
    });
    

gulp.task('watch', function() {

gulp.watch('./_dev/scss/**/*', gulp.series('sass', 'concatCss'));
gulp.watch('./_dev/js/**/*', gulp.series('concatJs'));

})


gulp.task('sync', function() {
      sync.init({
        server: {
            baseDir: "./"
        }
    });

gulp.watch('./_dev/scss/**/*', ['sass', sync.reload]);
gulp.watch('./_dev/js/**/*', ['concatJs', sync.reload]);
gulp.watch('./*.html', [sync.reload]);
})



