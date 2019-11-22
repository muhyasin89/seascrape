var gulp = require('gulp'),
    elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.sass('./public/scss/home_smooth.scss');
    mix.scripts(['./bower_components/jarallax/dist/jarallax.js','./bower_components/jarallax/dist/jarallax-element.js'],'public/js/jarallax.js');
    mix.scripts(['./bower_components/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js',
        './bower_components/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js',
        './bower_components/gsap/src/uncompressed/jquery.gsap.js','./bower_components/gsap/src/uncompressed/TweenMax.js',
        './bower_components/gsap/src/uncompressed/TweenLite.js','./bower_components/gsap/src/uncompressed/TimelineLite.js'
        ,'./bower_components/gsap/src/uncompressed/TimelineMax.js'],'public/js/scrollmagic.js');
    mix.scripts(['./bower_components/gsap/src/uncompressed/plugins/ScrollToPlugin.js',
            './bower_components/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js'],
        'public/js/gsap.js');

    mix.scripts(['./bower_components/masonry-layout/dist/masonry.pkgd.js'],'public/js/masonry.js');
    mix.styles(['./bower_components/jarallax/dist/jarallax.css'],'public/css/jarallax.css');
});
