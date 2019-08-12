<?php
/**
Plugin Name: Link modifier
Plugin URI:
Description: This is a plugin which updates internal links every time an author updates the content via the WordPress editor.
Author: Martin Marchev
Version: 1.0
*/

add_filter( 'wp_insert_post_data' , 'check_hreflang_attributes' , '99', 1 ); // Grabs the inserted post data so you can modify it.

function check_hreflang_attributes( $data )
{
		// Get the content of the page
    $content = $data['post_content'];
    $url_slug = $data['post_name'];
    switch ($url_slug) {
    		case 'in': $lang = 'en-IN'; break;
    		case 'uk': $lang = 'en-UK'; break;
    		default: $lang = 'en-US'; break;
    }

   	$hreflang = 'hreflang="' . $lang . '"';
   	// check if there are already a hreflang property assigned to the anchor
   	if (!preg_match('/<a.*? hreflang=".*?"/', $content) ) {
        // If there is not an existing hreflang simply add the hreflang property
        $content = preg_replace('/(<a.*?)/', '$1 ' . $hreflang . '$2', $content);
    } 

		$data['post_content'] = $content;

   	return $data; // Returns the modified data.
}

