<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(''); ?></title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<?php if ( get_theme_mod( 'opencage_appleicon' ) ) : ?><link rel="apple-touch-icon" href="<?php echo get_theme_mod( 'opencage_appleicon' ); ?>"><?php endif; ?>
<?php if ( get_theme_mod( 'opencage_favicon' ) ) : ?><link rel="icon" href="<?php echo get_theme_mod( 'opencage_favicon' ); ?>"><?php endif; ?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--[if IE]>
<?php if ( get_theme_mod( 'opencage_favicon_ie' ) ) : ?><link rel="shortcut icon" href="<?php echo get_theme_mod( 'opencage_favicon_ie' ); ?>"><?php endif; ?>
<![endif]-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<?php get_template_part( 'head' ); ?>

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="/common/css/column.css">
<script src="https://use.typekit.net/vfk5vzc.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
  <header class="c-header">
	<!--<div class="lines"><hr><hr><hr><hr><hr></div>-->

	<div class="pcHd">
		<div class="hdIn">
			<div class="colL">
				<div class="logo"><a href="/"><img src="/common/img/logo.png" alt=""></a></div>
			</div>
		<nav class="c-nav layer1">
			<ul>
				<li class="hdNav1"><a href="/philosophy/index.php">3つのHappiness</a></li>
				<li class="hdNav2"><a href="/about/index.php">会社情報</a></li>
				<li class="hdNav3"><a href="/dayservice/index.php">デイサービス</a></li>
				<li class="hdNav4"><a href="/after/index.php">放課後等デイサービス</a></li>
				<li class="hdNav5"><a href="http://day-clover.com/cast/">キャスト紹介</a></li>
				<li class="hdNav6"><a href="/career/index.php">採用情報</a></li>
				<li class="hdNav6"><a href="/philosophy/blog/index.php">ブログ</a></li>
			</ul>
		</nav>
			<div class="colR">
				<div class="btnWrap">
					<a class="btn withIcn icnMail" href="/form/index.php">
						<span>お問い合わせ</span>
					</a>
				</div>
			</div>
		</div>

	</div>

	<div class="spHd">
		<div class="hdIn">
			<div class="logo"><a href="/"><img src="/common/img/logo.png" alt=""></a></div>

			<a class="spBtnMenu" href="#"></a>

			<nav class="c-nav layer1">
				<ul>
					<li>
						<a class="hasLower" href="/philosophy/index.php">3つのHappiness</a>
						<nav class="c-nav layer2">
					       <a href="http://day-clover.com/cast/">キャスト紹介</a>
					       <a href="/philosophy/blog/index.php">ブログ</a>
					       <a href="/career/index.php">採用情報TOP</a>
						</nav>
					</li>
					<li>
						<a class="hasLower" href="/about/index.php">会社情報</a>
						<nav class="c-nav layer2">
							<a href="/about/index.php">会社情報TOP</a>
							<a href="/about/company/index.php">社名の由来・会社概要・沿革</a>
							<a href="/about/message/index.php">トップメッセージ</a>
							<a href="/about/value/index.php">VALUE・VISION・PRINCIPLE</a>
						</nav>
					</li>
					<li>
						<a class="hasLower" href="/dayservice/index.php">デイサービス</a>
						<nav class="c-nav layer2">
					       <a href="/dayservice/index.php">デイサービスTOP</a>
							<a href="/dayservice/qa/index.php">社名の由来・会社概要・沿革</a>
							<a href="/dayservice/index.php#office">事業所</a>
							<a href="/dayservice/care/index.php">クローバーの介護観</a>
							<a href="/dayservice/day/index.php">クローバーの１日・利用料金</a>
						</nav>
					</li>
					<li>
						<a class="hasLower" href="/after/index.php">放課後等デイサービス</a>
						<nav class="c-nav layer2">
							<a href="/after/index.php">放課後等デイサービスTOP</a>
						</nav>
					</li>
					<li>
						<a class="hasLower" href="http://day-clover.com/cast/">キャスト紹介</a>
						<nav class="c-nav layer2">
							<a href="http://day-clover.com/cast/">キャスト紹介TOP</a>
						</nav>
					</li>
					<li>
						<a class="hasLower" href="/career/index.php">採用情報</a>
						<nav class="c-nav layer2">
							<a href="/career/index.php">採用情報TOP</a>
							<a href="/career/recruit/index.php">募集要項</a>
						</nav>
					</li>
                <li>
                <a href="/philosophy/blog/index.php">ブログ</a>
                </li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<div id="container">
