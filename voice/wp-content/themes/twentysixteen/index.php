<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section id="pankz">
	<p><a href="/">クローバー（ホーム）</a>&gt; <span>お客様の声</span></p>
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

<div class="bgGrey1">

<section class="content">
	<div class="inner sz2">

		
    <ul class="cast-list">
      
		<?php if ( have_posts() ) : ?>


			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-page', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

    </ul>
	</div>
    
    
</section>
</div>


  <?php
include('../common/inc/footer.inc');
?>

