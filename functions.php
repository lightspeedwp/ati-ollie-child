<?php
/**
 * ATI Holidays Ollie Child Theme functions.
 *
 * @package ATI_Ollie_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue front-end assets.
 */
function ati_ollie_child_enqueue_scripts() {
	wp_enqueue_style(
		'ati-ollie-child',
		get_stylesheet_uri(),
		array( 'ollie' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'ati-faq-accordion',
		get_stylesheet_directory_uri() . '/assets/js/faq-accordion.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'ati_ollie_child_enqueue_scripts' );

/**
 * Split multi-link ati-button paragraph bindings into individual button items.
 *
 * The post-connection binding renders connected posts as one comma-separated
 * HTML string. When the paragraph uses the ATI Button style we convert that
 * list into link-only content so each destination can be styled as its own pill.
 *
 * @param string $block_content Rendered block content.
 * @param array  $block         Parsed block data.
 * @return string
 */
function ati_ollie_child_render_button_links( $block_content, $block ) {
	if ( empty( $block_content ) || empty( $block['blockName'] ) || 'core/paragraph' !== $block['blockName'] ) {
		return $block_content;
	}

	$binding = $block['attrs']['metadata']['bindings']['content'] ?? array();
	if ( empty( $binding['source'] ) || 'lsx/post-connection' !== $binding['source'] ) {
		return $block_content;
	}

	if ( false === strpos( $block_content, 'is-style-ati-button' ) ) {
		return $block_content;
	}

	preg_match_all( '/<a\b[^>]*>.*?<\/a>/si', $block_content, $matches );
	if ( empty( $matches[0] ) || count( $matches[0] ) < 2 ) {
		return $block_content;
	}

	$links_html = implode( '', array_map( 'trim', $matches[0] ) );

	$block_content = preg_replace_callback(
		'/<p\b([^>]*)class="([^"]*)"([^>]*)>/i',
		static function( $matches ) {
			$classes = preg_split( '/\s+/', trim( $matches[2] ) );
			if ( ! in_array( 'ati-button-links', $classes, true ) ) {
				$classes[] = 'ati-button-links';
			}

			return '<p' . $matches[1] . 'class="' . esc_attr( implode( ' ', array_filter( $classes ) ) ) . '"' . $matches[3] . '>';
		},
		$block_content,
		1
	);

	$block_content = preg_replace_callback(
		'/(<p\b[^>]*>)(.*?)(<\/p>)/si',
		static function( $matches ) use ( $links_html ) {
			return $matches[1] . $links_html . $matches[3];
		},
		$block_content,
		1
	);

	return $block_content;
}
add_filter( 'render_block', 'ati_ollie_child_render_button_links', 30, 2 );

/**
 * Render bound accommodation rating paragraphs as ATI star pills.
 *
 * The Tour Operator plugin outputs PNG star images for the `rating` meta field.
 * When the paragraph uses the ATI Star Block style we replace those images with
 * inline star characters so the pill can inherit theme colors and spacing.
 *
 * @param string $block_content Rendered block content.
 * @param array  $block         Parsed block data.
 * @return string
 */
function ati_ollie_child_render_rating_stars( $block_content, $block ) {
	if ( empty( $block_content ) || empty( $block['blockName'] ) || 'core/paragraph' !== $block['blockName'] ) {
		return $block_content;
	}

	if ( false === strpos( $block_content, 'is-style-ati-star-block' ) ) {
		return $block_content;
	}

	$binding = $block['attrs']['metadata']['bindings']['content'] ?? array();
	if ( empty( $binding['source'] ) || 'lsx/post-meta' !== $binding['source'] || empty( $binding['args']['key'] ) || 'rating' !== $binding['args']['key'] ) {
		return $block_content;
	}

	$full_stars  = preg_match_all( '/rating-star-full\.png|fa\s+fa-star(?!-o)/i', $block_content );
	$empty_stars = preg_match_all( '/rating-star-empty\.png|fa\s+fa-star-o/i', $block_content );
	$total_stars = $full_stars + $empty_stars;

	if ( 0 === $total_stars ) {
		return $block_content;
	}

	$stars_markup = '';

	for ( $index = 0; $index < $full_stars; $index++ ) {
		$stars_markup .= '<span class="ati-rating-star" aria-hidden="true">&#9733;</span>';
	}

	for ( $index = 0; $index < $empty_stars; $index++ ) {
		$stars_markup .= '<span class="ati-rating-star is-empty" aria-hidden="true">&#9733;</span>';
	}

	$block_content = preg_replace_callback(
		'/<p\b([^>]*)class="([^"]*)"([^>]*)>/i',
		static function( $matches ) {
			$classes = preg_split( '/\s+/', trim( $matches[2] ) );
			if ( ! in_array( 'ati-rating-stars', $classes, true ) ) {
				$classes[] = 'ati-rating-stars';
			}

			return '<p' . $matches[1] . 'class="' . esc_attr( implode( ' ', array_filter( $classes ) ) ) . '"' . $matches[3] . '>';
		},
		$block_content,
		1
	);

	$block_content = preg_replace(
		'/(<p\b[^>]*>)(.*?)(<\/p>)/si',
		'$1' . $stars_markup . '$3',
		$block_content,
		1
	);

	return $block_content;
}
add_filter( 'render_block', 'ati_ollie_child_render_rating_stars', 35, 2 );
