module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		jshint: {
			options: {
				reporter: require('jshint-stylish')
			},
			operation: ['Gruntfile.js', 'src/scripts/*.js'] 
		},
		sass: {
			options: {
				sourceMap: true
			},			
			operation: {
				files: {
					'dist/css/style.css': 'src/sass/style.scss'
				}
			}
		},
		cssmin: {
			options: {
				advanced: false
			},
			operation: {
				files: {
					'dist/css/style.min.css': 'dist/css/style.css'
				}
			}
		},
		uglify: {
			operation: {
				files: {
					'dist/scripts/main.min.js': 'src/scripts/*.js'
				}
			}
		},
		watch: {
			gruntfile: {
				files: 'Gruntfile.js',
				tasks: ['jshint:gruntfile']
			},
			scss: {
				files: ['src/**/*.scss', ],
				tasks: ['sass']
			},
			js: {
				files: 'src/scripts/*.js',
				tasks: ['jshint', 'uglify']
			},
			cssmin: {
				files: 'dist/css/style.css',
				tasks: ['cssmin']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');	
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
};