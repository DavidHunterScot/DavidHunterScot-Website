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

<video class="video" poster="<?php echo $images_url; ?>/videos/SleeplessNight-Thumb.png" preload="none" controls>
    <source src="<?php echo $videos_url; ?>/davidhunter/sleepless-night-a-short-film.mp4" type="video/mp4">
</video>

<p>This is my very first short film I produced entirely by myself in my bedroom. Hopefully you like it.</p>

<p>Duration: 2 minutes and 5 seconds</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "entry.php";
