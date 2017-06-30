// Include the necessary modules.

var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass');
    postcss = require('gulp-postcss');
    autoprefixer = require('autoprefixer');
    concat = require('gulp-concat');

// Configure Browsersync.
gulp.task('browser-sync', function() {
    var files = [
        './style.css',
        './*.php'
    ];

// Initial Browsersync with PHP Server
browserSync.init(files, {
    proxy: "http://localhost:8888/forum-studio/"
  
  });

});


// Configure Sass task to run when the specified .scss files change.
// Browsersync will also reload browsers.

gulp.task('sass', function() {
    return gulp.src([
        'node_modules/slick-carousel/slick/slick.css',
        'node_modules/slick-carousel/slick/slick-theme.css',
        'sass/style.scss'
        ])
        .pipe(sass({
            'outputStyle': 'compressed'
        }))
        .pipe(postcss([ autoprefixer() ]))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});



gulp.task('js', function () {
    return gulp.src([
        'node_modules/slick-carousel/slick/slick.js',
        'js/forum/*.js'
    ])
    .pipe(concat('theme.js'))
    .pipe(gulp.dest('js'));
 
});

// Create the default task that can be called using 'gulp'.
// The task will process sass, run browser-sync and start watching for changes.
gulp.task('default', ['sass', 'js', 'browser-sync'], function() {
    gulp.watch("sass/**/*.scss", ['sass']);
})