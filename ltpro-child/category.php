<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package laptrinhcomvn
 * @subpackage ltpro-child
 */

get_header();
?>

<?php 
	$archive_title    = '';
	$archive_subtitle = '';
	$sidebarcolumns = (is_active_sidebar('right-sidebar') ? 3 : 0);
?>

<main id="site-content" role="main" class="container content-wrapper site-content">
	<div class="row">
		<div class="col-md-<?php echo 12-$sidebarcolumns ?> list-posts">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			
			<?php
			if ( $archive_title || $archive_subtitle ) {
				?>

				<header class="archive-header has-text-align-center header-footer-group">

					<div class="archive-header-inner section-inner medium">

						<?php if ( $archive_title ) { ?>
							<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
						<?php } ?>

						<?php if ( $archive_subtitle ) { ?>
							<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
						<?php } ?>

					</div><!-- .archive-header-inner -->

				</header><!-- .archive-header -->

				<?php
			}

			if ( have_posts() ) {

				$i = 0;

				while ( have_posts() ) {
					$i++;
					if ( $i > 1 ) {
						echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
					}
					the_post();

					get_template_part( 'template-parts/list', get_post_type() );

				}
			} ?>

			<?php get_template_part( 'template-parts/pagination' ); ?>


		</div>
		<div class="col-md-<?php echo $sidebarcolumns ?> rightsidebar">
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div>
	</div>


</main>

<?php
get_footer();