<div id="sidebar">
    <ul>
        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar()):else: ?>
        <li id="calendar" class="widget">
            <h3>日历</h3>
            <?php get_calendar(); ?>
        </li>
        <li id="search" class="widget">
            <?php include(TEMPLATEPATH . '/searchform.php'); ?>
        </li>
        <?php wp_list_pages('depth=3&title_li=<h2>页面</h2>');?>
        <li class="widget">
            <h3>存档</h3>
            <ul>
                <?php wp_get_archives('type=monthly');?>
            </ul>
        </li>
        <?php get_links_list();?>
        <li class="widget">
            <h3>选项</h3>
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
