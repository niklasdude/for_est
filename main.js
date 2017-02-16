/**
 JS for for_est* 
 */
function main() {

$('.body').hide();
$('.body').fadeIn(1000);


jQuery({ Counter: 0 }).animate({ Counter: $('.Single').text() }, {
	  duration: 1000,
	  easing: 'swing',
	  step: function () {
	    $('.Single').text(Math.ceil(this.Counter));
	  }
	});
$(document).ready(main);