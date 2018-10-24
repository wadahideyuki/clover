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
<div class="photoBox"><?php 
$image = get_field('listThumbnail');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
}
?></div>
<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
    <span class="pos"><?php echo esc_html( $post->KATAGAKI ); ?></span>
	<div class="entry-content">
		<?php
		the_excerpt(); //抜粋を表示する
		?>
	</div><!-- .entry-content -->
</a>

</li><!-- #post-## -->
