<?php
/**
 * Title: Gallery
 * Slug: comal-lite/gallery
 * Categories: comal-lite
 * Description: A grid of captioned photos.
 * Keywords: gallery, photos, images
 * Viewport Width: 1400
 *
 * @package comal-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"cm-section"} -->
<section class="wp-block-group alignfull cm-section" id="gallery">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Gallery', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'From Our Kitchen', 'comal-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"cm-lede cm-muted"} -->
<p class="has-text-align-center cm-lede cm-muted"><?php echo esc_html__( 'A peek at what comes out of La Milpa\'s kitchen daily. Follow us on Instagram for the full behind-the-scenes.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"cm-gallery"} -->
<div class="wp-block-group cm-gallery">
<!-- wp:image {"id":"__ID_gallery-tacos__","sizeSlug":"large","linkDestination":"none","className":"cm-photo"} -->
<figure class="wp-block-image size-large cm-photo"><img src="__SRC_gallery-tacos__" alt="<?php echo esc_attr__( 'Four street tacos with onion, cilantro and lime on a white platter', 'comal-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-tacos__"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( __( '<strong>Street Tacos</strong> Corn tortillas, chopped onion, cilantro, lime and two salsas', 'comal-lite' ) ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_gallery-tlayuda__","sizeSlug":"large","linkDestination":"none","className":"cm-photo"} -->
<figure class="wp-block-image size-large cm-photo"><img src="__SRC_gallery-tlayuda__" alt="<?php echo esc_attr__( 'Cheese-topped enchiladas with red rice, refried beans, lettuce and tomato', 'comal-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-tlayuda__"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( __( '<strong>Enchiladas Plate</strong> Melted cheese, arroz rojo, refried beans and cotija', 'comal-lite' ) ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_gallery-mole__","sizeSlug":"large","linkDestination":"none","className":"cm-photo"} -->
<figure class="wp-block-image size-large cm-photo"><img src="__SRC_gallery-mole__" alt="<?php echo esc_attr__( 'A tamal in a banana leaf with red chile sauce and a sprig of cilantro', 'comal-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-mole__"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( __( '<strong>Tamal</strong> Steamed in a banana leaf, under a red chile sauce', 'comal-lite' ) ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_gallery-margarita__","sizeSlug":"large","linkDestination":"none","className":"cm-photo"} -->
<figure class="wp-block-image size-large cm-photo"><img src="__SRC_gallery-margarita__" alt="<?php echo esc_attr__( 'A salt-rimmed glass in front of the softly lit back bar', 'comal-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-margarita__"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( __( '<strong>The Bar</strong> Margaritas, palomas and mezcal after dark', 'comal-lite' ) ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_gallery-jamaica__","sizeSlug":"large","linkDestination":"none","className":"cm-photo"} -->
<figure class="wp-block-image size-large cm-photo"><img src="__SRC_gallery-jamaica__" alt="<?php echo esc_attr__( 'A glass of hibiscus agua fresca beside limes and dried hibiscus flowers', 'comal-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-jamaica__"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( __( '<strong>Agua de Jamaica</strong> House-made hibiscus agua fresca', 'comal-lite' ) ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_gallery-kitchen__","sizeSlug":"large","linkDestination":"none","className":"cm-photo"} -->
<figure class="wp-block-image size-large cm-photo"><img src="__SRC_gallery-kitchen__" alt="<?php echo esc_attr__( 'A burrito smothered in red and green salsa, with tortilla chips and salsa', 'comal-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-kitchen__"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( __( '<strong>Smothered Burrito</strong> Two salsas and crema, with totopos and salsa roja', 'comal-lite' ) ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://instagram.com"><?php echo esc_html__( 'More on Instagram', 'comal-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo comal_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
