<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-50023646-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-50023646-1');
</script>
<meta charset="UTF-8">
<title>採用に関するお問い合わせ | CLOVER</title>
 <meta name="keywords" content="デイサービス,お泊り,介護,居宅,通所,渋谷,新宿,港,千代田,送迎,老人ホーム,ショートステイ" />
<meta name="description" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- OGs -->
<meta property="og:title" content="採用に関するお問い合わせ | CLOVER" />
<meta property="og:site_name" content="株式会社CLOVER｜都心の365日デイサービス&放課後等デイ" />
<meta property="og:description" content="株式会社CLOVER（クローバーグループ）は、東京都心・千葉県でお泊りデイサービスや、子どもの療育を行う放課後等デイサービスを運営。「Happinessを提供する」を経営理念に、「休日に自宅やカフェでくつろいでいる」ような新しいケア・サービスを目指します。" />
<meta property="og:type" content="website">
<!-- /OGs -->

<link rel="stylesheet" type="text/css" href="../common/css/exvalidation.css">
<link rel="stylesheet" type="text/css" href="../common/css/style.css">
<link rel="stylesheet" type="text/css" href="../common/css/class.css">

<script type="text/javascript" src="../common/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../common/js/exvalidation.js"></script>
<script type="text/javascript" src="../common/js/exchecker-ja.js"></script>
<script type="text/javascript" src="../common/js/slick.min.js"></script>
 <?php include('../common/inc/script.inc');?>
<script type="text/javascript" src="../common/js/form.js"></script>
</head>

<body class="">
<div class="wrapper catForm pageTop">

<!--ヘッダー-->
 <?php include('../common/inc/header.inc');?>
<!--/ヘッダー-->


<section id="pankz">
	<p><a href="/">クローバー（ホーム）</a>&gt; <span>採用に関するお問い合わせ</span></p>
</section>


<section class="">
	<div class="inner">
		<h1 class="ttl2">
			<div>
				<span>採用に関するお問い合わせ</span>
				<small>Contact</small>
			</div>
		</h1>
    </div>
  </section>


<section class="content bgGrey1">
	<div class="inner sz3">
		<form method="post" action="mail.php" id="validForm">
			<div class="tblBox1 noBd">
				<table>
					<tr>
					  <th>お名前 <p class="txRed fz12">※必須</p></th>
					  <td><input size="20" type="text" name="お名前" id="name" /></td>
					  </tr>
					<tr>
						<th>電話番号（半角）</th>
						<td><input size="30" type="text" name="電話番号" /></td>
					</tr>
					<tr>
						<th>Mail（半角） <p class="txRed fz12">※必須</p></th>
						<td><input size="30" type="text" name="Email" id="Email" /></td>
					</tr>
				</table>
				<p align="center" class="btnWrap">
					<input class="btn clr2 sz3" type="submit" value="　 確認 　" />
					<input class="btn clr3 sz3" type="reset" value="リセット" />
				</p>
			</div>
		</form>
	</div>
</section>


<!--フッター-->
 <?php include('../common/inc/footer.inc');?>
<!--/フッター-->

</div><!--/.wrapper-->
</body>
</html>
