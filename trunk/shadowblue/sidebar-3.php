<div id="sidebar-3" class="sidebar footbar">
    <ul class="top-level">
        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(3)):else: ?>
        <?php get_links_list();?>
        <li id="calendar" class="widget widget_calendar">
          <?php get_calendar(); ?>
        </li>
        <?php endif;?>
    </ul>
</div>
