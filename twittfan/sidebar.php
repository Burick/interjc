        <div id="sidebar">
            <ul>
                <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar()):else: ?>
                <li id="calendar">
                    <h2>日历</h2>
                    <?php get_calendar(); ?>
                </li>
                <li id="search">
                    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                </li>
                <?php wp_list_pages('depth=3&title_li=<h2>页面</h2>');?>
                <li>
                    <h2>存档</h2>
                    <ul>
                        <?php wp_get_archives('type=monthly');?>
                    </ul>
                </li>
                <?php get_links_list();?>
                <li>
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