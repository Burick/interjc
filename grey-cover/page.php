<?php get_header(); ?>
<?php get_sidebar(1); ?>

<div id="main">
  <?php include (TEMPLATEPATH . '/nav.php'); ?>
  <?php include (TEMPLATEPATH . '/slider.php'); ?>
  <div id="content">
    <div id="content-in">
      <div id="content-inner">
        <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
        <div class="story" id="post-<?php the_ID();?>">
          <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>">
            <?php the_title();?>
            </a></h2>
          <!--<div class="meta">
            <?php echo get_avatar( get_the_author_email(), 40 ); ?>
            <p>
              <?php the_author() ?>
              [
              <?php the_category(',') ?>
              ]</p>
            <p>
              <?php the_time('Y.m.d') ?>
            </p>
          </div>-->
          <div class="entry">
            <div class="entry-content">
              <?php the_content('<br /><span class="readmore">阅读全文&raquo;</span>');?>
            </div>
            <br class="clear" />
            <?php link_pages('<p class="page_nav"><strong>Pages:</strong>','</p>', 
'number'); ?>
            <p class="postmetadata">
              <?php edit_post_link('编辑页面', '', ''); ?>
            </p>
          </div>
        </div>
        <?php comments_template(); ?>
        <?php endwhile;?>
        <?php else:?>
        <div class="story">
          <h2>什么也没有..</h2>
        </div>
        <?php endif;?>
      </div>
      <!--#content-inner ending-->
    </div>
    <!--#content-in ending-->
  </div>
  <!--#content ending-->
</div>
<!--#main ending-->
<?php get_footer(); ?>
