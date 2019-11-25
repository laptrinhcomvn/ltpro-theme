<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package laptrinhcomvn
 * @subpackage ltpro-child
 * @since 1.0.0
 */
?>

<div <?php post_class('list-post-item '); ?> id="post-<?php the_ID(); ?>">
 
<?php
if ( has_post_thumbnail() && ! post_password_required() ) {

	$featured_media_inner_classes = '';

	// Make the featured media thinner on archive pages.
	if ( ! is_singular() ) {
		$featured_media_inner_classes .= ' medium';
	}
	?>

	<figure class="featured-media">

		<div class="featured-media-inner section-inner<?php echo $featured_media_inner_classes; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>

	</figure>

	<h4 class="title-news">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_title_attribute(); ?>
		</a>
	</h4>

	<?php
	}

	if ( has_excerpt() ) { ?>
		<div class="intro-text section-inner">
			<?php the_excerpt(); ?>
		</div>
	<?php } ?>

</div>


