<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php echo get_permalink(); ?>">
<div class="photoBox"><?php the_post_thumbnail("small_thumbnail"); ?></div>
<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
	
</a>

</li><!-- #post-## -->
