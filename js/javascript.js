$("#btnMenu").on("click", function(){
  $("li").each(function(){
    $(this).slideToggle();
  });
});

$(".portfolio").on("load",function(){
  $(".portfolio").each(function(index){
    $(this).delay(300*index).fadeIn(1000);
  });
});
