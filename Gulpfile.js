var gulp = require('gulp');
var phpspec = require("gulp-phpspec");
var notify = require("gulp-notify");
var shell = require("gulp-shell");

gulp.task("test",function(){
   gulp.src('spec/**/*.php')
    .pipe(shell('clear'))
    .pipe(phpspec('', { notify: true }))
    .on('error', notify.onError({
           title: 'Fail',
           message: 'Your tests failed!',
           sound: 'Frog'
       }))
       .pipe(notify({
           title: 'Success',
           message: 'All tests passed!'
       }))
    
});

gulp.task('watch',function() {
   gulp.watch(['spec/**/*.php','src/**/*.php'],['test']);
});

gulp.task('default',['test','watch']);