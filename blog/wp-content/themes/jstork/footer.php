<div id="page-top">
  <a href="#header" title="ページトップへ"><i class="fa fa-chevron-up"></i></a>
</div>

<?php if(!is_page_template( 'page-lp.php' ) && !is_singular( 'post_lp' )): ?>
<?php
	if(get_option('side_options_pannavi', 'pannavi_on') == 'pannavi_on_bottom'){
		breadcrumb();
	}
?>
<div id="footer-top" class="wow animated fadeIn cf <?php echo esc_html(get_option('side_options_headerbg','bgnormal'));?>">
  <div class="inner wrap cf">
    <?php if ( is_mobile() && is_active_sidebar( 'footer-sp' )) : ?>
    <?php dynamic_sidebar( 'footer-sp' ); ?>
    <?php else:?>
    <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
    <div class="m-all t-1of2 d-1of3">
      <?php dynamic_sidebar( 'footer1' ); ?>
    </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'footer2' ) ) : ?>
    <div class="m-all t-1of2 d-1of3">
      <?php dynamic_sidebar( 'footer2' ); ?>
    </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'footer3' ) ) : ?>
    <div class="m-all t-1of2 d-1of3">
      <?php dynamic_sidebar( 'footer3' ); ?>
    </div>
    <?php endif; ?>
    <?php endif; ?>
  </div>
</div>
<?php endif; ?>

<footer id="footer" class="footer <?php echo get_option('side_options_headerbg');?>" role="contentinfo">
  <div id="inner-footer" class="inner wrap cf">
    <nav role="navigation">
      <?php wp_nav_menu(array(
			'container' => 'div',
			'container_class' => 'footer-links cf',
			'menu' => __( 'Footer Links' ),
			'menu_class' => 'footer-nav cf',
			'theme_location' => 'footer-links',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'depth' => 0,
			'fallback_cb' => ''
			)); ?>
    </nav>
    <p class="source-org copyright">&copy;Copyright
      <?php echo date('Y'); ?> <a href="<?php echo esc_url(home_url( '/' )); ?>" rel="nofollow">
        <?php bloginfo( 'name' ); ?></a>.All Rights Reserved.</p>
  </div>
</footer>

</div>
<?php wp_footer(); ?>
<div class="c-footer">
  <div class="part1">
    <div class="inner">
      <div class="tel"><img src="/common/img/ft_tel.png" alt=""></div>
      <ul class="ftSns">
        <li class="ftSnsXXX">
          <!--<a href="https://www.facebook.com/%E3%82%AF%E3%83%AD%E3%83%BC%E3%83%90%E3%83%BC%E3%82%B0%E3%83%AB%E3%83%BC%E3%83%97%E6%96%B0%E5%8D%92%E6%8E%A1%E7%94%A8-480419259019130/?modal=admin_todo_tour" target="_blank">
						<dl>
							<dt><img src="/common/img/ft_sns_fb.png" alt=""></dt>
							<dd>Facebook</dd>
						</dl>
					</a>-->
          <div id="fb-root"></div>
          <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s);
              js.id = id;
              js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.0&appId=276540409025697&autoLogAppEvents=1';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

          </script>
          <div class="fb-like" data-href="http://day-clover.com" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </li>
        <li class="ftSnsXXX">
          <a href="https://twitter.com/day_clovergroup" target="_blank">
            <dl>
              <dt><img src="/common/img/ft_sns_tw_top.png" alt=""></dt>
            </dl>
          </a>
        </li>
        <li class="ftSnsXXX">
          <a href="https://www.instagram.com/clover_group2018/" target="_blank">
            <dl>
              <dt><img src="/common/img/ft_sns_insta_top.png" alt=""></dt>
            </dl>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="part2">
    <div class="">
      <div class="in">
        <h2 class="logo"><a href="#"><img src="/common/img/logo.png" alt=""></a></h2>
        <ul class="layer1">
          <li>
            <h3>3つのHappiness</h3>
            <ul class="layer2">
              <li><a href="/cast/">キャスト紹介</a></li>
              <li><a href="/philosophy/blog/index.php">ブログ</a></li>
              <li><a href="/career/index.php">採用情報TOP</a></li>
            </ul>
          </li>
          <li>
            <h3>会社情報</h3>
            <ul class="layer2">
              <li><a href="/about/index.php">会社情報TOP</a></li>
              <li><a href="/about/company/index.php">社名の由来・会社概要・沿革</a></li>
              <li><a href="/about/value/index.php">VALUE・VISION・PRINCIPLE</a></li>
              <li><a href="http://day-clover.com/news/category/media/">メディア掲載</a></li>
              <li><a href="http://day-clover.com/cast/%E9%A6%99%E4%B8%B8%E4%BF%8A%E5%B9%B8/">トップメッセージ</a></li>
            </ul>
          </li>
          <li>
            <h3>デイサービス</h3>
            <ul class="layer2">
              <li><a href="/dayservice/index.php">デイサービスTOP</a></li>
              <li><a href="/dayservice/care/index.php">クローバーの介護観</a></li>
              <li><a href="/dayservice/index.php#office">事業所一覧</a></li>
              <li><a href="/dayservice/day/index.php">クローバーの１日・利用料金</a></li>
              <li><a href="/voice/">お客様の声</a></li>
              <li><a href="/dayservice/qa/">よくある質問</a></li>
            </ul>
          </li>
          <li>
            <h3>放課後等デイサービス</h3>
            <ul class="layer2">
              <li><a href="/after/index.php">放課後等デイサービスTOP</a></li>
            </ul>
          </li>
          <li>
            <h3>キャスト紹介</h3>
            <ul class="layer2">
              <li><a href="/cast/">キャスト紹介TOP</a></li>
              <li><a href="/cast/gallery/">フォトギャラリー</a></li>
            </ul>
          </li>
          <li>
            <h3>採用情報</h3>
            <ul class="layer2">
              <li><a href="/career/index.php">採用情報TOP</a></li>
              <li><a href="/career/recruit/index.php">募集要項</a></li>
              <li><a href="/career/welfare/index.php">福利厚生</a></li>
            </ul>
          </li>
          <div>
            <h3 class="blog"><a href="/philosophy/blog/index.php">ブログ</a></h3>
          </div>
        </ul>
      </div>
      <p id="copyRight">Copyright © 2018 株式会社CLOVER All Rights Reserved.</p>
    </div>
  </div>
</div>

<script>

//spヘッダーのメニューボタン
$(".spBtnMenu").click(function(){
	$(this).toggleClass("on");
	$(".c-header .spHd .c-nav.layer1 ul").slideToggle();
	return false;
});

//spヘッダーのNav
/*$(".header .spHd .hasLower").click(function(){
	$(this).toggleClass("show");
	$(this).next().slideToggle();
	return false;
});*/

//spフッターのアコーディオン
$(".c-footer .part2 .layer1 > li h3").click(function(){
	winW = $(window).width();
	if(winW <= 767){
		$(this).toggleClass("show");
		$(this).next().slideToggle();
	}
	return false;
});

</script>
</body>

</html>
