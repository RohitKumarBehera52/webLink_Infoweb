$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  }); 
/*for faq div scrolling*/

$("#faqBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#faqDiv").offset().top
    }, 1000);
});
});

