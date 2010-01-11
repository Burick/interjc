<?php get_header(); ?>
    <div id="main">
<?php get_sidebar(); ?>
        <div id="content">
            <?php if(have_posts()):?>
            <?php while(have_posts()):the_post();?>
            <div class="story" id="post-<?php the_ID();?>">
                <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>">
                    <?php the_title();?>
                    </a></h2>
                <p class="author">
                    <?php the_time('Y.m.d'); ?>
                    by
                    <?php the_author() ?><?php printf(__(' under %s', 'interjc'), get_the_category_list(', ')); ?>
                </p>
                <div class="entry">
                    <?php the_content();?>
                    <p class="postmetadata">
                        <?php the_tags('Tags: ', ', ', ' |'); ?>
                        <?php edit_post_link('编辑', '', ''); ?>
                    </p>
                </div>
            </div>
			<div id="comments_template">
            <?php comments_template(); ?>
            </div>
            <?php endwhile;?>
            <div class="navigation">
                <?php posts_nav_link('...','上一页','下一页');?>
            </div>
            <?php else:?>
            <div class="story">
                <h2>什么也没有..</h2>
            </div>
            <?php endif;?>
        </div>
    </div>
<?php get_footer();?>