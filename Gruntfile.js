// Gruntfile.js
module.exports = function (grunt) {
    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);
	grunt.initConfig({
     	concat: {
		    dist: {
		      src: ['bower_components/jquery/dist/jquery.min.js', 
		      		'bower_components/bootstrap/dist/js/bootstrap.min.js', 
		      		'bower_components/reveal.js/js/reveal.min.js'
		      	   ],
		      dest: 'app/js/plugins.js',
		      nonull: true
		    },
		    mapjs: {
		    	src: "bower_components/jquery/dist/jquery.min.map",
		    	dest: "app/js/jquery.min.map"
		    }
		  }, // End concat JS tasks.
	  copy: {
		  bootStrapFonts: {
    		nonull: true,
    		expand: true,
    		cwd: 'bower_components/bootstrap/dist/',
    		src: ['fonts/**'],
    		dest: 'app/fonts/',
    		flatten: true,
		    filter: 'isFile'
  		   }, // End bootStrap fonts directory
  		   revealJSFonts: {
    		nonull: true,
    		expand: true,
    		cwd: 'bower_components/reveal.js/lib/',
    		src: ['font/**'],
    		dest: 'app/fonts/',
    		flatten: true,
		    filter: 'isFile'
  		   }, // End reveal fonts directory
  		   bootstrapCSS: {
    		nonull: true,
    		expand: true,
    		cwd: 'bower_components/bootstrap/dist/css',
    		src: ['**'],
    		dest: 'app/css/',
    		}, // End bootstrap css directory
  		   revealCSS: {
    		nonull: true,
    		expand: true,
    		cwd: 'bower_components/reveal.js/css',
    		src: ['**'],
    		dest: 'app/css/',
    		}, // End reveal css directory
  		   revealCompatCSS: {
    		nonull: true,
    		expand: true,
    		cwd: 'bower_components/reveal.js/lib/',
    		src: ['css/**'],
    		dest: 'app/css/',
    		flatten: true,
		    filter: 'isFile'
  		   }, // End reveal Compat css directory
  		   revealCompatJS: {
    		nonull: true,
    		expand: true,
    		cwd: 'bower_components/reveal.js/lib/',
    		src: ['js/**'],
    		dest: 'app/js/',
    		flatten: true,
		    filter: 'isFile'
  		   }, // End reveal Compat JS directory
  		   revealPluginsJS: {
    		nonull: true,
    		expand: true,
    		cwd: 'bower_components/reveal.js/',
    		src: ['plugin/**'],
    		dest: 'app/js/',
    		}, // End reveal Plugin JS directory
  	  },// End copy task.
  	   sass: {
		    dist: {
		      files: {
		        'app/css/main.css': 'app/sass/main.scss'
		      }
		    }
		  }// End sass task
    });
    grunt.registerTask('default', ['concat', 'copy', 'sass']);
}