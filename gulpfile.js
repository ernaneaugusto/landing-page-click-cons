var gulp = require("gulp");
var sass = require("gulp-sass");
var plumber = require('gulp-plumber');

var pastaSCSS = ["./src/scss/*.scss"];
var pastaCSS = "./";

gulp.task("sass", function () {
    return gulp.src(pastaSCSS)
        .pipe(plumber())
        .pipe(sass())
        .pipe(gulp.dest(pastaCSS));
});

gulp.task("sass-watch", function () {
    gulp.watch(pastaSCSS, ["sass"]);
});

gulp.task("default", ["sass", "sass-watch"]);