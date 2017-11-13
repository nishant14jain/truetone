
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
		herbs:['Turmeric(Curcuma Longa)','Pomegranate(Punica Granatum)'],
		pantone:'12-0738 TPX',
		name:'Haldi Yellow',
		color:'#F1DA6D'
	},
	'pale-celery':{
		ttx:'2-101 TTX',
		herbs:['Indigo(Indigofera)','Harda(Terminalia Chebula)'],
		pantone:'15-0743 TPX',
		name:'Pale Celery',
		color:'#C4A548'
	},
	'dahlia-green':{
		ttx:'3-100 TTX',
		herbs:['Iron Vat','Harda(Terminalia Chebula)'],
		pantone:'13-0624 TPX',
		name:'Dahlia Green',
		color:'#D6D08F'
	},
	'kasam-olive':{
		ttx:'3-101 TTX',
		herbs:['Iron Vat','Harda(Terminalia Chebula)'],
		pantone:'16-0737 TPX',
		name:'Kasam Olive',
		color:'#A79952'
	},
	'cherry-pink':{
		ttx:'8-101 TTX',
		herbs:['Burnt Ash','Madder(Rubia Cordifolia)','Sea Salt'],
		pantone:'15-1821 TPX',
		name:'Cherry Pink',
		color:'#F495A0'
	},
	'ash-pink':{
		ttx:'8-102 TTX',
		herbs:['Burnt Ash','Madder(Rubia Cordifolia)','Sea Salt'],
		pantone:'14-1511 TPX',
		name:'Ash Pink',
		color:'#EDB7B9'
	},
	'beetle-pink':{
		ttx:'8-103 TTX',
		herbs:['Burnt Ash','Madder(Rubia Cordifolia)','Sea Salt','Iron Earth'],
		pantone:'14-1219 TPX',
		name:'Beetle Pink',
		color:'#FBC0AB'
	},
	'okhra-orange':{
		ttx:'4-101 TTX',
		herbs:['Madder(Rubia Cordifolia)','Pomegranate(Punica Granatum)','Woodflower'],
		pantone:'14-1041 TPX',
		name:'Okhra Orange',
		color:'#DFA95B'
	},
	'pomo-orange':{
		ttx:'4-102 TTX',
		herbs:['Flame of Forest(Butea Monosperma)','Madder(Rubia Cordifolia)'],
		pantone:'16-1337 TPX',
		name:'Pomo Orange',
		color:'#D68158'
	},
	'anna-orange':{
		ttx:'4-100 TTX',
		herbs:['Flame of Forest(Butea Monosperma)','Madder(Rubia Cordifolia)'],
		pantone:'15-1234 TPX',
		name:'Anna Orange',
		color:'#DF9C66'
	},
	'brazil-brown':{
		ttx:'7-100 TTX',
		herbs:['Madder(Rubia Cordifolia)','Woodflower','Iron Earth','Sea Salt'],
		pantone:'17-1322 TPX',
		name:'Brazil Brown',
		color:'#9F7E66'
	},
	'rust-brown': {
		ttx: '5-100 TTX',
		herbs: ['Madder (Rubia cordifolia)','wood flower','Iron Earth','Sea Salt'],
		pantone: '16-1331 TPX',
		name: 'Rust Brown',
		color: '#CB9876'
	},
	'beet-maroon': {
		ttx: '8-104 TTX',
		herbs: ['Madder (Rubia cordifolia)','wood flower','Iron Earth','Sea Salt'],
		pantone: '19-1245 TPX',
		name: 'Beet Maroon',
		color: '#88483D'
	},
	'madder-red': {
		ttx: '8-100 TTX',
		herbs: ['Madder (Rubia cordifolia)','Pomegranate (Punica granatum)','Iron Earth'],
		pantone: '18-1547 TPX',
		name: 'Madder Red',
		color: '#923430'
	},
	'burnt-grey': {
		ttx: '9-101 TTX',
		herbs: ['Iron Earth','Alum (aluminum sulfate)','Pomegranate (Punica granatum)'],
		pantone: '15-1306 TPX',
		name: 'Brunt Grey',
		color: '#B5A994'
	},
	'heena-brown': {
		ttx: '6-100 TTX',
		herbs: ['Iron Earth','Alum (aluminum sulfate)','Pomegranate (Punica granatum)'],
		pantone: '15-0719 TPX',
		name: 'Heena Brown',
		color: '#BCAB7D'
	},
	'cutch-brown': {
		ttx: '3-102 TTX',
		herbs: ['Madder (Rubia cordifolia)','Pomegranate (Punica granatum)','Iron Earth'],
		pantone: '18-0724 TPX',
		name: 'Cutch Brown',
		color: '#7E7253'
	},
	'oak-brown': {
		ttx: '9-102 TTX',
		herbs: ['Madder (Rubia cordifolia)','Pomegranate (Punica granatum)','Iron Earth'],
		pantone: '17-0909 TPZ',
		name: 'Oak Brown',
		color: '#7F7263'
	},
	'woad-blue': {
		ttx: '10-100 TTX',
		herbs: ['Indigo (Indigofera)'],
		pantone: '18-4029 TPX',
		name: 'Woad Blue',
		color: '#3A5E89'
	},
	'chebula-black': {
		ttx: '9-100 TTX',
		herbs: ['Harda (Terminalia chebula)','Iron','Dhavid (galls of tamarisk & tamarind(Kachu ka Aata))'],
		pantone: '19-0000 TPX',
		name: 'Chebula Black',
		color: '#383938'
	}
};



function populateShades(){
	var html='';
	Object.keys(shadeCardData).forEach(function(shade){
		html+='<div class="shade-card" data-shade="'+shade+'" style="background:'+shadeCardData[shade].color+'"></div>';
	});
	$('.appendShades').html(html);
}

function fillShadeModal(i){
	var html = '';	
	html+='<div class="name">'+shadeCardData[i].name+'</div>';
	html+='<div class="ttx"><strong>Truetone No: </strong>'+shadeCardData[i].ttx+'</div>';
	html+='<div class="pantone"><strong>Pantone No: </strong>'+shadeCardData[i].pantone+'</div>';
	html+='<div class="clearfix"></div>';
	html+='<div class="herbs"><strong>Herbs Used: </strong><br>';
	shadeCardData[i].herbs.forEach(function(elem){
		html+='<span>'+elem+'</span>';
	})
	html+='</div>';
	$('#shade-card-modal .modal-body').html(html);
	$('#shade-card-modal .modal-header').css('background',shadeCardData[i].color);
}


$(document).ready( function() {
	$('.pmd-tabs').pmdTab();
	// grab an element
	var myElement = document.querySelector("header");
	// construct an instance of Headroom, passing the element
	var headroom  = new Headroom(myElement);
	// initialize
	headroom.init();

	// $('.shade-card').click(function(){
	// 	$('.shade-card').removeClass('active');
	// 	$(this).addClass('active');
	// 	var tar = $(this).attr('data-toggle');
	// 	$('.shade-content').hide(0);
	// 	$('.'+tar).show(0).addClass('active');
	// });

	populateShades();

	$('.shade-card').click(function(){
		var shade = $(this).attr('data-shade');
		fillShadeModal(shade);
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
