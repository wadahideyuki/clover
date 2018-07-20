<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ | CLOVER</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- OGs -->
<meta property="og:title" content="お問い合わせ | CLOVER" />
<meta property="og:site_name" content="CLOVER" />
<meta property="og:description" content="" />
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
		<form method="post" action="mail.php" id="validForm">
			<div class="tblBox1 noBd">
				<table>
					<tr>
						<th>ご用件</th>
						<td>
							<div class="selectWrap">
								<label><input type="radio" name="youken" value="ご質問・お問い合わせ">ご質問・お問い合わせ</label><br><label>
								<input type="radio" name="youken" value="採用について">採用について</label>
								
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
					  <td><div class="selectWrap">
					    <label><input type="checkbox" name="jigyousho" value="デイサービスクローバー千駄ヶ谷">デイサービスクローバー千駄ヶ谷</label><br>
					    <label><input type="checkbox" name="jigyousho" value="デイサービスクローバー神楽坂">デイサービスクローバー神楽坂</label><br>
					    <label><input type="checkbox" name="jigyousho" value="デイサービスクローバー代">デイサービスクローバー代々木上原</label><br>
					    <label><input type="checkbox" name="jigyousho" value="デイサービスクローバー広尾">デイサービスクローバー広尾</label><br>
					    <label><input type="checkbox" name="jigyousho" value="デイサービスクローバー新宿">デイサービスクローバー新宿</label><br>
					    <label><input type="checkbox" name="jigyousho" value="デイサービスクローバー参宮橋">デイサービスクローバー参宮橋</label><br>
					    <label><input type="checkbox" name="jigyousho" value="デイサービスクローバー本八幡">デイサービスクローバー本八幡</label><br>
					    <label><input type="checkbox" name="jigyousho" value="アフタースクールクローバーキッズ麻布十番">アフタースクールクローバーキッズ麻布十番</label>
					    
				      </div></td>
				  </tr>
					<tr>
						<th>お問い合わせ内容 <p class="txRed fz12">※必須</p></th>
						<td><textarea name="お問い合わせ内容" cols="50" rows="5" id="txArea"></textarea></td>
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
