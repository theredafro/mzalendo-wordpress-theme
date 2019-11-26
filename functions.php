<?php
add_filter('next_posts_link_attributes', 'next_post_link_attributes');
add_filter('previous_posts_link_attributes', 'prev_post_link_attributes');

function next_post_link_attributes(){
	return 'class="next"';
}

function prev_post_link_attributes(){
	return 'class="prev"';
}

// Remove some default gubbins from wp_head.
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_generator' );


// Prevent a load of emoji gunk being inserted into wp_head.
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emojis' );

?>