<div id="sidebar-1" class="sidebar">
    <ul class="top-level">
        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(1)):else: ?>
        <li id="calendar" class="widget widget_calendar">
          <?php get_calendar(); ?>
        </li>
        <li id="search" class="widget">
            <?php include(TEMPLATEPATH . '/searchform.php'); ?>
        </li>
        <li id="postbypost" class="widget widget_recent_entries">
          <h2>最新文章</h2>
          <ul>
            <?php wp_get_archives('type=postbypost&limit=10'); ?>
          </ul>
        </li>
        <li>
          <h2>标签</h2>
          <ul>
            <?php wp_tag_cloud('smallest=8&largest=22'); ?>
          </ul>
        </li>
        <li class="widget widget_meta">
            <h2>选项</h2>
            <ul>
                <?php wp_register(); ?>
                <li>
                    <?php wp_loginout(); ?>
                </li>
                <?php wp_meta(); ?>
            </ul>
        </li>
        <?php endif;?>
    </ul>
</div>