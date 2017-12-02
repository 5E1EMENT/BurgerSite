var gulp = require('gulp');
var concatCss = require('gulp-concat-css');
let cleanCSS = require('gulp-clean-css');
let rename = require('gulp-rename')
let notify = require('gulp-notify')

gulp.task('default', function () {
  return gulp.src('css/*.css')
    .pipe(concatCss("bundle.css"))
    .pipe(cleanCSS(""))
    .pipe(rename("bundle.min.css"))
    .pipe(gulp.dest('css/'))
    .pipe(notify('Done!'));
});
gulp.task('watch', function(){
	gulp.watch('css/*.css', ['default'])
});
