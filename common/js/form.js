$(function(){

var validation = $("#validForm").exValidation({
	rules: {
		name: "chkrequired",
		name_: "laterCall",
		kana: "chkrequired chkkatakana",
		kana_: "laterCall",
		Email: "chkrequired chkemail chkhankaku chkgroup",
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



