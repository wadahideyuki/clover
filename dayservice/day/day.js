$(function(){
    $("a.point").click(function(){
			var modal = $(this).attr("href");
			$(modal).fadeIn();
			return false;
    });
    $(".btnClose").click(function(){
			$(".modalBox").fadeOut();
			return false;
    });
});