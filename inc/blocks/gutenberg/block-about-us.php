<?php
/**
 * Block template file: inc/blocks/gutenberg/block-about-us.php
 *
 * Urban Content Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'urban-content-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-urban-content';
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
	<?php if ( have_rows( 'content_block_layout_left' ) ): ?>
		<?php while ( have_rows( 'content_block_layout_left' ) ) : the_row(); ?>
			<?php if ( get_row_layout() == 'content_block_left' ) : ?>
				<?php the_sub_field( 'content_type_left' ); ?>
				<?php the_sub_field( 'text_content_block_left' ); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php else: ?>
		<?php // no layouts found ?>
	<?php endif; ?>
	<?php if ( have_rows( 'content_block_layout_right' ) ): ?>
		<?php while ( have_rows( 'content_block_layout_right' ) ) : the_row(); ?>
			<?php if ( get_row_layout() == 'content_block_rigth' ) : ?>
				<?php the_sub_field( 'content_type_right' ); ?>
				<?php the_sub_field( 'text_content_block_right' ); ?>
				<?php $image_block_content_right = get_sub_field( 'image_block_content_right' ); ?>
				<?php if ( $image_block_content_right ) { ?>
					<img src="<?php echo $image_block_content_right['url']; ?>" alt="<?php echo $image_block_content_right['alt']; ?>" />
				<?php } ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php else: ?>
		<?php // no layouts found ?>
	<?php endif; ?>
</div>