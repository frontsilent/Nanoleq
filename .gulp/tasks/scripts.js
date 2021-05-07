const gulp          = require('gulp');
const config        = require('../config');
const browserSync   = require('browser-sync');



gulp.task('scripts', () => {
    return gulp
        .src(config.paths.src.js)
        .pipe(browserSync.reload({
            stream: true
        }));
});