<?php if (!is_single() && !is_page() && !is_search()) { ?>
<div id="slider">
  <div id="slider-box">
    <div id="slider-boxer">
      <ul>
        <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
        <li class="slider-li">
          <div class="slider-story" id="post-<?php the_ID();?>">
            <div class="slider-meta">
              <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>">
                <?php the_title();?>
                </a></h2>
              <p class="slider-postmetadata"> 分类:
                <?php the_category(',') ?>
                |
                <?php edit_post_link('编辑', '', ' | '); ?>
                <?php comments_popup_link('评论 &#187;', '1 评论 &#187;','% 评论 &#187;', '', '<!--评论关闭-->' ); ?>
              </p>
            </div>
            <div class="slider-entry">
              <?php greycover_get_simg();?>
              <div class="slider-entry-content"> <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 400,'&nbsp;&hellip;&hellip;'); ?></div>
              <span class="slider-readmore"><a href="<?php the_permalink();?>">阅读全文&raquo;</a></span> </div>
          </div>
        </li>
        <?php endwhile;?>
        <?php else:?>
        <li class="slider-li">
          <div class="slider-story slider-nothing">
            <h2>什么也没有..</h2>
          </div>
        </li>
        <?php endif;?>
      </ul>
    </div>
  </div>
</div>
<?php };?>
