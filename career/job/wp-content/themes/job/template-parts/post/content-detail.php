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
    <div class="jobDtlMain">
      <div class="photo photoslick">
        <ul>
<?php if(get_field('job-photo1')): // 1枚目がある場合 ?>
          <li><img src="<?php the_field('job-photo1'); ?>"></li>
  <?php endif; ?>
<?php if(get_field('job-photo2')): // 2枚目がある場合 ?>
          <li><img src="<?php the_field('job-photo2'); ?>"></li>
  <?php endif; ?>
<?php if(get_field('job-photo3')): // 3枚目がある場合 ?>
          <li><img src="<?php the_field('job-photo3'); ?>"></li>
  <?php endif; ?>
          
          
        </ul>
        
      </div>
      <div class="txt">
        <div class="btnEntry topbtn">
          <a href="/career/job/entry/index.php?jobtitle=<?php the_title(); ?>&office=<?php the_field('office'); ?>">エントリーはこちら</a>
        </div>
        <?php
          /* translators: %s: Name of current post */
          the_content( sprintf(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
            get_the_title()
          ) );
        ?>
        <dl>
          <dt>【募集職種】</dt>
          <dd><?php the_field('jobtype'); ?></dd>
          <dt>【勤務地】</dt>
          <dd><?php the_field('office'); ?><br><?php the_field('area'); ?></dd>
          <dt>【給与】</dt>
          <dd><?php the_field('pay1'); ?><br><?php the_field('pay2'); ?></dd>
          <dt>【雇用形態】</dt>
          <dd>
            <?php 
              $cats = get_the_category();
              $cat = $cats[0];
              if($cat->parent){
                $parent = get_category($cat->parent);
                echo $parent->cat_name;
              }else{
                echo $cat->cat_name;
              }
            ?>
          </dd>
        </dl>
      </div>
    </div>


    <h2>募集要項</h2>
    <div class="job-table">
      <dl>
        <dt>仕事内容</dt>
        <dd>
          <?php the_field('naiyou'); ?>
        </dd>
      </dl>
      <dl>
        <dt>仕事の魅力</dt>
        <dd>
          <?php the_field('miryoku'); ?>
        </dd>
      </dl>
      <dl>
        <dt>給与</dt>
        <dd>
          <?php the_field('pay1'); ?><br><?php the_field('pay2'); ?>
        </dd>
      </dl>
      <dl>
        <dt>勤務地</dt>
        <dd>
          <?php the_field('office'); ?><br><?php the_field('area'); ?>
        </dd>
      </dl>
      <dl>
        <dt>アクセス</dt>
        <dd>
          <?php the_field('moyori'); ?>
        </dd>
      </dl>
      <dl>
        <dt>資　格</dt>
        <dd>
          <?php the_field('license'); ?>
        </dd>
      </dl>
      <dl>
        <dt>時　間
        </dt>
        <dd>
          <?php the_field('worktime'); ?>
        </dd>
      </dl>
      <dl>
        <dt>休　日</dt>
        <dd>
          <?php the_field('holiday'); ?>
        </dd>
      </dl>
      <dl>
        <dt>待　遇 </dt>
        <dd>
          <?php the_field('treatment'); ?>
        </dd>
      </dl>
      <dl>
        <dt>求める人物像</dt>
        <dd>
          <?php the_field('person'); ?>
        </dd>
      </dl>
      <dl>
        <dt>応募方法</dt>
        <dd>
          <?php the_field('how'); ?>
        </dd>
      </dl>
    </div>

    <div class="btnEntry">
      <a href="/career/job/entry/index.php?jobtitle=<?php the_title(); ?>&office=<?php the_field('office'); ?>">エントリーはこちら</a>
    </div>

  </div><!-- .entry-content -->


</article><!-- #post-## -->
