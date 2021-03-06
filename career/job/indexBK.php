<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
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
<title>募集要項｜株式会社CLOVER</title>
 <meta name="keywords" content="デイサービス,お泊り,介護,居宅,通所,渋谷,新宿,港,千代田,送迎,老人ホーム,ショートステイ" />
<meta name="description" content="先輩インタビュー 介護と子どもたちの療育事業を行う株式会社CLOVER（クローバーグループ）のキャストをご紹介しています。「何をするかよりも、誰とするか」。現場で働く先輩たちの生の声を発信しています。未経験からスタートしたキャスト、ママとして働くキャストなど、多彩なキャストが活躍中です。" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- OGs -->
<meta property="og:title" content="キャスト紹介 | CLOVER" />
<meta property="og:site_name" content="株式会社CLOVER｜都心の365日デイサービス&放課後等デイ" />
<meta property="og:description" content="株式会社CLOVER（クローバーグループ）は、東京都心・千葉県でお泊りデイサービスや、子どもの療育を行う放課後等デイサービスを運営。「Happinessを提供する」を経営理念に、「休日に自宅やカフェでくつろいでいる」ような新しいケア・サービスを目指します。" />
<meta property="og:type" content="website">
<!-- /OGs -->

<link rel="stylesheet" type="text/css" href="/common/css/style.css">
<link rel="stylesheet" type="text/css" href="/common/css/class.css">
<link rel="stylesheet" type="text/css" href="/common/css/job.css">

<script type="text/javascript" src="/common/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/common/js/slick.min.js"></script>
  <!--ヘッダー-->
  <?php
include('../../common/inc/script.inc');
?>
<!--/ヘッダー-->
</head>


<body <?php body_class(); ?>>
<div class="wrapper cateNews pageTop">

<!--ヘッダー-->
  <?php
include('../../common/inc/header.inc');
?>
<!--/ヘッダー-->


<section id="pankz">
	<p><a href="/">クローバー（ホーム）</a>&gt; <a href="/career/index.php">採用情報</a>&gt; <span>募集要項</span></p>
</section>


<section class="">
	<div class="inner">
		<h1 class="ttl2">
			<div>
				<span>募集要項</span>
				<small>Recruit</small>
			</div>
		</h1>
    </div>
  <div class="lowLinks">
		<a href="/career/index.php">採用情報TOP</a>
		<a href="/career/recruit/index.php" class="cur">募集要項</a>
		<a href="/career/welfare/index.php">福利厚生</a>
	</div>
  </section>



<div class="job-tag">
  <?php
	//一番親階層のカテゴリをすべて取得
	$categories = get_categories('parent=0');
  
	
	//取得したカテゴリへの各種処理
	foreach($categories as $val){
		//カテゴリのリンクURLを取得
		$cat_link = get_category_link($val->cat_ID);
		//カスタムフィールドでアイコン取得する用のIDを取得
		$post_id = 'category_' . $val -> cat_ID;
        $cat_slug  = $val->category_nicename; // カテゴリースラッグ

		//アイコンのソース取得
		$attachment_id=get_field('category_icon_small',$post_id);
		$icon_src = wp_get_attachment_image($attachment_id,'full');
		//親カテゴリのリスト出力
		echo '<span class="' . $cat_slug . '">' . $val -> name . '</span>';
		
		//子カテゴリのIDを配列で取得。配列の長さを変数に格納
		$child_cat_num = count(get_term_children($val->cat_ID,'category'));
		
		//子カテゴリが存在する場合
		if($child_cat_num > 0){
			echo '<ul>';
			//子カテゴリの一覧取得条件
			$category_children_args = array('parent'=>$val->cat_ID);
			//子カテゴリの一覧取得
			$category_children = get_categories($category_children_args);
			//子カテゴリの数だけリスト出力
			foreach($category_children as $child_val){
				$cat_link = get_category_link($child_val -> cat_ID);
				echo '<li><a href="' . $cat_link . '">' . $child_val -> name . '</a>';
			}
			echo '</ul>';
		}
	}
?>

</div>

<?php get_footer();
