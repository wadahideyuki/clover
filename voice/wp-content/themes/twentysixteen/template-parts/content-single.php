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
  <p><a href="/">クローバー（ホーム）</a>&gt; <span><a href="/voice/">お客様の声</a></span>&gt; <span><?php the_title(); ?></span></p>
</section>
<div id="page" class="site">
	<div class="site-inner">

	
		<!-- .site-header -->

		<div id="content" class="site-content">
      
<section class="">
	<div class="inner">
		<h1 class="ttl2">
			<div>
				<span>お客様の声</span>
				<small>Voice</small>
			</div>
		</h1>
    </div>
  <div class="lowLinks">
		<a href="/dayservice/index.php">デイサービスTOP</a>
		<a href="/dayservice/care/index.php">クローバーの介護観</a>
		<a href="/dayservice/index.php#office">事業所一覧</a>
		<a href="/dayservice/day/index.php">クローバーの1日・利用料金</a>
		<a href="http://day-clover.com/voice/" class="cur">お客様の声</a>
		<a href="/dayservice/qa/index.php">よくある質問</a>
	</div>
  </section>
<div  class="cast-detail" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="content bgGrey1">
	<div class="inner sz2 ">
		<div class="profBox">
			<div class="img">
				<?php twentysixteen_post_thumbnail(); ?>
				<div class="name">
					<dl>
						<dd><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></dd>
						<dt><?php echo esc_html( $post->POSITION ); ?></dt>
					</dl>
				</div>
			</div>
		</div>

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
  
</div>



