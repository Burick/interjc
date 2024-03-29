<div class="comments-template">
  <div class="comments-templates">
    <?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('请不要直接刷新此页. 谢谢!');

	if ( post_password_required() ) { ?>
    <p class="nocomments">想评论，留下密码.</p>
    <?php
		return;
	}
?>
    <!-- You can start editing here. -->
    <?php if ( have_comments() ) : ?>
    <h3 id="comments">
      <?php comments_number('没有评论', '有1条评论', '% 条评论' );?>
    </h3>
    <!--<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>-->
    <ol class="commentlist">
      <?php foreach ($comments as $comment) : ?>
      <li class="comment_li <?php global $comment; if ($comment->comment_author_email == get_the_author_email()) echo 'author_comment';?>" id="comment-<?php comment_ID() ?>"> <?php echo get_avatar( $comment, 32 ); ?> <div class="comment-meta"><strong class="commentmetadata">
        <?php comment_author_link() ?>
        </strong><span class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title="">
        <?php comment_date('Y.m.d') ?>
        <?php comment_time() ?>
        </a>
        <?php edit_comment_link('e','',''); ?>
        <?php if ($comment->comment_approved == '0') : ?>
        <em>您的评论正在等待审核.</em>
        <?php endif; ?>
        </span></div>
        <br class="clear" />
        <div class="comment_text">
          <?php comment_text() ?>
        </div>
      </li>
      <?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>
      <?php endforeach; /* end for each comment */ ?>
    </ol>
    <div class="SRBacks">
      <script type="text/javascript" src="http://sr.ju690.com/static/script/SRbacks.js"></script>
    </div>
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
    <p class="nocomments">评论已关闭.</p>
    <?php endif; ?>
    <?php endif; ?>
    <?php if ( comments_open() ) : ?>
    <div id="respond">
      <h3>
        <?php comment_form_title( '评论', '对%s的评论' ); ?>
      </h3>
      <div class="cancel-comment-reply"> <small>
        <?php cancel_comment_reply_link(); ?>
        </small> </div>
      <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
      <p>您必须先 <a href="<?php echo wp_login_url( get_permalink() ); ?>">登录</a>才能添加评论.</p>
      <?php else : ?>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if ( is_user_logged_in() ) : ?>
        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">注销 &raquo;</a></p>
        <?php else : ?>
        <p>
          <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php //if ($req) echo "aria-required='true'"; ?> />
          <label for="author">名字
            <?php if ($req) echo "*"; ?>
          </label>
        </p>
        <p>
          <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php //if ($req) echo "aria-required='true'"; ?> />
          <label for="email">邮箱(不会公布)
            <?php if ($req) echo "*"; ?>
          </label>
        </p>
        <p>
          <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
          <label for="url">网址</label>
        </p>
        <?php endif; ?>
        <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
        <p>
          <textarea name="comment" id="comment" cols="50%" rows="10" tabindex="4" onkeydown="if(event.ctrlKey&amp;&amp;event.keyCode==13)
{document.getElementById('submit').click();return false};"></textarea>
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
    <?php endif; // if you delete this the sky will fall on your head ?>
  </div>
</div>
