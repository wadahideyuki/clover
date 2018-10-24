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
<title>お問い合わせ | CLOVER</title>
 <meta name="keywords" content="デイサービス,お泊り,介護,居宅,通所,渋谷,新宿,港,千代田,送迎,老人ホーム,ショートステイ" />
<meta name="description" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- OGs -->
<meta property="og:title" content="お問い合わせ | CLOVER" />
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
  
<script>
  /*
  $(function(){
    $("#jigyosho input").change(function(){
      var jigyoName = $(this).attr("data-url");
     $(".formUrl").attr("action",jigyoName);
      console.log($(".formUrl").attr("action"));
    })
  })
  */  
  </script>
</head>

<body class="">
<div class="wrapper catForm pageTop">

<!--ヘッダー-->
 <?php include('../common/inc/header.inc');?>
<!--/ヘッダー-->


<section id="pankz">
	<p><a href="/">クローバー（ホーム）</a>&gt; <span>お問い合わせ</span></p>
</section>


<section class="">
	<div class="inner">
		<h1 class="ttl2">
			<div>
				<span>お問い合わせ</span>
				<small>Contact</small>
			</div>
		</h1>
    </div>
  </section>


<section class="content bgGrey1">
	<div class="inner sz3">
		<form method="post" action="mail.php" id="validForm" class="formUrl">      
			<div class="tblBox1 noBd">
				<table>
					<tr>
						<th>ご用件</th>
						<td>
							<div class="selectWrap">
								<label><input type="radio" name="ご用件" value="ご質問・お問い合わせ" checked>ご質問・お問い合わせ</label><br><label>
								<input type="radio" name="ご用件" value="採用について">採用について</label>
								
						  </div>
						</td>
					</tr>
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
					<tr>
					  <th>お問い合わせ<br>事業所</th>
					  <td><div class="selectWrap" id="jigyosho">
					    <label><input type="radio" name="事業所" value="デイサービスクローバー千駄ヶ谷" data-url="mail_sendagaya.php"  checked>デイサービスクローバー千駄ヶ谷</label><br>
					    <label><input type="radio" name="事業所" value="デイサービスクローバー神楽坂" data-url="mail_kagurazaka.php">デイサービスクローバー神楽坂</label><br>
					    <label><input type="radio" name="事業所" value="デイサービスクローバー代々木上原" data-url="mail_uehara.php">デイサービスクローバー代々木上原</label><br>
					    <label><input type="radio" name="事業所" value="デイサービスクローバー広尾" data-url="mail_hiroo.php">デイサービスクローバー広尾</label><br>
					    <label><input type="radio" name="事業所" value="デイサービスクローバー新宿" data-url="mail_shinjuku.php">デイサービスクローバー新宿</label><br>
					    <label><input type="radio" name="事業所" value="デイサービスクローバー参宮橋" data-url="mail_sangubashi.php">デイサービスクローバー参宮橋</label><br>
					    <label><input type="radio" name="事業所" value="デイサービスクローバー本八幡" data-url="mail_motoyawata.php">デイサービスクローバー本八幡</label><br>
					    <label><input type="radio" name="事業所" value="アフタースクールクローバーキッズ麻布十番" data-url="mail_azabu.php">アフタースクールクローバーキッズ麻布十番</label>
					    
				      </div></td>
				  </tr>
					<tr>
						<th>お問い合わせ内容 <p class="txRed fz12">※必須</p></th>
						<td><textarea name="お問い合わせ内容" cols="50" rows="5" id="txArea"></textarea></td>
					</tr>
				</table>
				<p align="center" class="btnWrap">
					<input class="btn clr2 sz3" type="submit" value="　 確認 　" />
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
