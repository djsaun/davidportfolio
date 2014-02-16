$(document).ready(function() {
	(function time() {
		var d = new Date();
		var n = d.getHours();
		if (n < 5 || n > 18) { 	
			$('.head').addClass('evening');
			$('.headtext').text("Good evening, I'm David Saunders.");
		 } 
		 else if (n > 4 && n < 12) {
			$('.head').addClass('morning');
			$('header h1, header h2, .nav li a').css('color', '#800000');
			$('.headtext').text("Good morning, I'm David Saunders.");
		 } 
		 else {
			$('.head').addClass('afternoon');
			$('header h1, header h2, .nav li a').css('color', 'black');
			$('.headtext').text("Good afternoon, I'm David Saunders.");
	}})()
}); //ready