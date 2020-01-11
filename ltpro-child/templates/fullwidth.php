<?php
/**
 * Fullwidth template
 * Template Name: Fullwidth template
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package laptrinhcomvn
 * @subpackage ltpro-mphc
 */

get_header();
?>


<main id="site-content" role="main" class="container-fluid p-0 content-wrapper site-content">

	<?php

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} 
	?>

</main>

<?php
get_footer();