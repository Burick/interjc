<div id="widget-box">
  <ul>
    <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(1)):else: ?>
    <li class="widget widget-about">
      <h2>关于</h2>
      <p>感谢你的浏览，欢迎<a href="<?php bloginfo('rss2_url'); ?>">订阅本站</a> ，如有意见或建议，欢迎<a href="<?php bloginfo('admin_email'); ?>">email</a>。</p>
    </li>
    <li class="widget widget_recent_entries">
      <h2>新文</h2>
      <ul>
        <?php wp_get_archives('type=postbypost&limit=10&format=html&before=<li>&after=</li>&format=custom'); ?>
      </ul>
    </li>
    <li id="search" class="widget">
      <?php include(TEMPLATEPATH . '/searchform.php'); ?>
    </li>
    <?php wp_list_categories('title_li=<h2>分类</h2>'); ?>
    <?php endif;?>
  </ul>
</div>
<!--#widget-box ending-->
</div>
<!--#sidebar ending-->
</div>
<!--#sidebar-box ending-->
</div>
<!--#sidebar-boxer ending-->
