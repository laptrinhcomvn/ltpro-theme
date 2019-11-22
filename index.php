<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package laptrinhcomvn
 */

get_header();
?>


<div class="container-fluid p-0 content-wrapper">

    <section id="content" class="site-content" role="main">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); 

                get_template_part( 'content', get_post_format() );

            endwhile; ?>

        <?php endif; ?>

    </section>

    
</div>

<?php
get_footer();
