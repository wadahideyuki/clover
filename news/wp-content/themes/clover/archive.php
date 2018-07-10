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
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<section id="pankz">
	<p><a href="/">クローバー（ホーム）</a>
    <?php if ( in_category(array('media')) ) : ?> &gt; <a href="/about/">会社情報</a> &gt; <span>メディア掲載</span><?php endif; ?>
    <?php if ( in_category(array('newsrelease')) ) : ?> &gt; <span> ニュースリリース</span><?php endif; ?>
    </p>
</section>
<section class="">
	<div class="inner">
		<h1 class="ttl2">
			<div>
        <?php if ( in_category(array('media')) ) : ?> 
				<span>メディア掲載</span>
				<small>Media</small>
<?php endif; ?>
        <?php if ( in_category(array('newsrelease')) ) : ?> 
				<span>ニュースリリース</span>
				<small>NEWS</small>
<?php endif; ?>
        
        
			</div>
		</h1>
    </div>
  </section>

	<div id="primary" class="content-area bgGrey1">
		<main id="main" class="news-inner" >

		<?php if ( have_posts() ) : ?>


			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
    
    <?PHP 
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
    ?>
	</section><!-- .content-area -->

<?php
include('../common/inc/footer.inc');
?>

