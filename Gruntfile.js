module.exports = function(grunt){
    grunt.initConfig({
        cssmin: {
			target: {
				files: [{
					expand: true,
					cwd: 'assests/css/',
					src: [`style.css`, `!style.min.css`],
					dest: `assests/css/`,
					ext: `.min.css`
				}]
			}
		},
        csslint: {
          strict: {
            options: {
              import: 1
            },
            src: [`assests/css/style.css`, `!assests/css/style.min.css`]
          }
        },
		jshint: {
			files: [`assests/js/*.js`, `!assests/js/*.min.js`],
			options: {
				esversion: 6
			}
		},
        uglify: {
            my_target: {
                files: {
                    'assests/js/script.min.js': ['assests/js/script.js']
                }
            }
        },
		watch: {
			js: {
				files: [`assests/js/*.js`, `!assests/js/*.min.js`],
				tasks: [`jshint`, `uglify`]
			},
			cssmin: {
				files: [`assests/css/style.css`, `!assests/css/style.min.css`],
				tasks: [`cssmin`, `csslint`]
			}
		}
    });

    grunt.loadNpmTasks(`grunt-contrib-watch`);
    grunt.loadNpmTasks(`grunt-contrib-cssmin`);
    grunt.loadNpmTasks(`grunt-contrib-csslint`);
    grunt.loadNpmTasks(`grunt-contrib-jshint`);
    grunt.loadNpmTasks(`grunt-contrib-uglify-es`);

    grunt.registerTask(`default`, [`watch`]);
};
