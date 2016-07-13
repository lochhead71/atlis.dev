<?php
$us_layout = US_Layout::instance();
if ( is_singular() ) {
	$us_layout->sidebar_pos = us_get_option( 'product_sidebar', 'right' );
	if ( usof_meta( 'us_sidebar' ) != '' ) {
		$us_layout->sidebar_pos = usof_meta( 'us_sidebar' );
	}
} else {
	$us_layout->sidebar_pos = us_get_option( 'shop_sidebar', 'right' );
}

$titlebar_content = us_get_option( 'shop_titlebar_content', 'all' );
if ( is_singular() ) {
	if ( usof_meta( 'us_titlebar_content' ) != '' ) {
		$titlebar_content = usof_meta( 'us_titlebar_content' );
	}
} elseif ( ! is_search() AND ! is_tax() ) {
	if ( usof_meta( 'us_titlebar_content', array(), wc_get_page_id( 'shop' ) ) != '' ) {
		$titlebar_content = usof_meta( 'us_titlebar_content', array(), wc_get_page_id( 'shop' ) );
	}
}
$us_layout->titlebar = ($titlebar_content == 'hide') ? 'none' : 'default';

get_header();

if ( $titlebar_content != 'hide' ) {
	// Hiding the default WooCommerce page title to avoid duplication
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	add_filter( 'woocommerce_show_page_title', 'us_woocommerce_dont_show_page_title' );
	function us_woocommerce_dont_show_page_title() {
		return FALSE;
	}

	if ( $titlebar_content == 'all' ) {
		// Hiding the default WooCommerce breadcrumbs to avoid duplication
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_breadcrumb', 3 );
	}

	$template_vars = array(
		'show_title' => TRUE,
		'show_breadcrumbs' => ( $titlebar_content == 'all' ),
	);
	if ( is_singular() ) {
		$template_vars['title'] = get_the_title();
	} else {
		$template_vars['title'] = woocommerce_page_title( FALSE );
		if ( ! is_search() AND ! is_tax() ) {
			$template_vars['subtitle'] = usof_meta( 'us_titlebar_subtitle', array(), wc_get_page_id( 'shop' ) );
			$template_vars['size'] = usof_meta( 'us_titlebar_size', array(), wc_get_page_id( 'shop' ) );
			$template_vars['color_style'] = usof_meta( 'us_titlebar_color', array(), wc_get_page_id( 'shop' ) );
			$template_vars['bg_image'] = usof_meta( 'us_titlebar_image', array(), wc_get_page_id( 'shop' ) );
			$template_vars['bg_imgsize'] = usof_meta( 'us_titlebar_image_size', array(), wc_get_page_id( 'shop' ) );
			$template_vars['bg_parallax'] = usof_meta( 'us_titlebar_image_parallax', array(), wc_get_page_id( 'shop' ) );
			$template_vars['bg_overlay_color'] = usof_meta( 'us_titlebar_overlay_color', array(), wc_get_page_id( 'shop' ) );
		}
	}
	us_load_template( 'templates/titlebar', $template_vars );
}

