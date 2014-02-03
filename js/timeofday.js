$(document).ready(function() {
	(function time() {
		var d = new Date();
		var n = d.getHours();
		console.log(n);
		if (n > 18) { 	
			$('.head').addClass('evening');
		 } else if (n < 12) {
			$('.head').addClass('morning');
		 } else {
			$('.head').addClass('afternoon');
	}})()
}); //ready