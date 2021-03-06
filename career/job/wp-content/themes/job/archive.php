<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
<div class="bgGrey1">
  <div class="list-page">
	<div id="primary" class="content-area">

      <?php if (is_category()) { ?>
      <h1 class="job-list-title">
          <?php
          if(1 == 2){
            $cats = get_the_category();
            foreach($cats as $cat):
              if($cat->parent) echo $cat->cat_name;
            endforeach;
          }
          single_cat_title();
          ?>
        </h1>


      <main id="main" class="site-main job-list" role="main">
		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
      <?php } ?>
      
      <?php if (is_tag()) { ?>
      <h1 class="job-list-title">
          tag
        </h1>
      <?php } ?>
      
      
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
    </div>


</div>
</div><!-- .wrap -->

<?php get_footer();
