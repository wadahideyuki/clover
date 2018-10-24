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
  <h1 class="entry-header">
    <?php the_title(); ?>
  </h1><!-- .entry-header -->


  <div class="entry-content">
    <div class="photo">
      <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
    </div>
    <div class="txt">
      <?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		?>
    </div>
    <h2>募集要項</h2>
    <dl class="job-table">
      <dt>募集職種</dt>
      <dd>
        <?php the_field('jobtype'); ?>
      </dd>
      <dt>給与</dt>
      <dd>
        <?php the_field('pay1'); ?><br>
        <?php the_field('pay2'); ?>
      </dd>
      <dt>勤務地 </dt>
      <dd>
        <?php the_field('office'); ?><br>
        <?php the_field('area'); ?>
      </dd>
      <dt>資　格</dt>
      <dd>
        <?php the_field('license'); ?>
      </dd>
      <dt>時　間
      </dt>
      <dd>
        <?php the_field('worktime'); ?>
      </dd>
      <dt>休　日</dt>
      <dd>
        <?php the_field('holiday'); ?>
      </dd>
      <dt>待　遇 </dt>
      <dd>
        <?php the_field('treetment'); ?>
      </dd>
      <dt>応募方法</dt>
      <dd>
        <?php the_field('how'); ?>
      </dd>


    </dl>

    <a href="/career/job/entry/index.php?jobtitle=<?php the_title(); ?>&?office=<?php the_field('office'); ?>">エントリー</a>

  </div><!-- .entry-content -->


</article><!-- #post-## -->