<?php if(!is_page_template( 'page-lp.php' ) && !is_singular( 'post_lp' )): ?>

<?php if ( get_option( 'side_options_description' ) ) : ?><p class="site_description"><?php bloginfo('description'); ?></p><?php endif; ?>
<header class="header animated fadeIn <?php echo esc_html(get_option('side_options_headerbg'),'bgnormal');?> <?php if ( wp_is_mobile() ) : ?>headercenter<?php else:?><?php echo get_option( 'side_options_headercenter' ); ?><?php endif; ?>" role="banner">
<div id="inner-header" class="wrap cf">
<div id="logo" class="gf <?php echo esc_html(get_option('opencage_logo_size'));?>">
<?php if ( is_home() || is_front_page() ) : ?>
<?php if ( get_theme_mod( 'opencage_logo' ) ) : ?>
<h1 class="h1 img"><a href="<?php echo esc_url(home_url()); ?>" rel="nofollow"><img src="<?php echo get_theme_mod( 'opencage_logo' ); ?>" alt="<?php bloginfo('name'); ?>"></a></h1>
<?php else : ?>
<h1 class="h1 text"><a href="<?php echo esc_url(home_url()); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
<?php endif; ?>
<?php else: ?>
<?php if ( get_theme_mod( 'opencage_logo' ) ) : ?>
<p class="h1 img"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_theme_mod( 'opencage_logo' ); ?>" alt="<?php bloginfo('name'); ?>"></a></p>
<?php else : ?>
<p class="h1 text"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></p>
<?php endif; ?>
<?php endif; ?>
</div>

<?php if(!get_option('side_options_header_search')):?>
<a href="#searchbox" data-remodal-target="searchbox" class="nav_btn search_btn"><span class="text gf">search</span></a>
<?php endif;?>

<?php if (!is_mobile() && has_nav_menu('main-nav')):?>
<nav id="g_nav" role="navigation">
<?php wp_nav_menu(array(
     'container' => false,
     'container_class' => 'menu cf',
     'menu' => __( 'グローバルナビ' ),
     'menu_class' => 'nav top-nav cf',
     'theme_location' => 'main-nav',
     'before' => '',
     'after' => '',
     'link_before' => '',
     'link_after' => '',
     'depth' => 0,
     'fallback_cb' => ''
)); ?>
</nav>
<?php endif;?>

<a href="#spnavi" data-remodal-target="spnavi" class="nav_btn"><span class="text gf">menu</span></a>

<?php if(is_mobile() && has_nav_menu('main-nav-sp')):?>
<div class="g_nav-sp animated fadeIn">
<?php wp_nav_menu(array(
     'container' => 'nav',
     'container_class' => 'menu-sp cf',
     'menu' => __( 'グローバルナビ（スマートフォン）' ),
     'menu_class' => 'top-nav',
     'theme_location' => 'main-nav-sp',
     'before' => '',
     'after' => '',
     'link_before' => '',
     'link_after' => '',
     'depth' => 0,
     'fallback_cb' => ''
)); ?>
</div>
<?php endif;?>


</div>
</header>

<?php if (is_active_sidebar('sidebar-sp')):?>
<div class="remodal" data-remodal-id="spnavi" data-remodal-options="hashTracking:false">
<button data-remodal-action="close" class="remodal-close"><span class="text gf">CLOSE</span></button>
<?php dynamic_sidebar( 'sidebar-sp' ); ?>
<button data-remodal-action="close" class="remodal-close"><span class="text gf">CLOSE</span></button>
</div>

