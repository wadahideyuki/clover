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
				<div class="name">
					<dl>
						<!--<dt>役職が入るマネージャー</dt>--->
						<dd><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></dd>
					</dl>
				</div>
			</div>
			<dl class="txt">
				<dt>Profile</dt>
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



