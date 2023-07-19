<?php

$article_title = "Sleepless Night - A Short Film";
$article_description = "This is my very first short film I produced entirely by myself in my bedroom. Hopefully you like it.";
$article_author = "David Hunter";
$article_date = "2023-07-19";
$article_time = "18:00";

$article_content = function()
{
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "config.php";
?>

<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/WDVmnbn6l8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<p>This is my very first short film I produced entirely by myself in my bedroom. Hopefully you like it.</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "entry.php";