<?php else:?>

<div class="remodal" data-remodal-id="spnavi" data-remodal-options="hashTracking:false">
<button data-remodal-action="close" class="remodal-close"><span class="text gf">CLOSE</span></button>
<?php wp_nav_menu(array(
     'container' => false,
     'container_class' => 'sp_g_nav menu cf',
     'menu' => __( 'グローバルナビ' ),
     'menu_class' => 'sp_g_nav nav top-nav cf',
     'theme_location' => 'main-nav',
     'before' => '',
     'after' => '',
     'link_before' => '',
     'link_after' => '',
     'depth' => 0,
     'fallback_cb' => ''
)); ?>
<button data-remodal-action="close" class="remodal-close"><span class="text gf">CLOSE</span></button>
</div>

<?php endif; ?>



<?php if(!get_option('side_options_header_search')):?>
<div class="remodal searchbox" data-remodal-id="searchbox" data-remodal-options="hashTracking:false">
<div class="search cf"><dl><dt>キーワードで記事を検索</dt><dd><?php get_search_form(); ?></dd></dl></div>
<button data-remodal-action="close" class="remodal-close"><span class="text gf">CLOSE</span></button>
</div>
<?php endif;?>




<?php if ( get_option('other_options_headerunderlink') && get_option('other_options_headerundertext') ) : ?>
<div class="header-info <?php echo esc_html(get_option('side_options_headerbg'));?>"><a<?php if(get_option('other_options_headerunderlink_target')):?> target="_blank"<?php endif;?> href="<?php echo esc_html(get_option('other_options_headerunderlink'));?>"><?php echo esc_html(get_option('other_options_headerundertext'));?></a></div>
<?php endif;?>

<?php
	if ( is_front_page() && !is_paged() ) :
		if ( get_option( 'opencage_toppage_headeregtext' ) || get_option( 'opencage_toppage_headerjptext' ) ) : ?>

<div id="custom_header" class="<?php echo esc_html(get_option('opencage_toppage_textlayout')); ?>" style="color:<?php echo get_theme_mod('opencage_toppage_textcolor');?>; background-image: url(<?php if ( get_theme_mod('opencage_toppage_headerbgsp') && is_mobile()):?><?php echo get_theme_mod('opencage_toppage_headerbgsp');?><?php else:?><?php echo get_theme_mod('opencage_toppage_headerbg');?><?php endif;?>); background-position: center center; background-repeat:<?php echo get_option('opencage_toppage_headerbgrepeat');?>; background-size:<?php echo get_option('opencage_toppage_headerbgsize');?>;">
<script type="text/javascript">
jQuery(function( $ ) {
	$(window).load(function(){
	    $("#custom_header .wrap").css("opacity", "100");
	});
});
</script>

	<div class="wrap cf" style="opacity: 0;">
		<div class="header-text">
			<?php if ( get_option( 'opencage_toppage_headeregtext' )) : ?>
			<h2 class="en gf wow animated fadeInDown" data-wow-delay="0.5s"><?php echo get_option( 'opencage_toppage_headeregtext' ); ?></h2>
			<?php endif; ?>
			<?php if ( get_option( 'opencage_toppage_headerjptext' )) : ?>
			<p class="ja wow animated fadeInUp" data-wow-delay="0.8s"><?php echo get_option( 'opencage_toppage_headerjptext' ); ?></p>
			<?php endif; ?>
			<?php if ( get_option( 'opencage_toppage_headerlink' )) : ?>
			<div class="btn-wrap simple maru wow animated fadeInUp" data-wow-delay="1s"><a style="color:<?php echo get_theme_mod( 'opencage_toppage_btncolor' ); ?>;background:<?php echo get_theme_mod( 'opencage_toppage_btnbgcolor' ); ?>;" href="<?php echo esc_url(get_option( 'opencage_toppage_headerlink' )); ?>"><?php if ( get_option( 'opencage_toppage_headerlinktext' )) : ?><?php echo get_option( 'opencage_toppage_headerlinktext' ); ?><?php else:?>詳しくはこちら<?php endif;?></a></div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php
	endif;
