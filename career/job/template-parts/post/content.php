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
    if(is_single()):
		  the_title( '<h1 class="entry-title">', '</h1>' );
		elseif(is_front_page() && is_home()):
		  the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		else: ?>

  <section class="list-item">
    
       <?php the_field('city'); ?>
    <div class="job-photo"><img src="<?php the_field('job-photo1'); ?>"></div>
    <div class="job-table">
      <h3><?php the_field('office'); ?></h3>
    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      <dl>
        <dt>勤務地：</dt>
        <dd><?php the_field('area'); ?>
        </dd>
      </dl>
      <dl>
        <dt>給与：</dt>
        <dd>
          <?php the_field('pay1'); ?>
        </dd>
      </dl>
      <dl>
        <dt>雇用形態：</dt>
        <dd>
          <?php 
$ch_cat = get_category($cat);
if ($ch_cat->parent) {
  $parent = get_category($ch_cat->parent);
  echo esc_attr($parent->cat_name);
}
?>
        </dd>
      </dl>
    </div>
    <ul>
      <li><a class="btn-detail" href="<?php esc_url( the_permalink() ) ?>" rel="bookmark">詳細を見る</a></li>
      <li><a class="btn-entry" href="/career/job/entry/index.php?jobtitle=<?php the_title(); ?>&office=<?php the_field('office'); ?>">エントリー</a></li>

    </ul>

  </section>
  <?php endif; ?>




</article><!-- #post-## -->
