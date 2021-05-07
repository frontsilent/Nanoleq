const gulp          = require('gulp');
const config        = require('../config');
const fileInclude   = require('gulp-file-include');
const browserSync   = require('browser-sync');

gulp.task('html', function () {
    gulp
        .src(config.paths.src.html)
        .pipe(fileInclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(gulp.dest(config.paths.build.html))
        .pipe(browserSync.reload({
            stream: true
        }));
});


