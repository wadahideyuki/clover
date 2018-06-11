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
	<p><a href="/">クローバー（ホーム）</a>&gt; <span>キャスト紹介</span></p>
</section>
<div id="page" class="site">
	<div class="site-inner">

		<!-- .site-header -->

		<div id="content" class="site-content">
<section class="">
	<div class="inner">
		<h1 class="ttl2">
			<div>
				<span>キャスト紹介</span>
				<small>Cast</small>
			</div>
		</h1>
    </div>
  </section>

<div class="bgGrey1">
<section class="main">
	<div class="in">
		<div class="inner spP0">
			<div class="bg">
				<h2>
					<div>
						<span>
							誰とするか？<br>
							全員経営で作る<br>
							究極のサービス。
						</span>
					</div>
				</h2>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="inner sz2">
		<dl class="staffTags">
			<dt>
				<span>#</span>
				<h3>ハッシュタグから探す<br>クローバーのキャスト</h3>
			</dt>
			<dd><ul>
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

