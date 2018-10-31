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
<title>エントリー | CLOVER</title>
 <meta name="keywords" content="デイサービス,お泊り,介護,居宅,通所,渋谷,新宿,港,千代田,送迎,老人ホーム,ショートステイ" />
<meta name="description" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- OGs -->
<meta property="og:title" content="エントリー | CLOVER" />
<meta property="og:site_name" content="株式会社CLOVER｜都心の365日デイサービス&放課後等デイ" />
<meta property="og:description" content="株式会社CLOVER（クローバーグループ）は、東京都心・千葉県でお泊りデイサービスや、子どもの療育を行う放課後等デイサービスを運営。「Happinessを提供する」を経営理念に、「休日に自宅やカフェでくつろいでいる」ような新しいケア・サービスを目指します。" />
<meta property="og:type" content="website">
<!-- /OGs -->

<link rel="stylesheet" type="text/css" href="../../../common/css/exvalidation.css">
<link rel="stylesheet" type="text/css" href="../../../common/css/style.css">
<link rel="stylesheet" type="text/css" href="../../../common/css/class.css">
<link rel="stylesheet" type="text/css" href="/common/css/job.css">

<script type="text/javascript" src="../../../common/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../../../common/js/exvalidation.js"></script>
<script type="text/javascript" src="../../../common/js/exchecker-ja.js"></script>
<script type="text/javascript" src="../../../common/js/slick.min.js"></script>
 <?php include('../../../common/inc/script.inc');?>
<script type="text/javascript" src="../../../common/js/form.js"></script>
</head>

<body class="">
<div class="wrapper catForm is_entry pageTop">

<!--ヘッダー-->
 <?php include('../../../common/inc/header.inc');?>
<!--/ヘッダー-->


<section id="pankz">
	<p><a href="/">クローバー（ホーム）</a>&gt; <span>エントリー</span></p>
</section>


<section class="">
	<div class="inner">
		<h1 class="ttl2">
			<div>
				<span>エントリー</span>
				<small>Entry</small>
			</div>
		</h1>
  </div>
</section>


<section class="content bgGrey1">
	<div class="inner sz3">
		<form method="post" action="mail.php" id="validForm">
			<div class="entryFormTbl">
				<table>
					<tr>
					  <th><p class="hissu">必須</p>応募職種</th>
					  <td><?php echo $_GET["jobtitle"] ?><input type="hidden" name="応募職種" value="<?php echo $_GET["jobtitle"] ?>"></td>
					  </tr>
					<tr>
					  <th><p class="hissu">必須</p>事業所</th>
					  <td><?php echo $_GET["office"] ?><input type="hidden" name="事業所" value="<?php echo $_GET["office"] ?>"></td>
					  </tr>
					<tr>
					  <th><p class="hissu">必須</p>お名前</th>
					  <td><input size="20" type="text" name="お名前" id="name" placeholder="例）山田　太郎" /></td>
					  </tr>
					<tr>
					  <th><p class="hissu">必須</p>フリガナ</th>
					  <td><input size="20" type="text" name="フリガナ" id="nameF" placeholder="例）ヤマダタロウ" /></td>
					  </tr>
					<tr>
						<th><p class="hissu">必須</p>電話番号（半角）</th>
						<td><input size="30" type="text" name="電話番号" placeholder="例）090-0000-0000" /></td>
					</tr>
					<tr>
						<th><p class="hissu">必須</p>メールアドレス</th>
						<td><input size="30" type="text" name="Email" id="Email" placeholder="例）XXX@clover.com" /></td>
					</tr>
					<tr>
						<th><p class="hissu">必須</p>性別</th>
						<td>
              <ul class="genderRdo">
                <li><input type="radio" name="gender" value="男性" id="genderM"><label for="genderM">男性</label></li>
                <li><input type="radio" name="gender" value="女性" id="genderF"><label for="genderF">女性</label></li>
              </ul>
            </td>
					</tr>
					<tr>
						<th><p class="hissu">必須</p>生年月日</th>
						<td>
              <ul class="birth">
                <li>
                  <select name="" id="" placeholder="1900">
                    <option value=""></option>
                    <option value="1901">1901</option>
                  </select><span>年</span>
                </li>
                <ul>
                  <li>
                    <select name="" id="">
                      <option value=""></option>
                      <option value="01">01</option>
                    </select><span>月</span>
                  </li>
                  <li>
                    <select name="" id="">
                      <option value=""></option>
                      <option value="01">01</option>
                    </select><span>日</span>
                  </li>
                </ul>
              </ul>
            </td>
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
 <?php include('../../../common/inc/footer.inc');?>
<!--/フッター-->

</div><!--/.wrapper-->
</body>
</html>
