<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content-single', 'single' );

			// End of the loop.
		endwhile;
		?>
<section class="content">
	<div class="inner sz2">

		
    <ul class="cast-list">
      
    <?php
    global $post;
    $args = array( 'posts_per_page' => 8 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) {
        setup_postdata($post);
        ?>
 
        <li class="blog-card">
            <figure>
                <p class="photoThumb">
                    <a href="<?php the_permalink() ?>">
 
 
<div class="photoBox"><?php the_post_thumbnail("small_thumbnail"); ?></div>
                        
<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
 
 
                    </a>
                </p>
            </figure>
        </li>
        <?php
        }
        wp_reset_postdata();
        ?>
 

    </ul>
	</div>
    
    
</section>

  <?php
include('../common/inc/footer.inc');
?>