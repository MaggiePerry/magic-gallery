<?php

/**
* Plugin Name:  Magic Gallery
* Description:  Simple wordpress plugin for image gallery gutenberg blocks.
* Version:      1.0
* Author:       Maggie Perry
* License:      GPL2 or later
* License URI:  https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:  magicgallery
*/

function magic_test($content)
{
    // Message you want to display after the post
    // Add URLs to your own Twitter and Facebook profiles

        $content .= 'This is a magic gallery';
    // Return the content
    return $content;
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'magic_test');
