require('./bootstrap');

require('./admin-data');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Dropzone from 'dropzone';

document.addEventListener("DOMContentLoaded", function(event) { 
	if (document.getElementById('fileUpload')) {
		let photoDropzone = new Dropzone('#fileUpload');
	}
});

/*import Dropzone from "dropzone";

let myDropzone = Dropzone({
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
});*/