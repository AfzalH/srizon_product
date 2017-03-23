var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    rename = require("gulp-rename"),
    autoprefix = require('gulp-autoprefixer');

gulp.task('styles', function () {
    gulp.src('sass/**/*.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefix())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./'));
});

gulp.task('scripts', function () {
    gulp.src('js/**/*.js')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(concat('theme.js'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./'));
});

gulp.task('buildcss', function () {
    gulp.src('sass/**/*.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(autoprefix())
        .pipe(gulp.dest('./'));
});

gulp.task('buildjs',function(){
    gulp.src('js/**/*.js')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(concat('theme.js'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./'));
});


gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['styles']);
    gulp.watch('js/**/*.js', ['scripts']);
});

gulp.task('default', ['scripts', 'styles', 'watch']);

gulp.task('build', ['buildcss','buildjs']);