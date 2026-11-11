<?php
/**
 * Title: Catering
 * Slug: comal-lite/catering
 * Categories: comal-lite
 * Description: Private events and catering: what is included and a quote button.
 * Keywords: catering, events, weddings, contact
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
<section class="wp-block-group alignfull cm-section" id="catering">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Catering', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Feed the Whole Party', 'comal-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"cm-lede cm-muted"} -->
<p class="has-text-align-center cm-lede cm-muted"><?php echo esc_html__( 'Priced per person, for groups of 12 or more. Please order at least 48 hours ahead (2 days).', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"dish-table cm-catering"} -->
<figure class="wp-block-table dish-table cm-catering"><table class="has-fixed-layout"><thead><tr><th>Package</th><th>Includes</th><th>Per person</th></tr></thead><tbody><tr><td>Taco bar</td><td>Carnitas, pastor and rajas tacos, arroz rojo, beans, salsas, tortillas</td><td>$16</td></tr><tr><td>Antojitos spread</td><td>Sopes, quesadillas, guacamole and totopos, elotes</td><td>$14</td></tr><tr><td>Mole and rice</td><td>Mole negro with chicken, arroz rojo, black beans, tortillas</td><td>$21</td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html__( 'Catering packages and price per person (examples: set your own).', 'comal-lite' ); ?></figcaption></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"align":"center","className":"dish-notice","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice"><?php echo esc_html__( 'Minimum 12 people. Prices do not include tax or delivery. Allergens and lard: see the notes under the menu, and tell us about every guest\'s needs when you ask.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hola@lamilpa.example?subject=Catering%20request"><?php echo esc_html__( 'Ask about catering', 'comal-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo comal_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
