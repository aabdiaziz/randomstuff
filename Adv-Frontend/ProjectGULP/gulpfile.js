var gulp = require('gulp');
var sass = require('gulp-sass');
var babel = require("gulp-babel");

gulp.task('sass', function() {
    return gulp.src('scss/**/*.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('app/css'))
});

gulp.task('watch', function(){
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('app/js/**/*.js', ['babel']);
    // Other watchers
})

gulp.task("babel", function () {
    return gulp.src("app/js/whatever.js")
        .pipe(babel())
        .pipe(gulp.dest("dist"));
});