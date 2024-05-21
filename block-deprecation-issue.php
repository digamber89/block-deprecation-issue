<?php
/**
 * Plugin Name:       Test Block Deprecation Issue
 * Plugin URI:        #
 * Description:       BLock Deprecation Issue
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            digamber
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       block-deprecation-issue
 *
 * @package Digthis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function digthis_block_deprecation_issue_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'digthis_block_deprecation_issue_block_init' );
