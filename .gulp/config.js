const util = require('gulp-util');

let config = {
    logEnvironment: function () {
        util.log(
            'Environment:',
            util.colors.white.bgRed(' ' + process.env.NODE_ENV.toUpperCase() + ' ')
        );
    },
    paths: {
        build: {
            html: 'build/',
            css: 'build/css/',
            img: 'build/img/',
            fonts: 'build/fonts/',
            js: 'build/js/',
        },
        src: {
            html: 'src/*.html',
            css: 'src/sass/**/*.scss',
            cssLibs: 'src/cssLibs/*.css',
            js: 'build/js/',
            img: 'src/img/**/*.*',
            fonts: 'src/fonts/**/*.*',
        },
        watch: {
            html: 'src/**/*.html',
            css: 'src/sass/**/*.scss',
            cssLibs: 'src/cssLibs/*.css',
            img: 'src/img/**/*.*',
            fonts: 'src/fonts/**/*.*',
            js: 'build/js/*',
        },
    },
    server: {
        server: {
            baseDir: "build"
        },
        host: 'localhost',
        port: 3000,
        logPrefix: "UI"
    }
};

module.exports = config;