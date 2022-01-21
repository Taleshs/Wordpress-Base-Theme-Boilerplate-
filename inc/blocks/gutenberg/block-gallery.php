<?php
/**
 * Block template file: inc/blocks/gutenberg/block-gallery.php
 *
 * Urban Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'urban-gallery-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-urban-gallery';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?> {
        
	}
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
	<?php the_field( 'title_images_gallery' ); ?>
	<?php $images_gallery_images = get_field( 'images_gallery' ); ?>
	<?php if ( $images_gallery_images ) :  ?>
		<?php foreach ( $images_gallery_images as $images_gallery_image ): ?>
			<a href="<?php echo $images_gallery_image['url']; ?>">
				<img src="<?php echo $images_gallery_image['sizes']['thumbnail']; ?>" alt="<?php echo $images_gallery_image['alt']; ?>" />
			</a>
		<p><?php echo $images_gallery_image['caption']; ?></p>
		<?php endforeach; ?>
	<?php endif; ?>
</div>