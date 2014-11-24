<?php
/*
	Plugin Name: MDC Target Blank
	Description: MDC Target Blank forces links in posts or pages to be opened in a new tab. You don't have to write <strong>target="_blank"</strong> manually! Cheers..
	Author: Nazmul Ahsan
	Author URI: http://mukto.medhabi.com
	Plugin URI: http://mukto.medhabi.com
	Version: 1.0.0
	Tags: new tab, link new tab, target _blank, target blank, external link, open in new tab, mdc
*/
function mdc_target_blank($content) {
	global $post;
	$post_string = get_the_content();
	$post_string = str_replace('<a', '<a target="_blank"', $post_string);
  echo "<p>".$post_string."</p>";
}

add_filter( 'the_content', 'mdc_target_blank' );
