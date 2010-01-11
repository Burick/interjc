<div id="nav">
  <ul>
  <li id="nav-home" class="<?php if(is_home()) echo 'current_page_item';?>"><a href="<?php bloginfo('url');?>">Home</a></li>
    <?php wp_list_pages('depth=1&title_li=');?>
  </ul>
</div>

