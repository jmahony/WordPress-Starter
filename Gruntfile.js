module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    /******** Uglify ********/
    uglify: {
      options: {
        mangle: true
      },
      build: {
        files: {
          'assets/js/min/app.min.js': ['assets/js/src/*.js']
        }
      }
    },

    /******** Compass ********/
    compass: {
      dev: {
        options: {
          http_path: '/wp-content/themes/<%- pkg.name %>/',
          sassDir: 'assets/scss',
          cssDir: '',
          imagesDir: 'assets/img/min',
          fontsDir: 'assets/fonts',
          outputStyle: 'compressed',
          noLineComments: true,
          require: [
            'rgbapng'
          ]
        }
      }
    },

    /******** Imagemin ********/
    imagemin: {
      compress: {
        options: {
          optimizationLevel: 3
        },
        files: [{
          expand: true,
          cwd: 'assets/img/src',
        src: '{,*/}{,*/}*.{png,jpg,jpeg}',
        dest: 'assets/img/min'
      }]
    }
  },

    /******** Watch ********/
    watch: {
      files: ['assets/scss/*.scss', 'assets/js/src/*.js', 'assets/img/src/*'],
      tasks: ['compass', 'uglify', 'imagemin']
    }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.loadNpmTasks('grunt-contrib-compass');

  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'compass', 'imagemin']);

};
