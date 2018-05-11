$(function(){
//window幅を取得
var winW;
$(window).bind("load resize", function(){
	winW = $(window).width();
//	console.log("winW: " + winW);
});//------------------winBndFncEnd


/*--------------------
      機能別
--------------------*/
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
clkScrl($("a.clkScrl"), 0);
clkScrl($("a.clkScrl2"), 20);
clkScrl($("a.clkScrl3"), -1);


//スライド
$(".slkBox1 ul").slick({
	arrows:false,
	dots:false,
	slidesToShow:4,
	responsive:[
		{
			breakpoint:768,
			settings:{
				dots:true,
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


/*--------------------
    レイアウト別
--------------------*/
//PCのヘッダーのnav
//$(".header .pcHd .nav.layer1 a").click(function(){
//	if($(this).hasClass("show")){
//		$(".header .pcHd .nav.layer1 a").removeClass("show");
//		$(".header .pcHd .nav.layer2 li").slideUp("fast");
//	}else{
//		$(".header .pcHd .nav.layer1 a").removeClass("show");
//		$(this).addClass("show");
//		var hdNavNo = $(this).parent("li").attr("class").replace("hdNav", "");
//		console.log(hdNavNo);
//		$(".header .pcHd .nav.layer2 li").slideUp("fast");
//		$(".header .pcHd .nav.layer2 li.hdNavLower" + hdNavNo).slideDown("fast");
//	}
//	return false;
//});

//spヘッダーのメニューボタン
$(".spBtnMenu").click(function(){
	$(".header .spHd .nav.layer1 ul").slideToggle();
	return false;
});

//spヘッダーのNav
$(".header .spHd .hasLower").click(function(){
	$(this).toggleClass("show");
	$(this).next().slideToggle();
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


/*--------------------
      ページ別
--------------------*/
/*----- トップ -----*/
//サービスのスライド
$(".topServiceSlk ul").slick({
	arrows:false,
	dots:false,
	slidesToShow:3,
	responsive:[
		{
			breakpoint:768,
			settings:{
				slidesToShow:1,
				centerMode:true,
				centerPadding:"20%"
			}
		}
	]
});

//ニュースのスライド
$(".topNewsSlk ul").slick({
	arrows:false,
	dots:false,
	slidesToShow:4,
	responsive:[
		{
			breakpoint:768,
			settings:{
				dots:true,
				slidesToShow:2,
				slidesToScroll:2
			}
		}
	]
});


/*----- デイサービス -----*/
//事業所のスライド
var officeSlk = $(".officeSlk ul").slick({
	arrows:true,
	dots:false,
	slidesToShow:4,
	responsive:[
		{
			breakpoint:768,
			settings:{
				arrows:false,
				dots:true,
				slidesToShow:2,
				slidesToScroll:2
			}
		}
	]
});
//アコーディオン内でのslick
$(".catDayservice.pageOffice .accSlkBox .accBtn").click(function(){
	if($(this).hasClass("show")){
		$(this).removeClass("show");
		$(this).next(".accCont").slideUp();
	}else{
		$(this).addClass("show");
		$(this).next(".accCont").slideDown();
		officeSlk.slick("setPosition");
	}
	return false;
});


});//fncEnd



