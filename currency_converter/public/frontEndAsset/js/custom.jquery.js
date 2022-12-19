$(document).ready(function() {
    $('#submit').click(function(){
     //Get the values
     var amount = $('#amount').val();
     var from  = $('#from').val();
     var to = $('#to').val();
     var params = "amount=" + amount + "&from=" + from + "&to=" + to ;
     $.ajax({
       type: "POST",
       url: "currency-converter.php",
       data: params ,
       success: function(data){
	   if($.isNumeric(data.substring(0,1))){
		$('#converted_value').html(amount + from +" is equal to: " + data);
		}else{
		$('#converted_value').html(data);
	   }
       }
     });
    }) ;
// Shadow effects
 $("#page").mouseenter(function() {
$('#wb_currencyExtension1').stop().animate({boxShadow: '0 0 150px #000'}) ;
  }).mouseleave(function() {
$('#wb_currencyExtension1').stop().animate({boxShadow: '0 0 0px #444'}) ;
  });  
$("#submit").mouseup(function(){
$("#submit").stop().animate({boxShadow: '0 0 0px #E00'}) ;
    }).mousedown(function(){
$("#submit").stop().animate({boxShadow: '0 0 40px #E00'}) ;
    });
	}); 	