$(function() {
    var dates = $( "#from, #to" ).datepicker({
        defaultDate: "+1w",
        numberOfMonths: 1,
        onSelect: function( selectedDate ) {
            var option = this.id == "from" ? "minDate" : "maxDate",
                instance = $( this ).data( "datepicker" );
                date = $.datepicker.parseDate(
                    instance.settings.dateFormat ||
                    $.datepicker._defaults.dateFormat,
                    selectedDate, instance.settings );
            dates.not( this ).datepicker( "option", option, date );
        }
    });
});
$(document).ready(function() {
  $('select').niceSelect();
});


$(function(){
// Check the initial Poistion of the Sticky Header
var menuTop = 205;
 
$(window).scroll(function(){
if( $(window).scrollTop() > menuTop ) {
//$('.menuabsolute').css({position: 'fixed', top: '0px'});

$('header').addClass("fondoheader");
$('.bookingform').addClass("bookingclass");
$('.bookingboton').show();

} else {
//$('.menuabsolute').css({position: 'static', top: '0px'});
$('header').removeClass("fondoheader");
$('.bookingform').removeClass("bookingclass");
$('.bookingboton').hide();
//$('.menuabsolute').removeClass("sombra");
//$('.navbar-brand img').removeClass("efectologo");
//$('#stickyalias').css('display', 'none');
}
});
});


$(function(){
// Check the initial Poistion of the Sticky Header
var menuTop2 = 582;
 
$(window).scroll(function(){
if( $(window).scrollTop() > menuTop2 ) {
//$('.menuabsolute').css({position: 'fixed', top: '0px'});


$('.buscador').addClass("fixbuscador");

} else {
//$('.menuabsolute').css({position: 'static', top: '0px'});
$('.buscador').removeClass("fixbuscador");
//$('.menuabsolute').removeClass("sombra");
//$('.navbar-brand img').removeClass("efectologo");
//$('#stickyalias').css('display', 'none');
}
});
});
$(document).ready(function(){	
	$("#nav-icon1").click(function(){
	//href = $(this).attr('href');
	if ($('#nav-icon1').hasClass('open') ) {
                //$(".hamburger").addClass("is-active");          
                $('.hamburger').removeClass('open');
                $(".menu1").removeClass('activemenu');
                $("body").css("overflow-y","scroll");
                $('#logo').attr('src','img/yapaestudio-logo-01.svg');
            } else {
                //$(".hamburger").removeClass("is-active");   
                $('.hamburger').addClass('open');
                $(".menu1").addClass('activemenu');
                $("body").css("overflow-y","hidden");
                $('#logo').attr('src','img/yapaestudio-logo-02.svg');
            }
	return false;
});
});
$(document).ready(function(){
$(".botonreservar").click(function(){
  $(".buscador").toggle();
});
});
$(document).ready(function(){
$(".botonreservar2").click(function(){
  $(".buscador2").toggle();
});
});
$(document).ready(function(){
$(".bookingboton").click(function(){
  $(".bookingform").show();
  $(".bookingform .x").show();
});
});
$(document).ready(function(){
$(".bookingform .x").click(function(){
  $(".bookingform").hide();
  $(".bookingform .x").hide();
});
});

$(document).ready(function(){
jQuery(".linkreservas").hover(function(){
	
  $("#menureservas").show();
   
  }, function (){
	$("#menureservas").hide();
  });
  });
  
$(document).ready(function(){
jQuery(".linkhoteles").hover(function(){
	
  $("#menuhoteles").show();
   
  }, function (){
	$("#menuhoteles").hide();
  });
  });
  
  
$(document).ready(function(){
jQuery(".linkrestaurantes").hover(function(){
	
  $("#menurestaurantes").show();
   
  }, function (){
	$("#menurestaurantes").hide();
  });
  });
  

	$(document).ready(function(){
	$(".sucursal").change(function(){
		//alert($('.sucursal').val());
		var sucursal = $('.sucursal').val();
		//alert(sucursal);
		$('#formularioreserva').attr('action', 'https://reservations.travelclick.com/'+sucursal+'#/guestsandrooms');
	});
	});