endif;
?>

<?php if ( is_front_page() || is_home() ) : ?>
<?php		  
$args = array(
    'posts_per_page' => 16,
    'offset' => 0,
    'tag' => 'pickup',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => array('post','page'),
    'post_status' => 'publish',
    'suppress_filters' => true,
    'ignore_sticky_posts' => true,
    'no_found_rows' => true
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	?>

<script type="text/javascript">
jQuery(function( $ ) {
	$('.slickcar').slick({
		centerMode: true,
		dots: true,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 260,
      infinite:true,
		slidesToShow: 4,
		responsive: [
		{
			breakpoint: 1160,
			settings: {
			arrows: false,
			centerMode: true,
			slidesToShow: 4
		}
		},
		{
			breakpoint: 768,
			settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '40px',
			slidesToShow: 3
		}
		},
		{
			breakpoint: 480,
			settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '25px',
			slidesToShow: 1
		}
		}]
	});
	$(window).ready(function(){
	    $(".slickcar").css("opacity", "1.0");
	});
});
</script>
<section id="pankz" class="columntop">
	<p><a href="/">クローバー（ホーム）</a>&gt; <span>クローバーブログ</span></p>
</section>




<div id="top_carousel" class="carouselwrap wrap cf">
<ul class="slider slickcar" style="opacity: 0;">

<?php while ( $the_query->have_posts() ) {
$the_query->the_post();
?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
<figure class="eyecatch<?php if ( !has_post_thumbnail()) : echo ' noimg'; endif; ?>">
<?php if ( has_post_thumbnail()) : ?>
<?php the_post_thumbnail('home-thum'); ?>
<?php else : ?>
<img src="<?php echo get_theme_file_uri('/library/images/noimg.png'); ?>">
<?php endif; ?>

<?php
	if(get_post_type() == 'post'):
	$cat = get_the_category();
	$cat = $cat[0];
	$catid = $cat->cat_ID;
	$catname = $cat->name;
//	echo '<span class="osusume-label cat-name cat-id-' . $catid . '">' . $catname . '</span>';
    echo '<span class="osusume-label cat-name cat-id-">';
    the_author();
    echo '</span>';
	else:
//	echo '<span class="osusume-label cat-name cat-id-page"></span>';
    echo '<span class="osusume-label cat-name cat-id-">';
    the_author();
    echo '</span>';
	endif;
?>
</figure>
<h2 class="h2 entry-title"><?php the_title(); ?></h2>
</a></li>
<?php } ; ?>
</ul>
</div>
<?php }
wp_reset_postdata();
?>
<?php endif; ?>

<?php
	if(get_option('side_options_pannavi', 'pannavi_on') == 'pannavi_on' || !get_option('side_options_pannavi')){
		breadcrumb();
	}
?>
<?php endif; ?>

<script type="text/javascript">
 $(function(){
   $('.tagListSwitch .tabBox > li').click(function(){
     $('.tagListSwitch .tabBox > li').removeClass('active');
     $('.tagListSwitch .detailBox').removeClass('active');
     var tab = $(this).attr('class');
     $(this).addClass("active");
     $("."+tab).addClass("active");
   });
 });
