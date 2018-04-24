$(function(){
    $("a.point").click(function(){
        var modal = $(this).attr("href");
        $(modal).fadeIn();
    })
    $(".btnClose").click(function(){
        $(".modalBox").fadeOut();
    })
})