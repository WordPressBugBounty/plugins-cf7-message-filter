<?php

/**
 * Add libraries to be included
 */


add_filter( 'kmcf7_requires_filter', function ( $includes ) {
	$plugin_path = plugin_dir_path( __FILE__ );

	$files = [
		$plugin_path . 'wordpress_tools/WordPressTools.php', //
		$plugin_path . 'emoji_detector/Emoji.php', //
	];

	return array_merge( $includes, $files );
} );