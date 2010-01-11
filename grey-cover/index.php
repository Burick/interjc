<?php get_header(); ?>
<?php get_sidebar(1); ?>

<div id="main">
  <?php include (TEMPLATEPATH . '/nav.php'); ?>
  <?php include (TEMPLATEPATH . '/slider.php'); ?>
  <div id="content">
    <div id="content-in">
      <div id="content-inner">
        <?php get_sidebar(2); ?>
        <?php get_sidebar(3); ?>
      </div>
      <!--#content-inner ending-->
    </div>
    <!--#content-in ending-->
  </div>
  <!--#content ending-->
</div>
<!--#main ending-->
<?php get_footer(); ?>
