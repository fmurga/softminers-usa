/*Chama o GULP para dentro do projeto */
var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
/* Criamos as tasks, que serão od indicadores de ação que o GULP deve fazer*/

gulp.task('sass', function () {
 return gulp.src('./scss/**/*.scss')
   .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
   .pipe(gulp.dest('./css'));
});

gulp.task('watch', function(){
	gulp.watch('./scss/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);