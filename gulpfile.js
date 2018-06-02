'use strict';

const gulp      = require('gulp'),
    shell       = require('gulp-shell'),
    sass        = require('gulp-sass'),
    clean       = require('gulp-clean'),
    del         = require('del'),
    concat      = require('gulp-concat'),
    browserSync = require('browser-sync').create(),
    runSequence = require('run-sequence'),
    sourcemaps  = require('gulp-sourcemaps'),
    minify      = require('gulp-minify'),
    less        = require('gulp-less'),
    minifyCss   = require('gulp-minify-css'),
    merge       = require('merge-stream'),
    autoprefixer = require('gulp-autoprefixer'),
    themeInfo   = require('./theme.json');

let path, theme, assets, resource = {};

path = {
    "public"      : "../../public",
    "theme"       : "../../public/themes/" + themeInfo.name.toLowerCase(),
    "assets"      : "assets",
    "resource"    : "resources",
    "css"         : "/css",
    "js"          : "/js",
    "sass"        : "/sass",
    "video"       : "/videos",
    "image"       : "/images",
    "fonts"       : "/fonts",
    "vendor"      : "/vendor",
    "maps"        : "../maps"
};

theme = {
    "name"      : themeInfo.name,
    "path"      : path.theme,
    "js"        : path.theme + path.js,
    "css"       : path.theme + path.css,
    "maps"      : path.maps
};

assets = {
    "path"      : path.assets,
    "css"       : path.assets + path.css,
    "js"        : path.assets + path.js,
    "image"     : path.assets + path.image,
    "video"     : path.assets + path.video,
    "vendor"    : path.assets + path.vendor,
    "maps"      : path.maps
};

resource = {
    "path"      : path.resource,
    "vendor"    : path.resource + path.vendor,
    "extVendor" : path.resource + '/ext-vendor',
    "assets"    : path.resource + '/' + path.assets
};

resource.asset = {
    "css"       : resource.assets + path.css,
    "js"        : resource.assets + path.js,
    "image"     : resource.assets + path.image,
    "video"     : resource.assets + path.video,
    "vendor"    : resource.assets + path.vendor,
    "sass"      : resource.assets + path.sass,
    "fonts"     : resource.assets + path.fonts,
    "maps"      : path.maps
};

let vendorCopy = {
    src: [
        resource.vendor+'/html5shiv/dist/html5shiv.min.js',
        resource.vendor+'/respond/dest/respond.min.js',
        resource.vendor+'/animate.css/animate.min.css',
        resource.vendor+'/bootstrap-sass/assets/fonts/**',
        resource.vendor+'/bootstrap-sass/assets/javascripts/**',
        resource.vendor+'/bootstrap-select/dist/**',
        resource.vendor+'/bootstrap-touchspin/dist/**',
        resource.extVendor+'/countdown/**',
        resource.extVendor+'/counter/**',
        resource.extVendor+'/imagesloaded/**',
        resource.extVendor+'/masonry/**',
        resource.vendor+'/magnific-popup/dist/**',
        resource.extVendor+'/owl-carousel/**',
        resource.extVendor+'/paroller/**',
        resource.extVendor+'/particles/**',
        resource.extVendor+'/scroll/**',
        resource.extVendor+'/tilt/**',
        resource.vendor+'/wow/dist/**',
        resource.extVendor+'/revolution/**',
        resource.vendor+'/font-awesome/css/**',
        resource.vendor+'/font-awesome/fonts/**',
        resource.extVendor+'/fonticonpicker/**',
        resource.vendor+'/smartmenus/dist/**',
        resource.vendor+'/jssocials/dist/**'
    ],
    dest: [
        resource.asset.js,
        resource.asset.js,
        resource.asset.css,
        resource.asset.fonts,
        resource.asset.vendor+'/bootstrap/js',
        resource.asset.vendor+'/bootstrap-select',
        resource.asset.vendor+'/bootstrap-touchspin',
        resource.asset.vendor+'/countdown',
        resource.asset.vendor+'/counter',
        resource.asset.vendor+'/imagesloaded',
        resource.asset.vendor+'/masonry',
        resource.asset.vendor+'/magnific-popup',
        resource.asset.vendor+'/owl-carousel',
        resource.asset.vendor+'/paroller',
        resource.asset.vendor+'/particles',
        resource.asset.vendor+'/scroll',
        resource.asset.vendor+'/tilt',
        resource.asset.vendor+'/wow',
        resource.asset.vendor+'/revolution',
        resource.asset.fonts+'/fontawesome/css',
        resource.asset.fonts+'/fontawesome/fonts',
        resource.asset.vendor+'/fonticonpicker',
        resource.asset.vendor+'/smartmenus',
        resource.asset.vendor+'/jssocials'
    ]
};

