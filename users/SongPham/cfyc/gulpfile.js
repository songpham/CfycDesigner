/**
 * compress js before upload to live
 */
var gulp         = require('gulp'),
    gulpif       = require('gulp-if'),
    gutil        = require('gulp-util'),
    uglify       = require('gulp-uglify'),
    concat       = require('gulp-concat'),
    cssmin       = require('gulp-cssmin'),
    sass         = require('gulp-sass'),
    plumber      = require('gulp-plumber');
var errorHandle = function (error) {
    gutil.log(gutil.colors.red(error.message));
    this.emit('end');
};
var production = false;
var paths = {
    // except: '!client/external/**/*.coffee'
    scripts_1: [
        './bower_components/jquery/dist/jquery.js',
        './bower_components/bootstrap/dist/js/bootstrap.js'
    ],
    scripts_2: [
        './app/common.js',
        './app/default.js'
    ],
    css_1: [
        './bower_components/bootstrap/dist/css/bootstrap.css',
        './bower_components/font-awesome/css/font-awesome.css'
    ],
    css_2: [
        './app/stylesheets/**/*.scss',
        './app/stylesheets/main.scss'
    ]
};
// Minify and copy all JavaScript (except vendor scripts)
gulp.task('scripts_1', function () {
    return gulp.src(paths.scripts_1)
        .pipe(plumber(errorHandle)) /* replaces pipe method and removes standard onerror handler on error event */
        .pipe(concat('vendor.min.js'))
        .pipe(gulpif(production, uglify({ mangle: false })))
        .pipe(gulp.dest('./public/js'));
});
gulp.task('scripts_2', function () {
    return gulp.src(paths.scripts_2)
        .pipe(plumber(errorHandle)) /* replaces pipe method and removes standard onerror handler on error event */
        .pipe(concat('bundle.min.js'))
        .pipe(gulpif(production, uglify({ mangle: false })))
        .pipe(gulp.dest('./public/js'));
});
// Minify and copy all Css (except vendor scripts)
gulp.task('css_1', function () {
    return gulp.src(paths.css_1)
        .pipe(plumber(errorHandle)) /* replaces pipe method and removes standard onerror handler on error event */
        .pipe(concat('vendor.min.css'))
        .pipe(gulpif(production, cssmin()))
        .pipe(gulp.dest('./public/css'));
});
gulp.task('css_2', function () {
    return gulp.src(paths.css_2)
        .pipe(plumber(errorHandle)) /* replaces pipe method and removes standard onerror handler on error event */
        .pipe(sass())
        .pipe(concat('bundle.min.css'))
        .pipe(gulpif(production, cssmin()))
        .pipe(gulp.dest('./public/css'));
});
// Rerun the task when a file changes
gulp.task('watch', function () {
    gulp.watch(paths.scripts_2, ['scripts_2']);
    gulp.watch(paths.css_2, ['css_2']);
});
// run in cmd: gulp
gulp.task('default', [
    'watch',
    'scripts_1',
    'scripts_2',
    'css_1',
    'css_2'
]);