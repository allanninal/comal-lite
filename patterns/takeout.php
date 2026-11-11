<?php
/**
 * Title: Takeout
 * Slug: comal-lite/takeout
 * Categories: comal-lite
 * Viewport Width: 1400
 *
 * @package comal-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"teal","className":"cm-section cm-teal"} -->
<section class="wp-block-group has-teal-background-color has-background alignfull cm-section cm-teal" id="takeout">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow cm-on-teal-soft"} -->
<p class="has-text-align-center is-style-eyebrow cm-on-teal-soft"><?php echo esc_html__( 'Takeout', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","className":"cm-on-teal"} -->
<h2 class="wp-block-heading has-text-align-center cm-on-teal"><?php echo esc_html__( 'Order by Email or Call Ahead', 'comal-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"cm-lede cm-on-teal-soft"} -->
<p class="has-text-align-center cm-lede cm-on-teal-soft"><?php echo wp_kses_post( __( 'Pick up your order in as little as 20 minutes. Order online for pickup — or call us directly at <a href="tel:2105550147">(210) 555-0147</a>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"cm-btn-accent"} -->
<div class="wp-block-button cm-btn-accent"><a class="wp-block-button__link wp-element-button" href="mailto:hola@lamilpa.example?subject=Takeout%20order"><?php echo esc_html__( 'Order by Email', 'comal-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline cm-on-dark"} -->
<div class="wp-block-button is-style-outline cm-on-dark"><a class="wp-block-button__link wp-element-button" href="tel:2105550147"><?php echo esc_html__( 'Call to Order', 'comal-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"align":"center","fontSize":"small","className":"cm-on-teal-soft"} -->
<p class="has-text-align-center has-small-font-size cm-on-teal-soft"><?php echo esc_html__( 'Minimum 20-minute lead time. Cash, card &amp; digital wallets accepted. Curbside pickup available — just call when you arrive.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo comal_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
