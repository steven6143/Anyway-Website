var gulp = require('gulp'),
    gulpLoadPlugins = require('gulp-load-plugins'),
    plugins = gulpLoadPlugins();
 
var cdnUrl = [
	[ 'css/main.css', 'http://anyway-web.b0.upaiyun.com/anyway.fm/main.min.css' ],
	[ 'css/subscribe.css', 'http://anyway-web.b0.upaiyun.com/anyway.fm/subscribe.min.css' ]	
];
 
gulp.task('watch', function() {
	gulp.watch(['*','*/*'], ['default']);
 });
 
 
gulp.task('default', function() {

	gulp.src('template/anyway/elements.php')
		.pipe(plugins.batchReplace(cdnUrl))
		.pipe(gulp.dest('build'));

	gulp.src('css/*.css')
		.pipe(plugins.cleanCss({compatibility: 'ie8'}))
		.pipe(plugins.rename({
		      suffix: '.min'
		    }))
		.pipe(gulp.dest('build'));     
});

