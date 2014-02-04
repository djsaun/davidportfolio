$(document).ready(function() {
	(function time() {
		var d = new Date();
		var n = d.getHours();
		if (n > 18 && n <= 4) { 	
			$('.head').addClass('evening');
		 } else if (n > 4 && n < 12) {
			$('.head').addClass('morning');
		 } else {
			$('.head').addClass('afternoon');
	}})()
}); //ready