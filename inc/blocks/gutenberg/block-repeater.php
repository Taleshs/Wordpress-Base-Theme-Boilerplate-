<?php
/**
 * Block template file: inc/blocks/gutenberg/block-repeater.php
 *
 * Urban Repeater Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'urban-repeater-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-urban-repeater';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?> {
		/* Add styles that use ACF values here */
	}
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
	<?php the_field( 'title_repater_content' ); ?>
	<?php if ( have_rows( 'content_box_repeater' ) ): ?>
		<?php while ( have_rows( 'content_box_repeater' ) ) : the_row(); ?>
			<?php if ( get_row_layout() == 'content_repeater' ) : ?>
				<?php the_sub_field( 'title_flexible_content_box_repeater' ); ?>
				<?php the_sub_field( 'content_flexible_content_box_repeater_copy' ); ?>
				<?php the_sub_field( 'learn_more_link_flexible_content_box_repeater_copy' ); ?>
				<?php the_sub_field( 'learn_more_text_flexible_content_box_repeater_copy2' ); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php else: ?>
		<?php // no layouts found ?>
	<?php endif; ?>
</div>