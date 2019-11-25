<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();

$sidebarcolumns = (is_active_sidebar('right-sidebar') ? 3 : 0);

?>

<main id="site-content" role="main" class="container content-wrapper site-content">
	<div class="row">
		<div class="col-md-<?php echo 12-$sidebarcolumns ?>">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			
			<?php

			if ( have_posts() ) {

				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );
				}
			}

			?>
		</div>
		<div class="col-md-<?php echo $sidebarcolumns ?> rightsidebar">
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div>
	</div>

</main><!-- #site-content -->

<?php get_footer(); ?>
