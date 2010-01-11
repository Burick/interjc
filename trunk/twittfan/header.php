<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title('|', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/ie6.js"></script>
<![endif]-->


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
</head>
<body>
<div id="wrap">
<div id="header">
  <ul id="header_page">
    <?php wp_register(); ?>
    <li>
      <?php wp_loginout(); ?>
    </li>
    <?php wp_meta(); ?>
  </ul>
  <h1><a href="<?php bloginfo('url');?>">
    <?php bloginfo('name');?>
    </a></h1>
  <p>
    <?php bloginfo('description');?>
  </p>
</div>
<br class="clear" />
