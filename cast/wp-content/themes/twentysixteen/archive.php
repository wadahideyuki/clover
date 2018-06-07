<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
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
		<h2 class="ttl2">
			<div>
				<span>キャスト紹介</span>
				<small>Cast</small>
			</div>
		</h2>
	</div>
</section>
      
<div class="bgGrey1">
			<header class="page-header">
				<h2 class="tag-title">【<?php
					the_archive_title( );
				?>】のついたスタッフ</h2>
			</header><!-- .page-header -->
      
<div  class="cast-detail">

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
</div>
      
      

  <?php
include('../common/inc/footer.inc');
?>