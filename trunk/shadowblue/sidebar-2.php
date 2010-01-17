<div id="sidebar-2" class="sidebar footbar">
    <ul class="top-level">
        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(2)):else: ?>
        <?php wp_list_pages('depth=3&title_li=<h2>页面</h2>');?>
        <?php endif;?>
    </ul>
</div>
