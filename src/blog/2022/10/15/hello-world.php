<?php

$article_title = "Hello World";
$article_description = "This is my first blog entry.";
$article_author = "David Hunter";
$article_date = "2022-10-15";
$article_time = "00:52";

$article_content = function()
{
?>

<p>This is my first blog entry. It's such an exciting thing to start a new blog.</p>

<p>I may not update it that often, but hopefully it will still contain good content when I do.</p>

<p>Thank you for stopping by.</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "entry.php";
