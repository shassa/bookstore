$('.card').hover(function(){
    $(this).find('.move').animate({"top":"-=50px"},500);
    $(this).find('a').css({"position":"absolute","bottom":"10px","width":"90%"});
    $(this).find('a').slideDown(500);
},function(){
    $(this).find('.move').animate({"top":"+=50px"});
    $(this).find('a').css("display","none");
});
