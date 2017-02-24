/**
 JS for for_est* 
 */
$('shots').hide();

function main() {
$(shots).hide();
$('.body').hide();
$('.body').fadeIn(1000);
$('.lipro').hover(function(){
	$('#probar').css('top','6%');
});
}



$(".lipro").hover(function(){
    $('#probar').css("display", "block");
    });
/**$('#probar').hover(function{
	$('#probar').css("display", "block");
}, function(){
	$('#probar').css('display', 'none');
});*/
$('div').hover(function(){
	$('#probar').css('display', 'none');
});



$('input').focus(function(){
    $('input').css('outline-color','#FF0000');   
});

$('input').keydown(function(){
	$('input').css('background-color','rgba(89, 255, 125,0.7)');
}); 
var value = $('#namex').val();
if( value == "YOUR NAME"){
	$('#namex').css('background-color','rgba(0,0,0,0.3)');	
};

jQuery({ Counter: 0 }).animate({ Counter: $('.Single').text() }, {
	  duration: 1000,
	  easing: 'swing',
	  step: function () {
	  $('.Single').text(Math.ceil(this.Counter));
	  }
	});
$(document).ready(main);

function gradient(){
	$("namex").css("background-color","blue");
}

document.getElementById("testgame").onclick = function() {myFunction()};


function myFunction() {
	
	$(gamestable).fadeOut(500);
	$(shots).fadeIn(1000);
	
	
		/*alert("Hello! I am an alert box!!");*/
}
