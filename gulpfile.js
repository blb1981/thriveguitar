const gulp = require('gulp')
const postcss = require('gulp-postcss')
const tailwindcss = require('tailwindcss')
const autoprefixer = require('autoprefixer')
const browserSync = require('browser-sync').create()
const reload = browserSync.reload

const paths = {
  css: {
    src: 'assets/src/main.css',
    dest: 'assets/css/',
    watch: 'assets/src/**/*.css',
  },
  php: '**/*.php',
  js: 'assets/js/**/*.js',
}

function css() {
  return gulp
    .src(paths.css.src)
    .pipe(postcss([tailwindcss, autoprefixer]))
    .pipe(gulp.dest(paths.css.dest))
    .pipe(browserSync.stream())
}

function serve() {
  browserSync.init({
    proxy: 'http://thrive-guitar.test/', // 🔁 change this to match your local URL
    open: true,
    notify: true,
  })

  gulp.watch(paths.css.watch, css)
  gulp.watch(paths.php).on('change', reload)
  gulp.watch(paths.js).on('change', reload)
}

exports.css = css
exports.default = gulp.series(css, serve)
