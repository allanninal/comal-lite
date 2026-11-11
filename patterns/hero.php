<?php
/**
 * Title: Hero
 * Slug: comal-lite/hero
 * Categories: comal-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package comal-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:cover {"url":"__SRC_hero__","id":"__ID_hero__","alt":"Inside La Milpa: carved red chairs and painted walls","dimRatio":80,"overlayColor":"text-strong","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","sizeSlug":"full","align":"full","className":"cm-hero","layout":{"type":"constrained","contentSize":"72rem"}} -->
<div id="hero" class="wp-block-cover alignfull cm-hero" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-text-strong-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-__ID_hero__ size-full" alt="<?php echo esc_attr__( 'Inside La Milpa: carved red chairs and painted walls', 'comal-lite' ); ?>" src="__SRC_hero__" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"type":"default"},"className":"cm-hero__inner"} -->
<div class="wp-block-group cm-hero__inner">
<!-- wp:paragraph {"className":"is-style-eyebrow cm-on-photo cm-hero__eyebrow"} -->
<p class="is-style-eyebrow cm-on-photo cm-hero__eyebrow"><?php echo esc_html__( 'Est. 2009 · East Side, San Antonio', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"cm-on-photo"} -->
<h1 class="wp-block-heading cm-on-photo"><?php echo esc_html__( 'La Milpa', 'comal-lite' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cm-hero__tagline"} -->
<p class="cm-hero__tagline"><?php echo esc_html__( 'Taqueria &amp; Antojitos', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-on-photo cm-hero__lede"} -->
<p class="cm-on-photo cm-hero__lede"><?php echo esc_html__( 'A family-owned taqueria rooted in Oaxacan and Michoacán tradition. Mole negro simmered overnight, hand-pressed tortillas, seasonal-fruit aguas.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"cm-btn-accent"} -->
<div class="wp-block-button cm-btn-accent"><a class="wp-block-button__link wp-element-button" href="mailto:hola@lamilpa.example?subject=Takeout%20order"><?php echo esc_html__( 'Order by Email', 'comal-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline cm-on-dark"} -->
<div class="wp-block-button is-style-outline cm-on-dark"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'View Menu', 'comal-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"fontSize":"small","className":"cm-on-photo cm-hero__meta"} -->
<p class="has-small-font-size cm-on-photo cm-hero__meta"><?php echo wp_kses_post( __( '<strong>★ 4.8</strong> (532 reviews) · 412 E Commerce St, San Antonio', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
<?php
echo comal_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
