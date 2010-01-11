<form method="get" id="searchform" class="searchform" action="<?php bloginfo('home'); ?>/">
<div>
	<input type="text" class="searchform-text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" />
	<input type="submit" class="searchform-submit" id="searchsubmit" value="搜索" />
</div>
</form>