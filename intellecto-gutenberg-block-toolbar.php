<?php
/**
 * Plugin Name: Gutenberg Block: Block Controls Example
 * Plugin URI: https://github.com/modularwp/gutenberg-block-block-controls-example
 * Description: An example of a Gutenberg block with an alignment toolbar block control.
 * Author: ModularWP
 * Author URI: https://modularwp.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 * @since 1.0.0
 */
function intellecto_block_controls_enqueue() {
	wp_enqueue_script(
		'mdlr-block-controls-example-backend-script', // Unique handle.
		plugins_url( 'gutenberg-block.js', __FILE__ ), // Gutenberg-block.js: We register the block here.
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ), // Dependencies, defined above.
		filemtime( plugin_dir_path( __FILE__ ) . 'gutenberg-block.js' ) // filemtime — Gets file modification time.
	);
}
add_action( 'enqueue_block_editor_assets', 'intellecto_block_controls_enqueue' );
