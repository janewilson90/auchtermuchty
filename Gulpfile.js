var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create()

gulp.task('styles', function () {
    gulp.src('scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/'))
});

//Watch task
gulp.task('watch', function () {
    gulp.watch('scss/**/*.scss', ['styles']);
});

//browserSync
gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
});

gulp.task('default', ['watch', 'browser-sync']);