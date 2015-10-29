/**
 * Created by fred on 9/13/15.
 */
module.exports = function(grunt) {
    require('jit-grunt')(grunt);

    grunt.initConfig({
        concat: {
            options: {
                separator: ';'
            },
            main: {
                src: [
					"assets/vendor/bootstrap/dist/js/bootstrap.js",
                    "assets/js/*.js"
                ],
                dest: 'assets/js/dist/main.js'
            }
        },
        uglify: {
            options: {
                banner: '/*! beckermedia <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            main: {
                files: {
                    'assets/js/dist/main.min.js': ['<%= concat.main.dest %>']
                }
            }
        },
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "assets/css/main.css": "assets/less/main.less"
                }
            }
        },

        watch: {
            scripts: {
                files: [
                    'assets/js/**/*.js'
                ],
                tasks: ['concat', 'uglify']
            },
            styles: {
                files: ['assets/less/**/*.less'], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true
                }
            }
        }
    });

    grunt.registerTask('default', ['concat','uglify','less','watch']);
};