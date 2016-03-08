module.exports = function(grunt) {
	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		// Sass
		sass: {
			dist: {
				options: {
					style: 'expanded',
					sourcemap: 'none'
				},
				files: {
					'style.css': 'sass/global.scss',
					'css/dev.style.css': 'sass/global.scss',
					'css/ie9.style.css': 'sass/ie9.scss',
				}
			}
		},
    //PostCSS
    postcss: {
      options: {
        processors: [
          require('autoprefixer')(),
          require('rucksack-css')({ fallbacks: true })
        ]
      },
      dist: {
        src: 'style.css',
        dest: 'style.css'
      },
      dev: {
        src: 'css/dev.style.css',
        dest: 'css/dev.style.css'
      },
    },
		// CSSmin
    cssmin: {
			target: {
				files: {
					'style.css': 'style.css'
				}
			}
    },
		// Concat JS
    concat: {
      head: {
        src: [
          'js/lib/no-conflict.js',
          'js/vendor/picturefill.js'
        ],
        dest: 'js/head.js'
      },
      main: {
        src: [
          'js/lib/no-conflict.js',
          'js/lib/skip-navigation.js'
        ],
        dest: 'js/scripts.js'
      },
      ie: {
       src: [
          'js/vendor/html5.js',
          'js/vendor/respond.js'
        ],
        dest: 'js/ie.js'
      }
    },
    // Jshint
    jshint: {
      files: [
      	'js/scripts.js',
      	'js/ie.js',
      ],
			options: {
				scripturl: true,
				globals: {
					jQuery: true
				}
			}
    },
		// Uglify
    uglify: {
      options: {
        mangle: false,
        compress: true,
        quoteStyle: 3
      },
      dist: {
        files: {
        	'js/head.min.js': 'js/head.js',
          'js/scripts.min.js': 'js/scripts.js',
          'js/ie.min.js'     : 'js/ie.js',
        }
      }
    },

    // Watch
    watch: {
      scripts: {
        files: ['js/**/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: false
        }
      },
      css: {
        files: ['sass/**/*.scss'],
        tasks: ['sass', 'postcss', 'cssmin']
      }
    },
	});
	// PostCSS
	grunt.loadNpmTasks('grunt-postcss');
  // Concat
  grunt.loadNpmTasks('grunt-contrib-concat');
  // CSSmin
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  // Jshint
  grunt.loadNpmTasks('grunt-contrib-jshint');
  // JSValidate
  grunt.loadNpmTasks('grunt-jsvalidate');
  // Uglify
  grunt.loadNpmTasks('grunt-contrib-uglify');
  // Watch
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Sass
  grunt.loadNpmTasks('grunt-contrib-sass');
  // Watch Task
  grunt.registerTask('default', ['watch']);
};