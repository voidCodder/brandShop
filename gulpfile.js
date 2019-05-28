var syntax        = 'sass'; // Syntax: sass or scss;

var gulp          = require('gulp'),
	gutil         = require('gulp-util' ),
	sass          = require('gulp-sass'),
	browserSync   = require('browser-sync'),
	concat        = require('gulp-concat'),
	uglify        = require('gulp-uglify'),
	cleancss      = require('gulp-clean-css'),
	rename        = require('gulp-rename'),
	autoprefixer  = require('gulp-autoprefixer'),
	notify        = require('gulp-notify');


gulp.task('browser-sync', function() {
	browserSync.init({
		proxy:"brandshop",
		notify: false,
	});
});

gulp.task('styles', function() {
	return gulp.src('www/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('www/css'))
	.pipe(browserSync.stream())
});

gulp.task('scripts', function () {
    return gulp.src([ // Берем все необходимые библиотеки
        'www/libs/**/*.js',
        'www/js/**/*.js' + '',
        ])
        .pipe(concat('scripts.min.js'))
        .pipe(uglify()) // Mifify js (opt.)
        .pipe(gulp.dest('www/dist/js/'))
});

	gulp.task('watch', function() {
		gulp.watch('www/'+syntax+'/**/*.'+syntax+'', gulp.parallel('styles'));
		gulp.watch([
		    'www/libs/**/*.js',
            'www/js/**/*.js' + '',
        ], gulp.parallel('scripts'));
	});
	gulp.task('default', gulp.parallel('styles', 'scripts', 'browser-sync', 'watch'));
