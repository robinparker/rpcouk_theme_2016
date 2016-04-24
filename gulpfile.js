var gulp = require('gulp'),
    sass = require('gulp-sass'),
    svgSymbols = require('gulp-svg-symbols'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
    gulp.src('sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('/sass/maps'))
        .pipe(gulp.dest('./'));
});

gulp.task('sprites', function () {
  return gulp.src('assets/svg/*.svg')
    .pipe(svgSymbols())
    .pipe(gulp.dest('assets'));
});


gulp.task('watch', function() {
  gulp.watch('sass/**/*.scss', ['sass']);
});

gulp.task('default', function() {
    gulp.start('sass', 'sprites', 'watch');
});
