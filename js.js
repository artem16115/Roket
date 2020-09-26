$(function(){


	$('.I1').css('display', 'block'	);

	$('#ButNew1').css('background-color', '#D51522');
	


	$('#hrr').on('click', function(){       //меняется при нажатии на кнопку
	            $('.MenuMobile').css('display', 'block');
	            $("body").css("overflow", "hidden");
	        });


	$('#closeA').on('click', function(){       //меняется при нажатии на кнопку
            $('.MenuMobile').css('display', 'none');
            $("body").css("overflow", "visible");
        });



function windowSize(){
    if ($(window).width() > '767'){
        $('.MenuMobile').css('display', 'none');
        $('#PZag').css('font-size', '40px');
        
    }else{
    	$('#PZag').css('font-size', '36px');
    	
    } 
}
$(window).resize(windowSize); 
$(window).on('resize',windowSize);


$('.InputNumber').on('keydown', function(event){      //вводятся только цифры и backspace
            console.log(event.which);
            if ((event.which < 48 || event.which > 57) && event.which != 8){
                return false;
            }
        });


$('#ButNew1').on('click', function(){      
            $('.I1').css({
            	'display': 'block',
            	'opacity': '0'
            	}).animate({
            	opacity: 1
            }, 1000);
	$('#ButNew1').css('background-color', '#D51522');
	$('#ButNew2').css('background-color', 'gray');
$('#ButNew3').css('background-color', 'gray');
	$('.I2').css('display', 'none')
	$('.I3').css('display', 'none')

        });


$('#ButNew2').on('click', function(){      
            $('.I2').css({
            	'display': 'block',
            	'opacity': '0'
            	}).animate({
            	opacity: 1
            }, 1000);
     $('#ButNew2').css('background-color', '#D51522');
     $('#ButNew1').css('background-color', 'gray');
$('#ButNew3').css('background-color', 'gray');
	$('.I1').css('display', 'none')
	$('.I3').css('display', 'none')

        });


$('#ButNew3').on('click', function(){      
            $('.I3').css({
            	'display': 'block',
            	'opacity': '0'
            	}).animate({
            	opacity: 1
            }, 1000);
$('#ButNew3').css('background-color', '#D51522');
$('#ButNew1').css('background-color', 'gray');
$('#ButNew2').css('background-color', 'gray');
	$('.I1').css('display', 'none')
	$('.I2').css('display', 'none')

        });




});
