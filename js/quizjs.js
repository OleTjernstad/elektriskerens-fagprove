 //laste inn redigeringsside eller ny side
$(document).on( "click", "#svar", function() {
  if ($("input:radio[name='ans']").is(":checked") ) {
      
        var ansVal = $('.radioans:checked').val();
        var sid = $('#sid').val();
         $('#svar').attr("disabled", true);
         $("#ikkesvar").hide();
        $("#textboks").load('pages/svar.php', {ans: ansVal, ID: sid});
   return false;
  }
  else {
     $("#ikkesvar").show();
     return false;
  }
});
//animasjon ved avgang fra start side
$('#avgang').click(function(event) {
    event.preventDefault();
    var link = $(this).attr('href');
    var screenWidth = $(document).width();
   $(".togstart").animate({left: "+="+screenWidth}, 2000, function() {
       window.location.href = link;
       });

});

//animasjon til finaleskjermen
    var screenWidth = $(document).width();
    var trainWidth = $('#final').width();
    var travel = screenWidth-(trainWidth/2);
   $("#final").animate({left: "+="+travel}, 2000);




$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }
});