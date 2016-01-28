// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

// compile_sass
gulp.task('compile_sass', function() {
    return gulp.src('sass/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass( {includePaths: ["sass/", "vendor/"]}) )
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(sourcemaps.write('./'))
        .pipe( gulp.dest('./') );
});

// compile_js
gulp.task('compile_js', function() {
    return gulp.src(['js/src/modules.js', 'js/src/directives/*.js'])
        .pipe( concat( 'chinasa.js', {newLine: ';'} ) )
        .pipe( gulp.dest('js/dist/') )
        .pipe( uglify() )
        .pipe(rename({extname: ".min.js" }))
        .pipe( gulp.dest('js/dist/') );
});


// build
gulp.task('watch', function() {
    gulp.watch(['js/src/*.js', 'js/src/**/*.js'], ['compile_js']);
    gulp.watch(['sass/**/*.scss'], ['compile_sass']);
});

// watch
gulp.task('build', ['compile_js','compile_sass']);

// Default Task
gulp.task('default', ['watch']);
