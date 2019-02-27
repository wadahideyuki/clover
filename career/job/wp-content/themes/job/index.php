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

?>
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
  <title>職種・勤務地検索｜株式会社CLOVER</title>
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

  <link rel="stylesheet" type="text/css" href="/common/css/style_recruit.css">
  <link rel="stylesheet" type="text/css" href="/common/css/class.css">
  <link rel="stylesheet" type="text/css" href="/common/css/job.css">

  <script type="text/javascript" src="/common/js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="/common/js/slick.min.js"></script>

  <script>
    $(function() {
      $(".job-tag .partTtl li").click(function() {
        if ($(this).hasClass("show")) {
          return false;
        } else {
          var thisName = $(this).attr("class");
          $(".job-tag .partTtl li").removeClass("show");
          $(this).addClass("show");
          $(".job-tag .partTag li").removeClass("show");
          $(".job-tag .partTag li." + thisName).addClass("show");
          return false;
        }
      });
    });

  </script>

  <!--ヘッダー-->
  <?php
include('../../common/inc/script.inc');
?>
  <!--/ヘッダー-->
</head>


<body <?php body_class(); ?>>
  <div class="wrapper catCareer pageRecruit">

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
            <span>職種・勤務地検索</span>
            <small>Recruit</small>
          </div>
        </h1>
      </div>
      <div class="lowLinks">
        <a href="/career/index.php">採用情報TOP</a>
        <a href="/career/job/index.php" class="cur">職種・勤務地検索</a>
        <a href="/career/welfare/index.php">福利厚生</a>
      </div>
    </section>

    <ul>
      <li><a href="#type">職種から探す</a></li>
      <li><a href="#area">勤務地から探す</a></li>

    </ul>

    <div class="bgGrey1 PB30">

      <section class="job-tag">
        <div class="inner sz2">
          <h2 class="ttl1" id="type">職種から探す</h2>
          <?php

	//一番親階層のカテゴリをすべて取得
	$categories = get_categories('parent=0');
  

  //------------- タイトル部分の表示 -------------//
  echo '<ul class="partTtl">';
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
		if($cat_slug == "regular"){
		  echo '<li class="show ' . $cat_slug . '">' . $val -> name . '</li>';
    }else{
      echo '<li class="' . $cat_slug . '">' . $val -> name . '</li>';
    }

	}
  echo '</ul>';

  //------------- 中身(タグ)の表示 -------------//
	echo '<ul class="partTag">';
	foreach($categories as $val){
		//カテゴリのリンクURLを取得
		$cat_link = get_category_link($val->cat_ID);
		//カスタムフィールドでアイコン取得する用のIDを取得
		$post_id = 'category_' . $val -> cat_ID;
        $cat_slug  = $val->category_nicename; // カテゴリースラッグ

		//アイコンのソース取得
		$attachment_id=get_field('category_icon_small',$post_id);
		$icon_src = wp_get_attachment_image($attachment_id,'full');

		//子カテゴリのIDを配列で取得。配列の長さを変数に格納
		$child_cat_num = count(get_term_children($val->cat_ID,'category'));

		//子カテゴリが存在する場合
		if($child_cat_num > 0){
      if($cat_slug == "regular"){
        echo '<li class="show ' . $cat_slug . '">';
      }else{
        echo '<li class="' . $cat_slug . '">';
      }
			//子カテゴリの一覧取得条件
			$category_children_args = array('parent'=>$val->cat_ID);
			//子カテゴリの一覧取得
			$category_children = get_categories($category_children_args);
			//子カテゴリの数だけリスト出力
			foreach($category_children as $child_val){
				$cat_link = get_category_link($child_val -> cat_ID);
				echo '<a href="' . $cat_link . '">' . $child_val -> name . '</a>';
			}
		}

	}
  echo '</ul>';
?>
        </div>


        <div class="inner sz2">
          <h2 class="ttl1" id="area">勤務地から探す</h2>
          <ul class="partTtl">
            <li class="part">パート・アルバイト</li>
            <li class="show regular">正社員</li>
          </ul>
          <ul class="partTag">
            <li class="part">
              <a href="/career/job/area_search/?category_name=part&value=渋谷区">渋谷区</a>
              <a href="/career/job/area_search/?category_name=part&value=新宿区">新宿区</a>
              <a href="/career/job/area_search/?category_name=part&value=世田谷区">世田谷区</a>
              <a href="/career/job/area_search/?category_name=part&value=目黒区">目黒区</a>
              <a href="/career/job/area_search/?category_name=part&value=港区">港区</a>
              <a href="/career/job/area_search/?category_name=part&value=市川市">市川市</a>

            </li>
            <li class="show regular">
              <a href="/career/job/area_search/?category_name=regular&value=渋谷区">渋谷区</a>
              <a href="/career/job/area_search/?category_name=regular&value=新宿区">新宿区</a>
              <a href="/career/job/area_search/?category_name=regular&value=世田谷区">世田谷区</a>
              <a href="/career/job/area_search/?category_name=regular&value=目黒区">目黒区</a>
              <a href="/career/job/area_search/?category_name=regular&value=港区">港区</a>
              <a href="/career/job/area_search/?category_name=regular&value=市川市">市川市</a>

            </li>
          </ul>



        </div>
      </section>


      <section class="statueZone">
        <div class="inner sz2">
          <h2 class="ttl1">求める人物像</h2>
          <ul>
            <li>素直で前向きな人</li>
            <li>気配り、目配りが出来る人</li>
            <li>仲間を大切にする人</li>
            <li>負けず嫌いな人</li>
            <li>行動力のある人</li>
            <li>思いやりのある人</li>
            <li>人の気持ちのわかる<br class="pc">やさしい人</li>
            <li>ちょっと癒し系な人</li>
            <li>楽しい人、面白い人</li>
          </ul>
          <dl>
            <dt>こんな方は<br>お断りします</dt>
            <dd><span>自己中心的で相手の事を考えられない人、</span><span>プラスアルファの仕事をしない人、</span><br class="pc">
              <span>不平、不満、愚痴が多く言い訳をしてやらない人、</span><span>チームの和を乱す人</span></dd>
          </dl>
        </div>
      </section>

    </div>

    <?php get_footer();
