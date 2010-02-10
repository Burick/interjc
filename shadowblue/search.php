<?php get_header(); ?>

<div id="container">
  <div class="in">
    <div class="inner solo">
      <?php include (TEMPLATEPATH . '/nav.php'); ?>
      <div class="line-x"></div>
      <!--/.line-x-->
      <div id="main">
        <div class="main-in solo">
          <div id="content">
            <?php if(have_posts()):?>
            <?php while(have_posts()):the_post();?>
            <div class="story solo <?php if( is_single() || is_page() ) echo 'only-story';?>" id="post-<?php the_ID();?>">
              <div class="story-in solo">
                <div class="meta">
                  <div class="avatar">
                    <?php
                      if(get_custom_meta('avatar')){
                        echo '<img width="40" height="40" class="avatar avatar-40 photo" src="', get_custom_meta('avatar'), '" alt=""/>';
                      }else{
                        echo get_avatar( get_the_author_email(), 40 ); 
                      } 
                    ?>
                  </div>
                  <p>
                    <?php the_author() ?>
                    <?php the_time('Y.m.d') ?>
                  </p>
                  <p>
                    <?php the_category('<br />') ?>
                  </p>
                  <a href="#" class="switch-sidebar"></a> </div>
                <div class="entry">
                  <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>">
                    <?php the_title();?>
                    </a></h2>
                  <div class="entry-text solo">
                    <?php the_excerpt();?>
                  </div>
                  <br class="clear" />
                </div>
              </div>
              <p class="postmetadata">
                <?php the_tags('Tags: ', ', ', ' | '); ?>
                <?php edit_post_link('编辑', '', ' | '); ?>
                <?php comments_popup_link('评论 &#187;', '1 评论 &#187;','% 评论 &#187;', '', '<!--评论关闭-->' ); ?>
              </p>
            </div>
            <?php endwhile;?>
            <div class="navigation">
              <?php if (function_exists('postbar')){
                postbar();
            }else{
                posts_nav_link(' ','<span class="nav_prev">&laquo;上一页</span>','<span class="nav_next">下一页&raquo;</span>');
            } ?>
            </div>
            <?php else:?>
            <div class="story">
              <h2>什么也没有..</h2>
            </div>
            <?php endif;?>
          </div>
          <!--/content-->
          <div id="sidebar">
            <?php get_sidebar(1); ?>
          </div>
          <!--/sidebar-->
        </div>
        <!--/.main-in-->
      </div>
      <!--/main-->
      <?php include (TEMPLATEPATH . '/footbar.php'); ?>
    </div>
    <!--/.inner-->
  </div>
  <!--/.in-->
</div>
<!--/container-->
<?php get_footer(); ?>
