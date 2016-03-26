var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
    // gulp.src('./styles/scss/*.scss')
    // gulp.src(['./_sass/*.scss', './bower_components/foundation/scss'])
    gulp.src('sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'));
});


gulp.task('watch', function() {
  gulp.watch('sass/*.scss', ['sass']);
});

gulp.task('default', function() {
    gulp.start('sass', 'watch');
});
