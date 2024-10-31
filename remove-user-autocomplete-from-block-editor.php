<?php
/**
 * Plugin Name:       Remove @User Autocomplete from Block Editor
 * Plugin URI:        https://jeanbaptisteaudras.com
 * Description:       Removes the @user autocomplete feature from the Gutenberg block editor.
 * Version:           0.1
 * Author:            audrasjb
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       remove-user-autocomplete-from-block-editor
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function ruafbe_enqueue_scripts() {
	wp_enqueue_script(
		'remove-user-autocomplete-from-block-editor',
		plugins_url( 'remove-user-autocomplete-from-block-editor.js', __FILE__ ),
		array( 'wp-blocks' ),
		'20220310',
		true
	);
}
add_filter( 'enqueue_block_editor_assets', 'ruafbe_enqueue_scripts' );