var gulp = require('gulp');
var sass = require('gulp-sass');
// Requires the gulp-sass plugin

//Sass Complie
gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
});

//Auto Watch
gulp.task('watch', function(){
  gulp.watch('app/scss/**/*.scss', ['sass']); 
  // Other watchers
})
