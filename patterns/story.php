<?php
/**
 * Title: Our story
 * Slug: comal-lite/story
 * Categories: comal-lite
 * Description: The story behind the business, with a few key numbers.
 * Keywords: about, story, history, numbers
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
<section class="wp-block-group has-surface-2-background-color has-background alignfull cm-section" id="story">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Our Story', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Rooted in Tradition, Cooked With Love', 'comal-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cm-muted"} -->
<p class="cm-muted"><?php echo esc_html__( 'Rosa Vásquez grew up in her grandmother\'s kitchen in Oaxaca City, where the smell of toasted chiles and fresh masa was as constant as sunrise. She moved to San Antonio at nineteen, worked every station in professional kitchens for a decade, then opened La Milpa in 2009 with a single comal-lite and a market stall permit.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted"} -->
<p class="cm-muted"><?php echo esc_html__( 'La Milpa has since grown into a sit-down taqueria with a loyal neighborhood following, but the philosophy hasn\'t changed: everything made from scratch, sourced as locally as possible, and priced so families can eat well without stretching their budget.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted"} -->
<p class="cm-muted"><?php echo esc_html__( 'Rosa\'s mole negro — toasted, blended, and simmered for twelve hours — is the dish regulars cross town for.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"cm-quote"} -->
<div class="wp-block-group cm-quote">
<!-- wp:paragraph {"className":"cm-quote__text"} -->
<p class="cm-quote__text"><?php echo esc_html__( '“Good food doesn\'t need to be complicated. It needs time, honest ingredients, and someone who gives a damn.”', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-quote__by"} -->
<p class="cm-quote__by"><?php echo esc_html__( '— Rosa Vásquez, Chef &amp; Owner', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:group {"layout":{"type":"default"},"className":"cm-chef","backgroundColor":"teal"} -->
<div class="wp-block-group has-teal-background-color has-background cm-chef">
<!-- wp:paragraph {"className":"cm-chef__name"} -->
<p class="cm-chef__name"><?php echo esc_html__( 'Rosa Vásquez', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-chef__role"} -->
<p class="cm-chef__role"><?php echo esc_html__( 'Chef &amp; Owner · From Oaxaca City, Mexico', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"cm-stats"} -->
<div class="wp-block-group cm-stats">
<!-- wp:group {"layout":{"type":"default"},"className":"cm-stat"} -->
<div class="wp-block-group cm-stat">
<!-- wp:paragraph {"className":"cm-stat__value"} -->
<p class="cm-stat__value"><?php echo esc_html__( '2009', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-stat__label"} -->
<p class="cm-stat__label"><?php echo esc_html__( 'Serving San Antonio since', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"cm-stat"} -->
<div class="wp-block-group cm-stat">
<!-- wp:paragraph {"className":"cm-stat__value"} -->
<p class="cm-stat__value"><?php echo esc_html__( '12h', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-stat__label"} -->
<p class="cm-stat__label"><?php echo esc_html__( 'Mole simmered overnight', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"cm-stat"} -->
<div class="wp-block-group cm-stat">
<!-- wp:paragraph {"className":"cm-stat__value"} -->
<p class="cm-stat__value"><?php echo esc_html__( '4.8', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-stat__label"} -->
<p class="cm-stat__label"><?php echo esc_html__( 'Stars (532 reviews)', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"cm-heritage"} -->
<div class="wp-block-group cm-heritage">
<!-- wp:paragraph {"className":"cm-heritage__title"} -->
<p class="cm-heritage__title"><?php echo esc_html__( 'Regional Heritage', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( 'La Milpa draws on the culinary traditions of <strong>Oaxaca</strong> (mole negro, tlayudas, tasajo) and <strong>Michoacán</strong> (carnitas, pozole, charales). Two distinct regional voices, one honest kitchen.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
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