gulp.task('sass', function () {
    return gulp.src([
        resource.asset.sass + '/**/*.scss'
    ])
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write(resource.asset.maps))
        .pipe(gulp.dest(resource.asset.css))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('sass-public', function () {
    return gulp.src([
        resource.asset.sass + '/**/*.scss'
    ])
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write(theme.maps))
        .pipe(gulp.dest(theme.css))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('revolution.combine', function() {
    return gulp.src([
        resource.extVendor + "/revolution/js/jquery.themepunch.tools.min.js",
        resource.extVendor + "/revolution/js/jquery.themepunch.revolution.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.actions.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.carousel.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.kenburn.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.layeranimation.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.migration.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.navigation.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.parallax.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.slideanims.min.js",
        resource.extVendor + "/revolution/js/extensions/revolution.extension.video.min.js"
    ])
        .pipe(minify())
        .pipe(concat('jquery.revolution.min.js'))
        .pipe(gulp.dest(resource.extVendor+"/revolution/js"));
});

gulp.task('clear-vendor', function(){
    return del(resource.asset.vendor+"/**/*", {force: true});
});

gulp.task('copy-vendor', function () {
    for (let i = 0; i < vendorCopy.src.length; i++) {
        gulp.src(vendorCopy.src[i])
            .pipe(gulp.dest(vendorCopy.dest[i]));
    }
    return;
});

gulp.task('scripts', function(){
    del(resource.asset.js+'/custom.min.js',{force:true});
    return gulp.src(resource.asset.js+'/custom.js')
        .pipe(minify({
            ext: {
                min: '.min.js'
            }
        }))
        .pipe(gulp.dest(resource.asset.js));
});


gulp.task('scripts-copy', ['scripts'], function(){
    return gulp.src(resource.asset.js+'/**/*')
        .pipe(gulp.dest(theme.js))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('clear-assets', function(){
    return del(assets.path+"/**/*", {force: true});
});

gulp.task('copy-assets', ['clear-assets'], function () {
    return gulp.src(resource.assets+'/**/*')
        .pipe(gulp.dest(assets.path));
});

gulp.task('stylistPublish', function(){
    return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + theme.name));
});

gulp.task('clear-public', function(){
    return del(theme.path+"/**/*", {force: true});
});

gulp.task('production', ['clear-public'], function(){
    runSequence('sass', 'scripts','copy-vendor', 'copy-assets', 'stylistPublish');
});

// Configure the proxy server for livereload
var proxyServer = "http://dev.arben.com";

var arrAddFiles = [
    'views/**/*.php'
];

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: proxyServer,
        files: arrAddFiles,
        ghostMode: {
            clicks: true,
            location: true,
            forms: true,
            scroll: true
        },
        notify: true,
        open: false
    });
});

gulp.task('watch', ['browser-sync'], function () {
    gulp.watch([resource.asset.sass + '/**/*.scss'], ['sass-public']);
    gulp.watch([resource.asset.js + '/**/*.js'], ['scripts-copy']);
    gulp.watch('views/**/*.php', browserSync.reload);
});