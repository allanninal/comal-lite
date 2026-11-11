<?php
/**
 * Title: Menu
 * Slug: comal-lite/menu-full
 * Categories: comal-lite
 * Description: The whole menu by category, with descriptions and prices.
 * Keywords: menu, prices, products, categories
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
<section class="wp-block-group alignfull cm-section" id="menu">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Our Menu', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Made Fresh Daily', 'comal-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"cm-lede cm-muted"} -->
<p class="has-text-align-center cm-lede cm-muted"><?php echo esc_html__( 'Every dish starts from scratch. Our tortillas are hand-pressed at 7am, our salsas roasted to order, and our mole simmered overnight. $$ · Mexican, Oaxacan, Taqueria', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"placeholder":"Order cut-off (filled in from WooCommerce > Settings > Shipping > Order ahead)","className":"is-style-order-cutoff cm-cutoff-line"} -->
<p class="is-style-order-cutoff cm-cutoff-line"></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"cm-menu-cat"} -->
<h3 class="wp-block-heading cm-menu-cat" id="menu-tacos"><?php echo esc_html__( 'Tacos', 'comal-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"cm-items"} -->
<div class="wp-block-group cm-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Taco de Carnitas', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag"} -->
<p class="cm-tag"><?php echo esc_html__( 'Fan favorite', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Slow-braised pork shoulder, salsa verde, onion &amp; cilantro', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. Ask about lard. <strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$4.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Taco de Birria', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag"} -->
<p class="cm-tag"><?php echo esc_html__( 'Best seller', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●<span class="dish-heat__off">●●</span></span><span class="dish-heat__word" aria-hidden="true">Mild</span><span class="screen-reader-text">Heat 1 of 3: mild</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Stewed beef in dried-chile consommé, Oaxacan cheese, onion, cilantro, consommé for dipping', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> milk.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$5.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Taco de Rajas Poblanas', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">V</span><span class="screen-reader-text">Vegetarian</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Roasted poblano strips, corn, crema, cotija cheese', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> milk.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$4.25', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Taco de Camarón', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●●<span class="dish-heat__off">●</span></span><span class="dish-heat__word" aria-hidden="true">Medium</span><span class="screen-reader-text">Heat 2 of 3: medium</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Gulf shrimp sautéed in chile de árbol butter, cabbage slaw, lime crema, avocado', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> milk, crustacean shellfish.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$5.75', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Taco al Pastor', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag"} -->
<p class="cm-tag"><?php echo esc_html__( 'Signature', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●<span class="dish-heat__off">●●</span></span><span class="dish-heat__word" aria-hidden="true">Mild</span><span class="screen-reader-text">Heat 1 of 3: mild</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Achiote-marinated pork, grilled pineapple, onion, cilantro, salsa roja', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$4.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Taco de Carne Asada', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Grilled skirt steak, guacamole, salsa negra', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn or flour tortilla. <strong>Contains:</strong> soy.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$5.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"cm-menu-cat"} -->
<h3 class="wp-block-heading cm-menu-cat" id="menu-antojitos"><?php echo esc_html__( 'Antojitos', 'comal-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"cm-items"} -->
<div class="wp-block-group cm-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Tlayuda Oaxaqueña', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag"} -->
<p class="cm-tag"><?php echo esc_html__( 'Signature', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Large crisp tortilla, black bean paste, Oaxacan quesillo, tasajo, avocado, salsa', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. Ask about lard. <strong>Contains:</strong> milk.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$14.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Quesadilla de Flor de Calabaza', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">V</span><span class="screen-reader-text">Vegetarian</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Squash blossom &amp; epazote quesadilla, handmade tortilla, salsa verde', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Flour tortilla. Ask about lard. <strong>Contains:</strong> milk, wheat.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$10.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Sopes de Chorizo', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●<span class="dish-heat__off">●●</span></span><span class="dish-heat__word" aria-hidden="true">Mild</span><span class="screen-reader-text">Heat 1 of 3: mild</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Three thick corn masa sopes, house chorizo, refried beans, crema, cotija, pickled jalapeño', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. Ask about lard. <strong>Contains:</strong> milk.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$11.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Gorditas de Chicharrón', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●●<span class="dish-heat__off">●</span></span><span class="dish-heat__word" aria-hidden="true">Medium</span><span class="screen-reader-text">Heat 2 of 3: medium</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Twice-fried masa pockets filled with pork rinds in salsa verde, queso fresco', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> milk.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$10.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Elotes Estilo La Milpa', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">V</span><span class="screen-reader-text">Vegetarian</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag"} -->
<p class="cm-tag"><?php echo esc_html__( 'Summer special', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●<span class="dish-heat__off">●●</span></span><span class="dish-heat__word" aria-hidden="true">Mild</span><span class="screen-reader-text">Heat 1 of 3: mild</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Grilled corn on the cob, chipotle mayo, cotija, chile piquín, lime — two per order', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> milk, egg.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$7.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Guacamole y Totopos', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">VG</span><span class="screen-reader-text">Vegan</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Chunky house guacamole, hand-fried totopos, pico de gallo', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$9.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo wp_kses_post( __( 'Aguachile Verde<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'comal-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●●●<span class="dish-heat__off"></span></span><span class="dish-heat__word" aria-hidden="true">Hot</span><span class="screen-reader-text">Heat 3 of 3: hot</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Gulf shrimp cured raw in lime, serrano and cilantro, cucumber, red onion, avocado, crisp tostadas', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> crustacean shellfish.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$15.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"cm-menu-cat"} -->
<h3 class="wp-block-heading cm-menu-cat" id="menu-mains"><?php echo esc_html__( 'Platos Fuertes', 'comal-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"cm-items"} -->
<div class="wp-block-group cm-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Mole Negro con Pollo', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag"} -->
<p class="cm-tag"><?php echo esc_html__( 'House specialty', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●<span class="dish-heat__off">●●</span></span><span class="dish-heat__word" aria-hidden="true">Mild</span><span class="screen-reader-text">Heat 1 of 3: mild</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Braised chicken thigh in 12-hour Oaxacan black mole, arroz rojo, black beans', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. Ask about lard. <strong>Contains:</strong> tree nuts, peanuts, wheat, sesame.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$19.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Enchiladas Suizas', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Corn tortillas filled with pulled chicken, tomatillo cream sauce, Oaxacan cheese, sour cream', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> milk.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$16.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Pozole Rojo', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●●<span class="dish-heat__off">●</span></span><span class="dish-heat__word" aria-hidden="true">Medium</span><span class="screen-reader-text">Heat 2 of 3: medium</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Traditional pork and hominy soup, dried red chiles, garnished with cabbage, radish &amp; oregano', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$14.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Camarones a la Diabla', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag"} -->
<p class="cm-tag"><?php echo esc_html__( 'Extra hot', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-heat"} -->
<p class="dish-heat"><?php echo wp_kses_post( __( '<span aria-hidden="true">●●●<span class="dish-heat__off"></span></span><span class="dish-heat__word" aria-hidden="true">Hot</span><span class="screen-reader-text">Heat 3 of 3: hot</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Gulf shrimp in fiery chile de árbol &amp; tomato sauce, steamed rice', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> crustacean shellfish.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$20.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Plato Vegetariano', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">V</span><span class="screen-reader-text">Vegetarian</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Charred seasonal vegetables, black bean purée, calabacitas con epazote, crema', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( 'Corn tortilla. <strong>Contains:</strong> milk.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$15.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"cm-menu-cat"} -->
<h3 class="wp-block-heading cm-menu-cat" id="menu-drinks"><?php echo esc_html__( 'Bebidas', 'comal-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"cm-items"} -->
<div class="wp-block-group cm-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Margarita Clásica', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Blanco tequila, fresh lime juice, triple sec, Himalayan salt rim — rocks or blended', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$10.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Mezcal Negroni Rojo', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag"} -->
<p class="cm-tag"><?php echo esc_html__( 'Bar favorite', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Joven mezcal, bitter aperitivo, sweet vermouth, orange peel — silky smoke-forward sipper', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$13.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Paloma de Hibisco', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Reposado tequila, house-made hibiscus syrup, grapefruit juice, soda, chile rim', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$12.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Agua de Jamaica', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">VG</span><span class="screen-reader-text">Vegan</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'House-made hibiscus flower agua fresca, cane sugar, fresh lime — no alcohol', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$4.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Agua de Tamarindo', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">VG</span><span class="screen-reader-text">Vegan</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Fresh tamarind agua fresca, piloncillo, lime — no alcohol', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$4.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Horchata', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">V</span><span class="screen-reader-text">Vegetarian</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Traditional rice &amp; cinnamon agua fresca, served cold — no alcohol', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$4.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Mexican Lager', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Mexican lager, 12 oz bottle, served with lime', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$5.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Mexican Fruit Soda', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">VG</span><span class="screen-reader-text">Vegan</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Tamarindo, Mandarina, or Toronja — 12.5 oz glass bottle', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> none listed.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$3.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"cm-menu-cat"} -->
<h3 class="wp-block-heading cm-menu-cat" id="menu-postres"><?php echo esc_html__( 'Postres', 'comal-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"cm-items"} -->
<div class="wp-block-group cm-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Flan de Coco', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">V</span><span class="screen-reader-text">Vegetarian</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dgf"} -->
<p class="cm-tag cm-tag--gf"><?php echo wp_kses_post( __( '<span aria-hidden="true">GF</span><span class="screen-reader-text">Gluten-free recipe</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Baked custard with coconut milk and burnt-sugar caramel', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> milk, egg, coconut.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$7.50', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"cm-item"} -->
<div class="wp-block-group cm-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"cm-item__name"} -->
<h4 class="wp-block-heading cm-item__name"><?php echo esc_html__( 'Churros con Cajeta', 'comal-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"cm-item__tags"} -->
<div class="wp-block-group cm-item__tags">
<!-- wp:paragraph {"className":"cm-tag cm-tag\u002d\u002dveg"} -->
<p class="cm-tag cm-tag--veg"><?php echo wp_kses_post( __( '<span aria-hidden="true">V</span><span class="screen-reader-text">Vegetarian</span>', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-muted cm-item__desc"} -->
<p class="cm-muted cm-item__desc"><?php echo esc_html__( 'Cinnamon-sugar churros with goat-milk caramel for dipping', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> milk, wheat.', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"cm-price"} -->
<p class="cm-price"><?php echo esc_html__( '$7.00', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"cm-specials-wrap"} -->
<div class="wp-block-group cm-specials-wrap">
<!-- wp:heading {"level":3,"className":"cm-menu-cat"} -->
<h3 class="wp-block-heading cm-menu-cat" id="specials"><?php echo esc_html__( 'Specials', 'comal-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:list {"className":"cm-specials"} -->
<ul class="wp-block-list cm-specials">
<!-- wp:list-item -->
<li><?php echo wp_kses_post( __( '<strong>Happy hour</strong> Tuesday to Friday, 3:00 PM to 6:00 PM: $2 off margaritas and aguas frescas, half-price guacamole.', 'comal-lite' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( __( '<strong>Taco Tuesday</strong> Tuesday: Every street taco is $3, all day.', 'comal-lite' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-legend"} -->
<p class="dish-legend"><?php echo wp_kses_post( __( '<strong>V</strong> vegetarian · <strong>VG</strong> vegan · <strong>GF</strong> no gluten ingredient in the recipe · Heat: <span aria-hidden="true">●</span> 1 mild · <span aria-hidden="true">●●</span> 2 medium · <span aria-hidden="true">●●●</span> 3 hot', 'comal-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"dish-notice cm-menu-note","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice cm-menu-note"><?php echo esc_html__( 'If you have a food allergy, please tell your server before you order. The &quot;Contains&quot; line under each dish lists the major allergens in its recipe: it is a guide, not a promise, and our kitchen handles all of them. Our kitchen handles milk, eggs, wheat, shellfish, peanuts, tree nuts and sesame, so we cannot promise any dish is without them, even those marked vegetarian. Please ask about allergens before you order. Coconut is listed on its own, not as a tree nut.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"dish-notice","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice"><?php echo esc_html__( 'Corn tortillas are our gluten-free option, but they are cooked in a kitchen that also handles wheat, so tell us if you need to avoid gluten completely.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"dish-notice","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice"><?php echo esc_html__( 'Some of our beans, tortillas and tamales may be made with lard. Ask about lard if you avoid pork.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"dish-notice dish-advisory","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice dish-advisory"><?php echo esc_html__( '* Consuming raw or undercooked meats, poultry, seafood, shellfish, or eggs may increase your risk of foodborne illness.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"dish-notice","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice"><?php echo esc_html__( 'Prices subject to change.', 'comal-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo comal_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
