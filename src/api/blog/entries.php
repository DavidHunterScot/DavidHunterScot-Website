<?php

if( ! isset( $path_to_output_file ) )
    exit;

$custom_output_path = substr( $path_to_output_file, 0, -5 ) . ".json";

include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "blog.php";

$path_to_blog_dir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "blog";

$blog_entries = array();

get_blog_entries( $path_to_blog_dir, $blog_entries, $path_to_blog_dir );

$blog_entries = array_reverse( $blog_entries );

$blog_entries_json = json_encode( $blog_entries );

echo $blog_entries_json;
