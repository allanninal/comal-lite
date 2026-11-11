<?php
/**
 * Title: Hours and location
 * Slug: comal-lite/visit
 * Categories: comal-lite
 * Description: Address, contact details, directions and opening hours.
 * Keywords: visit, hours, address, location, contact
 * Viewport Width: 1400
 *
 * @package comal-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface-2","className":"cm-section"} -->
<section class="wp-block-group has-surface-2-background-color has-background alignfull cm-section" id="hours">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"layout":{"type":"default"},"className":"cm-hours-col"} -->
<div class="wp-block-group cm-hours-col">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Hours', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'When to Visit', 'comal-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"cm-hours"} -->
<div class="wp-block-group cm-hours">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"cm-hours__row"} -->
<div class="wp-block-group cm-hours__row">
<!-- wp:paragraph {"className":"cm-hours__day"} -->
<p class="cm-hours__day"><?php echo esc_html__( 'Monday', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-hours__time is-closed"} -->
<p class="cm-hours__time is-closed"><?php echo esc_html__( 'Closed', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"cm-hours__row"} -->
<div class="wp-block-group cm-hours__row">
<!-- wp:paragraph {"className":"cm-hours__day"} -->
<p class="cm-hours__day"><?php echo esc_html__( 'Tuesday', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-hours__time"} -->
<p class="cm-hours__time"><?php echo esc_html__( '11:00 AM – 9:00 PM', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"cm-hours__row"} -->
<div class="wp-block-group cm-hours__row">
<!-- wp:paragraph {"className":"cm-hours__day"} -->
<p class="cm-hours__day"><?php echo esc_html__( 'Wednesday', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-hours__time"} -->
<p class="cm-hours__time"><?php echo esc_html__( '11:00 AM – 9:00 PM', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"cm-hours__row"} -->
<div class="wp-block-group cm-hours__row">
<!-- wp:paragraph {"className":"cm-hours__day"} -->
<p class="cm-hours__day"><?php echo esc_html__( 'Thursday', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-hours__time"} -->
<p class="cm-hours__time"><?php echo esc_html__( '11:00 AM – 9:00 PM', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"cm-hours__row"} -->
<div class="wp-block-group cm-hours__row">
<!-- wp:paragraph {"className":"cm-hours__day"} -->
<p class="cm-hours__day"><?php echo esc_html__( 'Friday', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-hours__time"} -->
<p class="cm-hours__time"><?php echo esc_html__( '11:00 AM – 10:30 PM', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"cm-hours__row"} -->
<div class="wp-block-group cm-hours__row">
<!-- wp:paragraph {"className":"cm-hours__day"} -->
<p class="cm-hours__day"><?php echo esc_html__( 'Saturday', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-hours__time"} -->
<p class="cm-hours__time"><?php echo esc_html__( '10:00 AM – 10:30 PM', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"cm-hours__row"} -->
<div class="wp-block-group cm-hours__row">
<!-- wp:paragraph {"className":"cm-hours__day"} -->
<p class="cm-hours__day"><?php echo esc_html__( 'Sunday', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-hours__time"} -->
<p class="cm-hours__time"><?php echo esc_html__( '10:00 AM – 8:00 PM', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status cm-open"} -->
<p class="is-style-open-status cm-open"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","className":"cm-muted cm-hours__note"} -->
<p class="has-small-font-size cm-muted cm-hours__note"><?php echo esc_html__( 'Kitchen closes 30 minutes before close. Last orders for takeout at (210) 555-0147 accepted up to 45 minutes before close.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"layout":{"type":"default"},"className":"cm-location-col"} -->
<div class="wp-block-group cm-location-col">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Location &amp; Order', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Find Us', 'comal-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cm-address"} -->
<p class="cm-address"><?php echo wp_kses_post( __( '412 E Commerce St<br>San Antonio, TX 78205', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"cm-btn-teal"} -->
<div class="wp-block-button cm-btn-teal"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=412+E+Commerce+St+San+Antonio+TX+78205"><?php echo esc_html__( 'Get Directions', 'comal-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:hola@lamilpa.example?subject=Takeout%20order"><?php echo esc_html__( 'Order by Email', 'comal-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:group {"layout":{"type":"default"},"className":"cm-contact"} -->
<div class="wp-block-group cm-contact">
<!-- wp:heading {"level":3,"className":"cm-contact__label"} -->
<h3 class="wp-block-heading cm-contact__label"><?php echo esc_html__( 'Contact', 'comal-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( 'Phone: <a href="tel:2105550147">(210) 555-0147</a>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( 'Email: <a href="mailto:hola@lamilpa.example">hola@lamilpa.example</a>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo comal_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
