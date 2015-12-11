module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({

        /**
         * Compile sass file to css
         **/
        sass: {
            options: {
                loadPath: ["sass/", "vendor/"]
            },
            build: {
                src: "sass/style.scss",
                dest: 'style.css'
            }
        },
        concat: {
            options: {
                separator: ';'
            },
            build: {
                src: ['js/src/modules.js', 'js/src/directives/*.js'],
                dest: 'js/dist/chinasa.js'
            }
        },

        /**
         * Watch for every change in sass files js front end files and jade files
         **/
        watch: {
            build: {
                files: ['sass/**/*.scss', 'js/src/*.js', 'js/src/**/*.js'],
                tasks: ['build'],
                options: {
                    livereload: true,
                },
            }
        },
        autoprefixer: {
            options: {
                browsers: [
                    'Android 2.3',
                    'Android >= 4',
                    'Chrome >= 35',
                    'Firefox >= 31',
                    'Explorer >= 9',
                    'iOS >= 7',
                    'Opera >= 12',
                    'Safari >= 7.1'
                ]
            },
            build: {
                options: {
                    map: true
                },
                src: 'style.css'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('build', 'Build frontend assets: Concatenate Js and compile Sass', ['sass:build', 'autoprefixer:build', 'concat:build']);
};
