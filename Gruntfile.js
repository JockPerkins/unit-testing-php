module.exports = function(grunt) {
  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "assets/styles.css": "assets/styles/app.less" // destination file and source file
        }
      }
    },
    jshint: {
        all: ['Gruntfile.js', 'assets/scripts/*.js']
    },
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: ['assets/scripts/*.js'],
        dest: 'assets/scripts.js'
      }
    },
    watch: {
      styles: {
        files: ['assets/styles/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      },
      scripts: {
        files: ['assets/scripts/*.js'],
        tasks: ['jshint', 'concat'],
        options: {
          spawn: false,
        },
      }
    }
  });
  grunt.loadNpmTasks('assemble-less');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['less', 'jshint', 'concat', 'watch']);
};
