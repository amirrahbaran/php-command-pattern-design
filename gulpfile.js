var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

console.log(__dirname);
gulp.task('test', function() {
    gulp.src('phpspec.yml')
        .pipe(phpspec('./bin/phpspec run', { 'verbose': 'v', notify: true }))
        .on('error', notify.onError({
            title: "All test failed",
            message: "Your tests failed!",
            icon: __dirname + '/failed.png'
        }))
        .pipe(notify({
            title: "All test passed",
            message: "All tests have returned green!",
            icon: __dirname + '/passed.png'
        }));
});

gulp.task('watch', function() {
    gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);