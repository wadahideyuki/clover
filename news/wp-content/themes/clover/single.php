<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<section id="pankz">
	<p><a href="/">クローバー（ホーム）</a>&gt; <span>
    <?php if ( in_category(array('media')) ) : ?> メディア掲載<?php endif; ?>
    <?php if ( in_category(array('newsrelease')) ) : ?> ニュースリリース<?php endif; ?>
    </span></p>
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

	<div id="primary" class="content-area bgGrey1 detail-box">
		<main id="main" class="cont-box" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content-page', get_post_format() );


		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
    
    
    <div class="nav">
    <?PHP
    
    	// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
    
    ?>
    </div>
    
	</div><!-- .content-area -->

<?php
include('../common/inc/footer.inc');
?>
