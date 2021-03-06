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

$(function(){
  $(".cat-item-13 > a,.cat-item-12 > a").click(function(){
    return false;
  })
})  

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
	$(this).toggleClass("on");
	$(".header .spHd .nav.layer1 ul").slideToggle();
	return false;
});

//spヘッダーのNav
/*$(".header .spHd .hasLower").click(function(){
	$(this).toggleClass("show");
	$(this).next().slideToggle();
	return false;
});*/

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
  $(".topNewsSlk ul").load( "news/toplist/index.php", function() {
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
});


/*----- デイサービス -----*/
  
//事業所のスライド2
var officeSlk2 = $(".officeSlk2 ul").slick({
	arrows:true,
	dots:true,
	slidesToShow:1,
	responsive:[
		{
			breakpoint:768,
			settings:{
				arrows:false,
				dots:true,
				slidesToShow:1
			}
		}
	]
});
  
//事業所のスライド
  var getDevice = (function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
        return 'sp';
    }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
        return 'tab';
    }else{
        return 'other';
    }
})();
if( getDevice == 'sp' ){
  var officeSlk = $(".officeSlk ul").slick({
          arrows:false,
          dots:true,
          slidesToShow:1,
          slidesToScroll:1
  });
}else if( getDevice == 'tab' ){
    //タブレット
}else if( getDevice == 'other' ){
  $(".officeSlk img").click(function(){
    var src = $(this).attr("src");
     $(".officeSlk img").removeClass("selected");
     $(this).addClass("selected");
    $(".mainImg img").attr("src",src);
  });
}
  
//アコーディオン内でのslick
/*$(".catDayservice.pageOffice .accSlkBox .accBtn").click(function(){
	if($(this).hasClass("show")){
		$(this).removeClass("show");
		$(this).next(".accCont").slideUp();
	}else{
		$(this).addClass("show");
		$(this).next(".accCont").slideDown();
		officeSlk.slick("setPosition");
		officeSlk2.slick("setPosition");
	}
	return false;
});*/


});//fncEnd



