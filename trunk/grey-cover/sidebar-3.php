<div id="widget-right" class="widget-inner">
  <ul>
    <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(3)):else: ?>
    <?php wp_list_pages('depth=3&title_li=<h2>页面</h2>');?>
    <?php get_links_list();?>
    <li class="widget">
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
<!--#widget-right ending-->