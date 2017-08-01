module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        //complie Js
        sass: {// Task
            dist: {// Target
                options: {// Target options
                    style: 'compressed'
                },
                files: {// Dictionary of files
                    'dist/css/default.css': 'dist/sass/default.scss',
                    'dist/css/vendor.css': 'dist/sass/vendors.scss'
                }
            }
        },
        watch: {
            css: {
                files: [
                    'dist/sass/**/*.scss'
                ],
                tasks: ['sass'],
                options: {
                    spawn: false,
                    livereload: true
                }
            }
        }
    });

    grunt.event.on('watch', function (action, filepath, target) {
        grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-cache-breaker');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'cssmin', 'cachebreaker']);
};
