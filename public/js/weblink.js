$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  }); 
/*for faq div scrolling*/

// $("#faqBtn").click(function() {
//     $('html, body').animate({
//         scrollTop: $("#faqDiv").offset().top
//     }, 1000);
// });
// $("#CovAreaBtn").click(function() {
//     $('html, body').animate({
//         scrollTop: $("#servDiv").offset().top
//     }, 1000);
// });

$("#loginDivBtn").click(function(){
$("#LoginDiv").show(1400);
$("#registerDiv").hide(1400);
});
$("#signUpDivBtn").click(function(){
$("#LoginDiv").hide(1400);
$("#registerDiv").show(1400);
});





$("#down1").click(function(){
$("#up1").show();
$("#down1").hide();
$("#divP1").show(300);
$("#span1").css('color','red');

})
$("#up1").click(function(){
$("#down1").show();
$("#up1").hide();
$("#divP1").hide(300);
$("#span1").css('color','white');
});
// 2
$("#down2").click(function(){
$("#up2").show();
$("#down2").hide();
$("#divP2").show(300);
$("#span2").css('color','red');

})
$("#up2").click(function(){
$("#down2").show();
$("#up2").hide();
$("#divP2").hide(300);
$("#span2").css('color','white');
});

// 3

$("#down3").click(function(){
$("#up3").show();
$("#down3").hide();
$("#divP3").show(300);
$("#span3").css('color','red');

})
$("#up3").click(function(){
$("#down3").show();
$("#up3").hide();
$("#divP3").hide(300);
$("#span3").css('color','white');
});
// 4

$("#down4").click(function(){
$("#up4").show();
$("#down4").hide();
$("#divP4").show(300);
$("#span4").css('color','red');

})
$("#up4").click(function(){
$("#down4").show();
$("#up4").hide();
$("#divP4").hide(300);
$("#span4").css('color','white');
});

// 5
$("#down5").click(function(){
$("#up5").show();
$("#down5").hide();
$("#divP5").show(300);
$("#span5").css('color','red');

})
$("#up5").click(function(){
$("#down5").show();
$("#up5").hide();
$("#divP5").hide(300);
$("#span5").css('color','white');
});

// 6
$("#down6").click(function(){
$("#up6").show();
$("#down6").hide();
$("#divP6").show(300);
$("#span6").css('color','red');

})
$("#up6").click(function(){
$("#down6").show();
$("#up6").hide();
$("#divP6").hide(300);
$("#span6").css('color','white');
});
});

function copyToClipboard(element) {

  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();

}