</script>
<style type="text/css">
.tagListSwitch {
  margin-top: 50px;
  font-size: 12px;
}
.tagListSwitch a {
  text-decoration: none;
  color: #358f31;
}
.tagListSwitch ul {margin: 0;}
.tagListSwitch ul li {list-style: none;}
.tagListSwitch .tabBox {
  display: flex;
  border: 2px solid #358f31;
}
.tagListSwitch .tabBox li {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50%;
  padding: 0.5em;
  color: #358f31;
  text-align: center;
  box-sizing: border-box;
  cursor: pointer;
}
.tagListSwitch .tabBox li.active {
  background: #358f31;
  color: #fff;
}
.tagListSwitch .tabBox li span {display: block;}
.tagListSwitch .detailBox {display: none;}
.tagListSwitch .detailBox.active {display: block;}
.tagListSwitch .detailBox.tab01 ul li {
  border-bottom: 1px dotted #358f31;
}
.tagListSwitch .detailBox.tab01 ul li a {
  display: block;
  padding: 0.7em 1.0em;
}
.tagListSwitch .detailBox.tab02 {padding: 1.0em 0;}
.tagListSwitch .detailBox.tab02 ul {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.tagListSwitch .detailBox.tab02 li {
  display: inline-block;
  line-height: 1.6;
}
.tagListSwitch .detailBox.tab02 li {
  margin: 0 1.0em;
}
</style>
<div class="sp">
  <div class="tagListSwitch">
    <ul class="tabBox">
      <li class="tab01">
        <span>事業所別</span>
      </li>
      <li class="tab02 active">
      <span>タグ</span></li>
    </ul>
    <div class="detailBox tab01">
      <ul>
        <?php
          $users =get_users( array('orderby'=>ID,'order'=>ASC) );
          foreach($users as $user):
            $uid = $user->ID;
            $userData = get_userdata($uid);
            echo '<li><a href="'.get_bloginfo(url).'/?author='.$uid.'">'.$user->user_nicename.'</a></li>';
          endforeach;
        ?>
      </ul>
    </div>
    <div class="detailBox tab02 active">
      <ul>
        <?php
          // パラメータを指定
          $args = array(
            // タグ名順で指定
              'orderby' => 'name',
              // 昇順で指定
              'order' => 'ASC'
          );
          $posttags = get_tags( $args );

          if ( $posttags ){
            echo ' <ul class="tag-list"> ';
            foreach( $posttags as $tag ) {
              echo '<li><a href="'. get_tag_link( $tag->term_id ) .'">' . $tag->name . '</a></li>';
            }
            echo ' </ul> ';
          }
        ?>
      </ul>
    </div>
  </div><!-- /.tagListSwitch -->
</div>


<div id="content">
<div id="inner-content" class="wrap cf">

<main id="main" class="m-all t-all d-5of7 cf" role="main">

<?php get_template_part( 'parts_add_top' ); ?>

<?php
	$toplayout = get_option('opencage_toppage_archivelayout');
	$toplayoutsp = get_option('opencage_toppage_sp_archivelayout');
?>
<?php if (is_mobile()) :?>
	<?php if ( $toplayoutsp == "toplayout-big" ) : ?>
	<?php get_template_part( 'parts_archive_big' ); ?>
	<?php elseif ( $toplayoutsp == 'toplayout-card' ) : ?>
	<?php get_template_part( 'parts_archive_card' ); ?>
	<?php elseif ( $toplayoutsp == 'toplayout-magazine' ) : ?>
	<?php get_template_part( 'parts_archive_magazine' ); ?>
	<?php else : ?>
	<?php get_template_part( 'parts_archive_simple' ); ?>
	<?php endif;?>
<?php else : ?>
	<?php if ( $toplayout == "toplayout-big" ) : ?>
	<?php get_template_part( 'parts_archive_big' ); ?>
	<?php elseif ( $toplayout == 'toplayout-card' ) : ?>
	<?php get_template_part( 'parts_archive_card' ); ?>
	<?php elseif ( $toplayout == 'toplayout-magazine' ) : ?>
	<?php get_template_part( 'parts_archive_magazine' ); ?>
	<?php else : ?>
	<?php get_template_part( 'parts_archive_simple' ); ?>
	<?php endif;?>
<?php endif;?>

<?php pagination(); ?>
<?php get_template_part( 'parts_add_bottom' ); ?>
</main>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>