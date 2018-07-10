<?php
/*
Template Name: TOP用リスト
*/
?>
<?php
global $post;
$args = array( 'posts_per_page' => 4 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) {
setup_postdata($post);
?>
	<li class="liItem">
					<a href="<?php the_permalink() ?>">
						<dl>
							<dt><?php if(has_post_thumbnail()): ?>
<?php the_post_thumbnail('index_thumbnail'); ?>
<?php else: ?>
<img src="/dist/images/noimage.gif" alt="no image">
<?php endif; ?></dt>
							<dd>
								<small><?php the_time('Y.m.d') ?></small>
								<p><?php the_title(); ?></p>
							</dd>
						</dl>
					</a>
				</li>
<?php
}
wp_reset_postdata();
?>


			
			