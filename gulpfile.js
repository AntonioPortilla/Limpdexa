const	gulp 		= require('gulp'),
		browserSync = require('browser-sync').create(),
		reload      = browserSync.reload,
		concat 		= require('gulp-concat'),
		rename 		= require('gulp-rename'),
		sourcemaps 	= require('gulp-sourcemaps'),
		notify 		= require('gulp-notify'),
		cssmin 		= require('gulp-cssmin'),
		less 		= require('gulp-less');

var path = {
	less: {
		watch: ['wp-content/themes/limpdex/**/*.less'],
		from: 'wp-content/themes/limpdex/*.less'
	}
};

gulp.task('less', function() {
	gulp.src(path.less.from)
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest('wp-content/themes/limpdex'))
});

gulp.task('cssmin', function () {
	gulp.src('wp-content/themes/limpdex/css/style.css')
	.pipe(concat('style.css'))
	.pipe(cssmin())
	//.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest('wp-content/themes/limpdex/'))
	.pipe(notify("Styles minificados correctamente..!"));
});

gulp.task('watch', function() {
	gulp.watch(path.less.watch, ['less']);
});

gulp.task('default', ['less','watch']);
