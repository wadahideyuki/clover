$(function(){
//window幅を取得
var winW;
$(window).bind("load resize", function(){
	winW = $(window).width();
//	console.log("winW: " + winW);
});//------------------winBndFncEnd


//クリックスクロール
function clkScrl(btn, pos){
	btn.click(function(){
		var speed = 400;// ミリ秒
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;		
        $("html, body").animate({scrollTop:position-pos}, speed, "swing");
		return false;
	});
}
clkScrl($("a.teiki"), 0);
clkScrl($("a.teiki2"), 20);
clkScrl($("a.teiki3"), -1);


//spヘッダーのメニューボタン
$(".spBtnMenu").click(function(){
	$(".header .nav ul").slideToggle();
	return false;
});

//spフッターのアコーディオン
$(".footer .part2 .layer1 > li h3").click(function(){
	winW = $(window).width();
	if(winW <= 767){
		$(this).toggleClass("show");
		$(this).next().slideToggle();
	}
	return false;
});


//スライド
$(".slkBox1 ul").slick({
	arrows:false,
	dots:false,
	slidesToShow:4,
	responsive:[
		{
			breakpoint:768,
			settings:{
				slidesToShow:2
			}
		}
	]
});



//アコーディオン
	$(".accBox .accBtn").click(function(){
		$(this).toggleClass("show");
		$(this).next(".accCont").slideToggle();
		return false;
	});

//タブの切替
	$(".tabBox .tabs a").click(function(){
		if($(this).hasClass("show")){
			return false;
		}else{
			var thisTabBox = $(this).parents(".tabBox");
			var tabNo = $(this).attr("class").replace("tab", "");

			thisTabBox.find(".tabs a").removeClass("show");
			$(this).addClass("show");

			thisTabBox.find(".tabCont").removeClass("show");
			thisTabBox.find(".tabCont.no" + tabNo).addClass("show");
			return false;
		}
	});


	

});//fncEnd



