<div id="sidebar-4" class="sidebar footbar">
    <ul class="top-level">
        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(4)):else: ?>
        <li class="widget widget_archive">
            <h2>存档</h2>
            <ul>
                <?php wp_get_archives('type=monthly');?>
            </ul>
        </li>
        <?php endif;?>
    </ul>
</div>