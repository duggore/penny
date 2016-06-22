  module.exports = function(grunt) {

  var environment = process.env.NODE_ENV || 'development';

  grunt.initConfig({

    copy: {
      assets: {
        files: [
          // PUG
          { nonull: true, cwd: 'composer_components/pug-php/pug/src', src: '**', dest: 'vendor/pug-php', expand: true }
        ]
      }
    }
  });

  grunt.loadNpmTasks('grunt-bump');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-jade');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-run');

  grunt.registerTask('vendor', [ 'copy:assets' ]);
};
