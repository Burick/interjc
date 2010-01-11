<div id="widget-left" class="widget-inner">
  <ul>
    <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(2)):else: ?>
    <li id="calendar" class="widget">
      <h2>日历</h2>
      <?php get_calendar(); ?>
    </li>
    <li class="widget">
      <h2>存档</h2>
      <ul>
        <?php wp_get_archives('type=monthly');?>
      </ul>
    </li>
    <?php endif;?>
  </ul>
</div>
<!--#widget-left ending-->
