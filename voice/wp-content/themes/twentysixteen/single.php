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

		
    <ul class="cast-list" style="display: none;">
      
    <?php
    global $post;
    $args = array( 'posts_per_page' => 8 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) {
        setup_postdata($post);
        ?>
 
        <li class="blog-card">
                <p class="photoThumb">
                    <a href="<?php the_permalink() ?>">
 
 
<div class="photoBox"><?php the_post_thumbnail("small_thumbnail"); ?></div>
                        
<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
 
 
                    </a>
                </p>
        </li>
        <?php
        }
        wp_reset_postdata();
        ?>
 

    </ul>
    

		<dl class="staffTags">
			<dt>
				<span>#</span>
				<h3>ハッシュタグから探す<br>お客様の声</h3>
			</dt>
			<dd><ul>
<?php
$posttags = get_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></li>';
}
}
?>
</ul>
			</dd>
		</dl>
    
    
	</div>
    
    
</section>

  <?php
include('../common/inc/footer.inc');
?>