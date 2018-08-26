var gulp = require('gulp');
var concatCss = require('gulp-concat-css');
let cleanCSS = require('gulp-clean-css');
let rename = require('gulp-rename');
let notify = require('gulp-notify');
let sass = 	require("gulp-sass");
let autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var browserSync = require('browser-sync').create();

gulp.task('sass', function () {
    return gulp.src('scss/main.scss')

        .pipe(sass().on('error', sass.logError))
        .on("error", notify.onError({
            message: "Error: <%= error.message %>",
            title: "Error!!!CSS"
        }))
        .pipe(autoprefixer({
            browsers: ['last 10 versions'],
            cascade: false
        }))
        .pipe(csso())
        .pipe(notify('Done!'))
        .pipe(gulp.dest('css/'))

});
gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
    browserSync.watch('./', browserSync.reload)
});



gulp.task('watch', function(){
	gulp.watch('css/*.css'),
    gulp.watch('scss/**/*.scss',gulp.series('sass'));
});

gulp.task('build',gulp.series(
    gulp.parallel('browser-sync','watch','sass'),



));

