/**
 JS for for_est* 
 */
$('shots').hide();

function main() {
$(shots).hide();
$('.body').hide();
$('.body').fadeIn(1000);

}


jQuery({ Counter: 0 }).animate({ Counter: $('.Single').text() }, {
	  duration: 1000,
	  easing: 'swing',
	  step: function () {
	    $('.Single').text(Math.ceil(this.Counter));
	  }
	});
$(document).ready(main);

document.getElementById("testgame").onclick = function() {myFunction()};
function myFunction() {
	
	$(gamestable).fadeOut(500);
	$(shots).fadeIn(1000);
	
	
		/*alert("Hello! I am an alert box!!");*/
	}