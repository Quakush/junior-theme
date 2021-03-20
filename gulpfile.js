"use strict";

var gulp = require("gulp");
var plumber = require("gulp-plumber");
var sass = require("gulp-sass");
sass.compiler = require("node-sass");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var csso = require("gulp-csso");
var rename = require("gulp-rename");
var posthtml = require("gulp-posthtml");
var imagemin = require("gulp-imagemin");
var webp = require("gulp-webp");
var cleanCSS = require("gulp-clean-css");
var concat = require("gulp-concat");
var uglify = require("gulp-uglify-es").default;
var del = require("del");
var server = require("browser-sync").create();


gulp.task("style", function() {
  return gulp.src("sass/style.scss")
    .pipe(plumber())
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(gulp.dest("css"))
    .pipe(server.stream())
});

gulp.task("server", function () {
  server.init({
    proxy: "junior-corporation",
    notify: false,
  });

  gulp.watch("sass/**/*.scss", gulp.series("style"));
  gulp.watch("*.php").on("change", server.reload);
});

//gulp.task('browser-sync', function() {
  //browserSync.init({
    //server: {
      //baseDir: 'app'
    //},
    //notify: false,
    // online: false, // Work offline without internet connection
    // tunnel: true, tunnel: 'projectname', // Demonstration page: http://projectname.localtunnel.me
  //})
//});
//function bsReload(done) { browserSync.reload(); done() };

//gulp.task('styles', function () {
  //return gulp.src('sass/**/*.sass')
  //.pipe(sass({
    //outputStyle: 'expanded',
    //includePaths: require('node-bourbon').includePaths
  //}).on('error', sass.logError))
  //.pipe(rename({suffix: '.min', prefix : ''}))
  //.pipe(autoprefixer({
    // grid: true, // Optional. Enable CSS Grid
    //overrideBrowserslist: ['last 10 versions']
  //}))
  //.pipe(cleanCSS())
  //.pipe(gulp.dest('css'))
  //.pipe(browserSync.stream());
//});

//gulp.task('scripts', function() {
  //return gulp.src([
    //'app/libs/modernizr/modernizr.js',
    //'app/libs/jquery/jquery-1.11.2.min.js',
    //'app/libs/waypoints/waypoints.min.js',
    //'app/libs/animate/animate-css.js',
   // ])
    //.pipe(concat('libs.js'))
    //.pipe(uglify()) //Minify libs.js
    //.pipe(gulp.dest('app/js/'))
    //.pipe(browserSync.reload({ stream: true }));
//});

//gulp.task('code', function() {
  //return gulp.src('app/**/*.html')
  //.pipe(browserSync.reload({ stream: true }))
//});

//gulp.task('watch', function () {
  //gulp.watch('sass/**/*.sass', gulp.parallel('styles'));
  //gulp.watch(['app/js/common.js', 'app/libs/**/*.js'], gulp.parallel('scripts'));
  //gulp.watch('app/*.html', gulp.parallel('code'));
//});

//gulp.task('default', gulp.parallel('styles', 'scripts', 'browser-sync', 'watch'));
