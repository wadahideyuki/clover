<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section id="pankz">
  <p><a href="/">クローバー（ホーム）</a>&gt; <span><a href="/cast/">キャスト紹介</a></span>&gt; <span><?php the_title(); ?></span></p>
</section>
<div id="page" class="site">
	<div class="site-inner">
  
		<!-- .site-header -->

		<div id="content" class="site-content">
      
<div  class="cast-detail" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="content bgGrey1">
	<div class="inner sz2 ">
		<div class="profBox">
			<div class="img">
				<?php twentysixteen_post_thumbnail(); ?>
			</div>
			<dl class="txt">
				<dt><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?><p><?php echo esc_html( $post->POSITION ); ?></p></dt>
				<dd><?php echo esc_html( $post->PROFILE ); ?></dd>
			</dl>
		</div>

			<div class="ttl1"><?php twentysixteen_excerpt(); ?></div>
		<div class="episodeBox">
			
    
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			
		?>
		</div>
	</div>
</section>
  
<?php if(get_field('O1_NAME')): // 1人目の入力がある場合 ?>
<section class="content2 introduce-box">
  <h2 class="ttl1">他のキャストに聞きました！<br>
    <?php the_title(); ?>さんってどんな人？</h2>
 
  <dl class="">
    
  <dt>
    <img src="<?php the_field('O1_PHOTO'); ?>">
    <span class="intro-name"><?php the_field('O1_NAME'); ?></span>
    <span class="intro-role"><?php the_field('O1_ROLE'); ?></span>
    </dt>
    <dd>
    <p><?php the_field('O1_TEXT'); ?></p>
    </dd>
  </dl>
  <?php if(get_field('O2_NAME')): // 2人目の入力がある場合 ?>
  <dl class="reverse">
  <dt>
    <img src="<?php the_field('O2_PHOTO'); ?>">
    <span class="intro-name"><?php the_field('O2_NAME'); ?></span>
    <span class="intro-role"><?php the_field('O2_ROLE'); ?></span>
    </dt>
    <dd>
    <p><?php the_field('O2_TEXT'); ?></p>
    </dd>
  </dl>
  <?php endif; ?>
  <?php if(get_field('O3_NAME')): // 2人目の入力がある場合 ?>
  <dl>
  <dt>
    <img src="<?php the_field('O3_PHOTO'); ?>">
    <span class="intro-name"><?php the_field('O3_NAME'); ?></span>
    <span class="intro-role"><?php the_field('O3_ROLE'); ?></span>
    </dt>
    <dd>
    <p><?php the_field('O3_TEXT'); ?></p>
    </dd>
  </dl>
  <?php endif; ?>
  
</section>
  
 
<?php endif; ?>
  
  
  
<section class="content2 bgMainColor">
	<div class="inner sz2">
		<dl class="staffTags">
			<dt>
				<span>#</span>
				<h3>ハッシュタグから探す<br>クローバーのキャスト</h3>
			</dt>
			<dd>
				<ul>
<?php
$posttags = get_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></li>';
}
}
?>
</ul>
			</dd>
		</dl>
	</div>
</section>
</div>



