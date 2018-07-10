<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article class="news-list" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
  <a href="<?php the_permalink(); ?>">
  <div class="photobox">
    <?php if(has_post_thumbnail()): ?> 
  <?php
		// Post thumbnail.
		the_post_thumbnail( array( 400, 280 ) );
	?>
    
	<?php else : ?>
    No image
   
	<?php endif; ?> 
</div>
    <em><?php the_time('Y/m/d'); ?></em>
		<p><?php
				the_title( '<p></p>' );
		?></p>
	<!--?php the_excerpt(); ?-->
</a>


</article><!-- #post-## -->
