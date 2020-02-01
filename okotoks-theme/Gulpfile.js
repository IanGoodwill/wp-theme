var gulp = require('gulp');
var sass = require('gulp-sass');

//Process SASS files; compile css.

gulp.task('styles', function() {
    gulp.src('assests/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assests/css/'))

});

// watch task.
gulp.task('default', function()  {
    gulp.watch('assets/scss/**/*.scss', gulp.series(['styles']));
});