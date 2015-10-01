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

    grunt.registerTask('build', 'Build frontend assets: Concatenate Js and compile Sass', ['sass:build', 'autoprefixer:build']);
};
