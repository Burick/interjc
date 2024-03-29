<?php $blogOption = get_option('shadowblue_options'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<link rel="canonical" href="<?php bloginfo('url');?>" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/jquery.plugins.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript.js"></script>
<?php if ( is_singular() && $blogOption['ajax_comment']=='on' ){ ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/comments-ajax.js"></script>
<?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<!--[if lt IE 7]>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/ie6.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" type="text/css" media="screen" />
<![endif]-->
</head>
<body class="<?php bodyClasses();?>" style="height:100%; width:100%; position:relative;">
<div id="top">
  <!--[if IE 6]>
<div id="anti_ie6" <?php if($_COOKIE['closeAnti']==1){echo 'class="hidden"';}?>>
<div class="in">
<span class="warning">Tips: </span><p>尊敬的用户，您正在使用<a href="http://interjc.net/a/anti-ie6">老掉牙的IE 6.0</a>，我们强烈推荐您升级为<a target="_blank"  href="http://docs.google.com/View?id=dg5phkpq_78cd6t5gf8">符合Web标准的浏览器</a>，更快，更好，更安全！<a href="http://www.microsoft.com/china/windows/internet-explorer/">IE8下载</a></p>
<a href="#" title="关闭后一周内不再显示" class="close">X</a>
</div>
</div>
  <![endif]-->
  <div class="in">
    <div id="top-page">
      <ul>
        <li class="page_item <?php if(is_home()){echo 'current_page_item';}?>"><a href="<?php bloginfo('url');?>">首页</a></li>
        <?php wp_list_pages('depth=0&title_li=');?>
      </ul>
    </div><!--/top-page-->
    <div id="top-sns">
    <ul>
    <li><a href="<?php if($blogOption['top_sns_feed']!=''){ echo $blogOption['top_sns_feed']; }else{bloginfo('rss2_url');}?>" class="feed" title="订阅本站">Feed</a></li>
    <li><a href="mailto:<?php if($blogOption['top_sns_email']!=''){ echo $blogOption['top_sns_email']; } else { bloginfo('admin_email');} ?>" class="email" title="邮箱">Email</a></li>
    <?php if($blogOption['top_sns_facebook']!=''){ ?><li><a href="<?php echo $blogOption['top_sns_facebook'];?>" class="facebook" title="Facebook" rel="external">Facebook</a></li><?php } ?>
    <?php if($blogOption['top_sns_twitter']!=''){ ?><li><a href="<?php echo $blogOption['top_sns_twitter'];?>" class="twitter" title="Follow me via Twitter" rel="external">Twitter</a></li><?php } ?>
    </ul>
    </div><!--/top-sns-->
  </div>
  <!--/.in-->
</div>
<!--/top-->
<div id="wrap">
  <div id="header" class="solo">
    <div class="title">
      <div class="logo"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></div>
      <div class="text">
        <h1><a href="<?php bloginfo('url');?>">
          <?php bloginfo('name');?>
          </a></h1>
        <p>
          <?php bloginfo('description');?>
        </p>
      </div>
      <!--.text-->
    </div>
    <!--.title-->
    <div class="advertisement" >
    <?php if($blogOption['ad_type']!='none'){ include (TEMPLATEPATH . '/ad/ad_468_60.php');} ?>
    </div>
  </div>
  <!--/header-->