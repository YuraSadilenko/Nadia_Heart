const gulp = require("gulp");
 sass = require("gulp-sass"),
 browserSync = require("browser-sync"),
 plumber = require("gulp-plumber"),
 rename = require("gulp-rename"),
 autoprefixer = require("gulp-autoprefixer"),
 imagemin = require('gulp-imagemin'),
 uglify = require('gulp-uglify'),
 pipeline = require('readable-stream').pipeline,
 cleanCSS = require('gulp-clean-css');
 
	gulp.task('uglify', function () {
  	return pipeline(
    gulp.src('src/script/*.js'),
    uglify(),
    gulp.dest('dist/src/script')
  	);
	});

	gulp.task('minify-css', () => {
		return gulp.src('src/css/*.css')
			.pipe(cleanCSS({compatibility: 'ie8'}))
			.pipe(gulp.dest('dist/src/css'));
	});

gulp.task("sass", function() {
  gulp
    .src("./src/sass/main.scss")
    .pipe(plumber())
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(rename("style.css"))
    .pipe(
      autoprefixer({
        browsers: ["last 2 versions"],
        cascade: false
      })
    )
    .pipe(gulp.dest("src/css"))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task("watch", ["sass", "browser"], function() {
	gulp.watch("src/sass/**/*.scss", ["sass"]);
	gulp.watch("index.html", browserSync.reload);
	gulp.watch("*.php", browserSync.reload);

});

gulp.task("browser", function() {
	// browserSync({
	// 	server: { baseDir: "src" },
	//notify: false
	// });
	browserSync.init(null, {
		proxy: "nadia",
		// proxy: "duncany/about.php",
		host: 'localhost',
		port: 3000,
		browser: "opera"
		// browser: "firefox"
		// browser: ["chrome", "firefox"]
	});
});

gulp.task("build", function() {
	gulp.src(["src/css/*.css"]).pipe(gulp.dest("dist/src/css"));
	gulp.src(["src/bootstrap/css/*.css"]).pipe(gulp.dest("dist/src/bootstrap/css"));
	gulp.src(["src/bootstrap/jquery/*.js"]).pipe(gulp.dest("dist/src/bootstrap/jquery"));
	gulp.src(["src/bootstrap/js/*.js"]).pipe(gulp.dest("dist/src/bootstrap/js"));
	gulp.src(["src/script/*.js"]).pipe(gulp.dest("dist/src/script"));
	gulp.src(["src/images/*.*"]).pipe(gulp.dest("dist/src/images"));
	gulp.src(["src/video/*.*"]).pipe(gulp.dest("dist/src/video"));
	gulp.src(["src/games/*.*"]).pipe(gulp.dest("dist/src/games"));
	gulp.src(["src/images/svg/*.*"]).pipe(gulp.dest("dist/src/images/svg"));
	gulp.src("*.html").pipe(gulp.dest("dist"));
	gulp.src("*.php").pipe(gulp.dest("dist"));

});

gulp.task('compress', function() {
  gulp.src('src/images/*')
  .pipe(imagemin())
  .pipe(gulp.dest('dist/src/images'))
});