
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');
require('./tab-scrollable.js');


var shadeCardData = {
	'sun-white':{
		ttx:'1-102 TTX',
		herbs:['Aritha(Soap nut)','Sea Salt','Manure'],
		pantone:'11-0601 TPX',
		name:'Sun White',
		color:'#F1F2F1'
	},
	'natural-ecru':{
		ttx:'1-101 TTX',
		herbs:['Natural Enzymes','Sea Salt'],
		pantone:'11-0103 TPX',
		name:'Natural Ecru',
		color:'#EFEEE4'
	},
	'rust-creme':{
		ttx:'1-100 TTX',
		herbs:['Earth Iron, Rust'],
		pantone:'12-0712 TPX',
		name:'Rust Creme',
		color:'#F4E6C5'
	},
	'nut-creme':{
		ttx:'1-103 TTX',
		herbs:['Harda(Terminalia Chebula)'],
		pantone:'12-0710 TPX',
		name:'Nut Creme',
		color:'#F0E1C6'
	},
	'haldi-yellow':{
		ttx:'2-100 TTX',
		herbs:['TUrmeric(Curcuma Longa)','Pomegranate(Punica Granatum)'],
		pantone:'12-0738 TPX',
		name:'Haldi Yellow',
		color:'#F1DA6D'
	},
	'pale-celery':{
		ttx:'2-101 TTX',
		herbs:['Indigo(Indigofera)','Harda(Terminalia Chebula)'],
		pantone:'15-0743 TPX',
		name:'Pale Celery',
		color:'#000'
	},
	'dahlia-green':{
		ttx:'3-100 TTX',
		herbs:['Iron Vat','Harda(Terminalia Chebula)'],
		pantone:'13-0624 TPX',
		name:'Dahlia Green',
		color:'#000'
	},
	'kasam-olive':{
		ttx:'3-101 TTX',
		herbs:['Iron Vat','Harda(Terminalia Chebula)'],
		pantone:'16-0737 TPX',
		name:'Kasam Olive',
		color:'#000'
	},
	'cherry-pink':{
		ttx:'8-101 TTX',
		herbs:['Burnt Ash','Madder(Rubia Cordifolia)','Sea Salt'],
		pantone:'15-1821 TPX',
		name:'Cherry Pink',
		color:'#000'
	},
	'ash-pink':{
		ttx:'8-102 TTX',
		herbs:['Burnt Ash','Madder(Rubia Cordifolia)','Sea Salt'],
		pantone:'14-1511 TPX',
		name:'Ash Pink',
		color:'#000'
	},
	'beetle-pink':{
		ttx:'8-103 TTX',
		herbs:['Burnt Ash','Madder(Rubia Cordifolia)','Sea Salt','Iron Earth'],
		pantone:'14-1219 TPX',
		name:'Beetle Pink',
		color:'#000'
	},
	'okhra-orange':{
		ttx:'4-101 TTX',
		herbs:['Madder(Rubia Cordifolia)','Pomegranate(Punica Granatum)','Woodflower'],
		pantone:'14-1041 TPX',
		name:'Okhra Orange',
		color:'#000'
	},
	'pomo-orange':{
		ttx:'4-102 TTX',
		herbs:['Flame of Forest(Butea Monosperma)','Madder(Rubia Cordifolia)'],
		pantone:'16-1337 TPX',
		name:'Pomo Orange',
		color:'#000'
	},
	'anna-orange':{
		ttx:'4-100 TTX',
		herbs:['Flame of Forest(Butea Monosperma)','Madder(Rubia Cordifolia)'],
		pantone:'15-1234 TPX',
		name:'Anna Orange',
		color:'#000'
	},
	'brazil-brown':{
		ttx:'7-100 TTX',
		herbs:['Madder(Rubia Cordifolia)','Woodflower','Iron Earth','Sea Salt'],
		pantone:'17-1322 TPX',
		name:'Brazil Brown',
		color:'#000'
	},
	'rust-brown':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	},
	'beet-maroon':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	},
	'madder-red':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	},
	'burnt-grey':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	},
	'heena-brown':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	},
	'cutch-brown':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	},
	'oak-brown':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	},
	'woad-blue':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	},
	'chebula-black':{
		ttx:0,
		herbs:[],
		pantone:0,
		name:'',
		color:'#000'
	}
}

$(document).ready( function() {
	$('.pmd-tabs').pmdTab();
	// grab an element
	var myElement = document.querySelector("header");
	// construct an instance of Headroom, passing the element
	var headroom  = new Headroom(myElement);
	// initialise
	headroom.init();

	// $('.shade-card').click(function(){
	// 	$('.shade-card').removeClass('active');
	// 	$(this).addClass('active');
	// 	var tar = $(this).attr('data-toggle');
	// 	$('.shade-content').hide(0);
	// 	$('.'+tar).show(0).addClass('active');
	// });

	$('.shade-card').click(function(){
		$('#shade-card-modal').modal();
	});

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
