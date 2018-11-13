$(function(){

//スライド
$(".photoslick ul").slick({
	arrows:false,
	dots:true,
  fade:true,
  autoplay:true,
	slidesToShow:1
});


});//fncEnd



$(function(){

var validation = $("#validForm").exValidation({
	rules: {
		name: "chkrequired",
		name_: "laterCall",
		kana: "chkrequired",
		tell: "chkrequired",
		tell_: "laterCall",
		kana_: "laterCall",
		Email: "chkrequired",
		Email_: "laterCall",
		birthday: "chkrequired chkgroup",
		birthday_: "laterCall",
		radio: "chkradio",
		txArea: "chkrequired"
	},
	customListener: "blur", // onBlur時のみにしてみる
	stepValidation: true,
	errTipCloseBtn: false,
	errTipPos: "left",  // 吹き出しが表示される位置（左右）
	errHoverHide: true, // マウスオーバーで消える
	scrollToErr: true   // 
});
// チェックボタンで確認する場合
$('input.laterCall').click(function() {
	validation.laterCall('#' + this.id.replace('_',''));
});







});//fncEnd

