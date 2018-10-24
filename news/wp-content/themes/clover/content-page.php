<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
    
    <h1>
    <em><?php the_time('Y/m/d'); ?></em>
		<?php the_title(); ?></h1>
	</header><!-- .entry-header -->

  <div class="detailPhoto">
  <?php
		// Post thumbnail.
		the_post_thumbnail();
	?>

  </div>
  
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
<?php // ファイルの表示
$file = get_field('mediapdf'); // フィールド名を指定
    ?>
    <?php if($file) : ?> 
<p class="pdfIcon"><a href="<?php echo $file['url']; ?>" >PDFファイル</a></p>
    
<?php endif; ?>
    
    
	</div><!-- .entry-content -->

</article><!-- #post-## -->
