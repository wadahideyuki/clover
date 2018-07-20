<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>3つのHappiness（経営理念）｜株式会社CLOVER</title>
<meta name="keywords" content="" />
<meta name="description" content="株式会社CLOVER（クローバーグループ）の経営理念「Happinessを提供する」。①キャスト、②ゲスト、③未来のキャストの３つのHappinessを大事にする経営を行なっていきます。" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- OGs -->
<meta property="og:title" content="3つのHappiness | CLOVER" />
<meta property="og:site_name" content="CLOVER" />
<meta property="og:description" content="" />
<meta property="og:type" content="website">
<!-- /OGs -->

<link rel="stylesheet" type="text/css" href="/common/css/style.css">
<link rel="stylesheet" type="text/css" href="/common/css/class.css">
<link rel="stylesheet" type="text/css" href="style.css?201807">

<script type="text/javascript" src="/common/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/common/js/slick.min.js"></script>
  <?php include('../../common/inc/script.inc');?>
  
</head>

<body class="">
<div class="wrapper catManagement pageTop">

<!--ヘッダー-->
<?php
include('../../common/inc/header.inc');
?>
<!--/ヘッダー-->


<section id="pankz">
	<p><a href="/">クローバー（ホーム）</a>&gt; <a href="/cast/">キャスト紹介</a>&gt; <span>フォトギャラリー</span></p>
</section>


<section class="">
	<div class="inner">
		<h1 class="ttl2">
			<div>
				<span>フォトギャラリー</span>
				<small>Photogallery</small>
			</div>
		</h1>
	</div>
</section>


<section class="content bgGrey1">

<div id="instafeed"></div>
<!--<div id="btn-more">もっとみる</div>--><br>

  <p class="taC">
  <a href="https://www.instagram.com/clover_group2018/" target="_blank" class="btnIns">Instagramトップへ</a>
  </p>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="instafeed.min.js"></script>
<script>
$(document).ready(function() {
  var feed = new Instafeed({
  target: 'instafeed',
  get: 'user',
  userId: '8178553519',
  accessToken:'8178553519.8441088.b6daabf36ec544f6a91db9379858b1e1',
  clientId: '8441088f14504b52a02846a128dba36f',
  links: true ,
  limit: 50,
  resolution: 'standard_resolution',
  template: '<div class="col-sm-3 col-xs-6 insta-box"><a href="{{link}}"><img src="{{image}}" target="_blank" /></a><div class="ellipsis"><p>{{caption}}</p></div></div>'
});
$('#btn-more').click(function() {
  feed.next();
});
  feed.run();
});
</script>
</section>


<!--フッター-->
  <?php
include('../../common/inc/footer.inc');
?>
<!--/フッター-->

</div><!--/.wrapper-->
</body>
</html>
