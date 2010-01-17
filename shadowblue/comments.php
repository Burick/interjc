<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('请不要直接刷新此页，谢谢!');
	
	if ( post_password_required() ) { ?>

<p class="nocomments">本文被密码保护. 请输入密码.</p>
<?php
		return;
	}
?>
<!-- You can start editing here. -->
<div id="comment-template" class="solo">
<?php if ( have_comments() ) : ?>

<h3 id="comments">
  <?php comments_number('没有评论', '1 条评论','% 条评论');?>
</h3>
<div class="navigation">
  <div class="alignleft">
    <?php previous_comments_link() ?>
  </div>
  <div class="alignright">
    <?php next_comments_link() ?>
  </div>
</div>
<ol class="commentlist">
  <?php wp_list_comments('type=comment&callback=interjc_comment'); ?>
</ol>
<ol class="pingslist">
  <?php wp_list_comments('type=pings'); ?>
</ol>
<div class="navigation">
  <div class="alignleft">
    <?php previous_comments_link() ?>
  </div>
  <div class="alignright">
    <?php next_comments_link() ?>
  </div>
</div>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ( comments_open() ) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments">评论已关闭</p>
<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
  <div class="respond-in">
    <div class="cancel-comment-reply"> <small>
      <?php cancel_comment_reply_link(); ?>
      </small> </div>
    <h3>
      <?php comment_form_title( '评论', '对%s的评论' ); ?>
    </h3>
    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p>您必须先 <a href="<?php echo wp_login_url( get_permalink() ); ?>">登录</a>才能添加评论.</p>
    <?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( is_user_logged_in() ) : ?>
      <p>欢迎回来， <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> ！ <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">注销 &raquo;</a></p>
      <?php else : ?>
      <p class="welcome-back">欢迎回来，<strong></strong>！&nbsp;(<a href="#" class="comment-reset"> 更改用户 </a>)</p>
      <p class="welcome-new">
        <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php //if ($req) echo "aria-required='true'"; ?> />
        <label for="author">名字
          <?php if ($req) echo "*"; ?>
        </label>
      </p>
      <p class="welcome-new">
        <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php //if ($req) echo "aria-required='true'"; ?> />
        <label for="email">邮箱(不会公布)
          <?php if ($req) echo "*"; ?>
        </label>
      </p>
      <p class="welcome-new">
        <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
        <label for="url">网址</label>
      </p>
      <?php endif; ?>
      <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
      <p>
        <textarea name="comment" id="comment" cols="50%" rows="10" tabindex="4"></textarea>
      </p>
      <p>
        <input name="submit" type="submit" id="submit" class="comment_submit" tabindex="5" value="提交" />
        <span class="comment_submit">输入后可按 Ctrl+Enter 提交评论.</span>
        <?php comment_id_fields(); ?>
      </p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
    <?php endif; // If registration required and not logged in ?>
  </div>
</div></div>
<?php endif; // if you delete this the sky will fall on your head ?>
