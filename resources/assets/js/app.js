
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');
require('./tab-scrollable.js');


$(document).ready( function() {
	$('.pmd-tabs').pmdTab();
	// grab an element
	var myElement = document.querySelector("header");
	// construct an instance of Headroom, passing the element
	var headroom  = new Headroom(myElement);
	// initialise
	headroom.init();

	//replace img with svg
	jQuery('img.svg').each(function () {
			 var $img = jQuery(this);
			 var imgID = $img.attr('id');
			 var imgClass = $img.attr('class');
			 var imgURL = $img.attr('src');
			 var imgHeight = $img.attr('height');
			 var imgWidth = $img.attr('width');
			 jQuery.get(imgURL, function (data) {
					 // Get the SVG tag, ignore the rest
					 var $svg = jQuery(data).find('svg');

					 // Add replaced image's ID to the new SVG
					 if (typeof imgID !== 'undefined') {
							 $svg = $svg.attr('id', imgID);
					 }
					 // Add replaced image's classes to the new SVG
					 if (typeof imgClass !== 'undefined') {
							 $svg = $svg.attr('class', imgClass + ' replaced-svg');
					 }
					 if (typeof imgHeight !== 'undefined') {
							 $svg = $svg.attr('height', imgHeight);
					 }
					 if (typeof imgWidth !== 'undefined') {
							 $svg = $svg.attr('width', imgWidth);
					 }

					 // Remove any invalid XML tags as per http://validator.w3.org
					 $svg = $svg.removeAttr('xmlns:a');

					 // Replace image with new SVG
					 $img.replaceWith($svg);

			 }, 'xml');
	 });

});

// window.Vue = require('vue');

/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
// el: '#app'
// });
