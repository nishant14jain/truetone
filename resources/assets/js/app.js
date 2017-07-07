
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
