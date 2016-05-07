<?php
/*
	Plugin Name: MDC Target Blank
	Description: MDC Target Blank forces links in posts or pages to be opened in a new tab. You don't have to write <strong>target="_blank"</strong> manually! Cheers..
	Author: Nazmul Ahsan
	Author URI: http://nazmulahsan.me
	Plugin URI: https://wordpress.org/plugins/mdc-target-blank/
	Version: 1.2
	Tags: new tab, link new tab, target _blank, target blank, external link, open in new tab, mdc
*/
function mdc_target_blank($content) {
	$post_string = $content;
	$post_string = str_replace('<a target="_blank"', '<a', $post_string); // remove existing target="_blank" from <a></a> tags first, if any
	$post_string = str_replace('<a', '<a target="_blank"', $post_string); // add target="_blank" to every <a></a> tag
	return $post_string;
}

add_filter( 'the_content', 'mdc_target_blank' );
