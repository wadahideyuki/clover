<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php
    if ( 1==2 ) {
      if ( is_single() ) {
        the_title( '<h1 class="entry-title">', '</h1>' );
      } elseif ( is_front_page() && is_home() ) {
        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
      } else {
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      }
    }
		?>

		<?php
    if(is_single()):
		  the_title( '<h1 class="entry-title">', '</h1>' );
		elseif(is_front_page() && is_home()):
		  the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		else: ?>
      <a href="<?php esc_url( the_permalink() ) ?>" rel="bookmark">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <div class="job-table">
          <dl>
            <dt>勤務地：</dt>
            <dd>
              <?php the_field('office'); ?>（<?php the_field('area'); ?>）
            </dd>
          </dl>
          <dl>
            <dt>給与：</dt>
            <dd>
              <?php the_field('pay1'); ?>
            </dd>
          </dl>
        </div>
      </a>
    <?php endif; ?>




</article><!-- #post-## -->
