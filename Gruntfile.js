module.exports = function(grunt){
    grunt.initConfig({
        cssmin: {
			target: {
				files: [{
					expand: true,
					cwd: `assests/css/`,
					src: [`*.css`, `!*.min.css`],
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
            src: [`css/*.css`, `!css/*.min.css`]
          }
        },
		uglify: {
			my_target: {
				files: {
					`assests/js/script.min.js`: [`assests/js/script.js`]
				},
				options: {
					esversion: 6
				}
			}
		},
		jshint: {
			files: [`assests/js/*.js`, `!assests/js/*.min.js`],
			options: {
				esversion: 6
			}
		},
		watch: {
			js: {
				files: [`assests/js/*.js`, `!assests/js/*.min.js`],
				tasks: [`jshint`, `uglify`]
			},
			cssmin: {
				files: [`assests/css/*.css`, `!assests/css/*.min.css`],
				tasks: [`cssmin`, `csslint`]
			}
		}
    });

    grunt.loadNpmTasks(`grunt-contrib-watch`);
    grunt.loadNpmTasks(`grunt-contrib-cssmin`);
    grunt.loadNpmTasks(`grunt-contrib-csslint`);
    grunt.loadNpmTasks(`grunt-contrib-jshint`);
    grunt.loadNpmTasks(`grunt-contrib-uglify-es`);

    grunt.registerTask(`grunt`, [`watch`]);
};
