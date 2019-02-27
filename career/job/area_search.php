<?php
/*
Template Name: エリア検索
*/
 
?>
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
  <title>
    <?php
  if(is_category())://カテゴリー
    single_cat_title();
  else://投稿
    the_title();
  endif;
  ?>
    ｜株式会社CLOVER</title>
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
  <!--ヘッダー-->
  <?php
include('../../common/inc/script.inc');
?>
  <script type="text/javascript" src="/common/js/job.js"></script>
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
      <p><a href="/">クローバー（ホーム）</a>&gt; <a href="/career/index.php">採用情報</a>&gt; <a href="/career/job/index.php">募集要項</a>&gt; 勤務地から探す：
        <?php echo $_GET['value'] ?>
      </p>
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
        <a href="/career/job/index.php" class="cur">募集要項</a>
        <a href="/career/welfare/index.php">福利厚生</a>
      </div>
    </section>










    <div class="wrap">
      <div class="bgGrey1">
        <div class="list-page">
          <div id="primary" class="content-area">

            <h1 class="job-list-title">
              <?php 
                echo $_GET['value'];
               $cityname = $_GET['category_name'];
               if($cityname == 'regular'){
                 echo "（正社員）";
               }else{
                 echo "（パート・アルバイト）";
               };
               ?>
            </h1>


            <main id="main" class="site-main job-list" role="main">

              <?php $args = array(
                'posts_per_page'   => 5, //5件表示する
                'category_name'    => $_GET['category_name'],  //カテゴリー「regularかpart」
                'orderby'          => 'date',  //日付順
                'order'            => 'DESC', //降順
                //'meta_key' => 'city', //カスタムフィールドのキー
                'meta_key' => 'city', //カスタムフィールドのキー
                'meta_value' => $_GET['value'], //カスタムフィールドの値
                'meta_compare' => 'LIKE' //'meta_value'のテスト演算子
                  );
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();

                get_template_part( 'template-parts/post/content-area', get_post_format() );

              ?>



              <?php endwhile; endif; wp_reset_postdata(); ?>

            </main>

          </div><!-- #primary -->
          <?php get_sidebar(); ?>
        </div>


      </div>
    </div><!-- .wrap -->

    <?php get_footer();
