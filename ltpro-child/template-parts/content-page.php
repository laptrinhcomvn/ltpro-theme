<?php
/**
 * content page
 *
 * Used for page only
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package laptrinhcomvn
 * @subpackage ltpro-child
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="post-inner thin'">

		<div class="entry-content">

			<?php
				the_content( __( 'Continue reading', 'laptrinhcomvn' ) );
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<?php

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( is_page() && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article>
