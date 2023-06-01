var gulp = require("gulp");
var sass = require('gulp-sass')(require('sass'));
var postcss = require("gulp-postcss");
var sourcemaps = require("gulp-sourcemaps");
var concat = require('gulp-concat');
var sync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
const { src } = require("gulp");
function browserSync() {
    sync.init({
        proxy:"localhost/power-wp"
    });
    watch('./assets/scss/*.scss', style,style_build);
    watch('./assets/js/main.js', scripts);
    // watch("./**php").on('change',sync.reload);
}
function style() {
    return gulp
        .src('assets/scss/*.scss')
        // Initialize sourcemaps before compilation starts
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        // // Use postcss with autoprefixer and compress the compiled file using cssnano
        // .pipe(postcss([autoprefixer(), cssnano()]))
        // Now add/write the sourcemaps
        .pipe(sourcemaps.write())
        // .pipe(concat('main.min.css'))
        .pipe(gulp.dest('dist/css'))
        // Add browsersync stream pipe after compilation
        // .pipe(sync.stream());
        .pipe(sync.stream());
}
function style_build() {
    return gulp
        .src('assets/scss/*.scss')
        // Initialize sourcemaps before compilation starts
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(autoprefixer({
            overrideBrowserslist:['last 15 versions']
        }))
        .pipe(sync.stream())
        // // Use postcss with autoprefixer and compress the compiled file using cssnano
        // .pipe(postcss([autoprefixer(), cssnano()]))
        // Now add/write the sourcemaps
        .pipe(sourcemaps.write())
        // .pipe(concat('main.min.css'))
        .pipe(gulp.dest('dist/css'))
        // Add browsersync stream pipe after compilation
        // .pipe(browserSync.stream());
}
function watch() {
    // browserSync.init({
    //     // You can tell browserSync to use this directory and serve it as a mini-server
    //     server: {
    //         baseDir: "./src"
    //     }
    //     // If you are already serving your website locally using something like apache
    //     // You can use the proxy setting to proxy that instead
    //     // proxy: "yourlocal.dev"
    // });
    gulp.watch('assets/scss/*.scss', style);
    // We should tell gulp which files to watch to trigger the reload
    // This can be html or whatever you're using to develop your website
    // Note -- you can obviously add the path to the Paths object
    // gulp.watch("*.php", reload);
}
function scripts() {
    return src(['.assets/js/main.js'], {base: 'assets'})
        .pipe(rigger())
        .pipe(sourcemaps.init({
            loadMaps: true
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('dist/'))
}
exports.style = style;
exports.style = browserSync;
exports.build = browserSync;
exports.watch = watch;
exports.build = style_build;