<?php
/**
 * Template part for displaying posts
 *
 */
?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <div class="entry-content">
        <?php
        /* translators: %s: Name of current post */
        the_content(sprintf(
            __('Tiếp tục đọc <span class="screen-reader-text"> "%s"</span>', 'laptrinhcomvn'),
            get_the_title()
        ));

        ?>

        <div class="comment-wrapper">
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
        </div>


        <div class="post_list_tags">
            <span class="post_list_tags_label"><i class="fa fa-tags"></i> </span>
            <?php
            $post_tags = wp_get_post_tags( get_the_ID() );
            foreach ($post_tags as $t) {
                ?>
                <a href="<?php echo get_tag_link($t) ?>"><?php echo $t->name ?></a>
                <span class="post_list_divider">,</span>
                <?php
            }
            ?>
        </div>

    </div>

</article>
<div class="col-xs-12 col-sm-6 text-right">
    <?php previous_post_link('&laquo; %link', '%title', true); ?>
</div>
<div class="col-xs-12 col-sm-6 text-left">
    <?php next_post_link('%link &raquo;', '%title', true); ?>
</div>