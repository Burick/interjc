<div id="sidebar-3" class="sidebar footbar">
    <ul class="top-level">
        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(3)):else: ?>
        <?php get_links_list();?>
        <li id="calendar" class="widget widget_calendar">
          <h2>日历</h2>
          <?php get_calendar(); ?>
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
