<?php
/*
* Template for single page
*/

get_header();

?>

    <div id="content-wrapper" class="container-fluid page-wrapper page page-<?php echo get_post_field('post_name', get_the_ID()) ?> ">

        <?php

        while ( have_posts() ) : the_post();

            get_template_part( 'templates/page', 'content' );

        endwhile; // End of the loop.
        ?>

    </div>

<?php
get_footer();