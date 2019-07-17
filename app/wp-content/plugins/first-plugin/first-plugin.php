<?php 

/*
Plugin Name: First Plugin
Description: My first plugin, it is amazing
*/

add_filter('the_content', 'contentEdits');

function contentEdits($content) {
    $content = $content . '<p>All your content are belong to Ficitonal University.</p>';
    $content = str_replace('blah', 'something smart here', $content);
    return $content;
}