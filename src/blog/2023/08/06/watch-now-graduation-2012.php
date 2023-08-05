<?php

$article_title = "Watch Now: Graduation 2012";
$article_description = "This was one of my proudest moments, and after over a decade later, I want to share and remember this moment that luckily enough was caught on camera.";
$article_author = "David Hunter";
$article_date = "2023-08-06";
$article_time = "00:55";

$article_content = function()
{
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "config.php";
?>

<p>Back in 2012, I graduated Kilmarnock College with a Higher National Certificate in Computing Software Development.</p>

<p>This was one of my proudest moments, and after over a decade later, I want to share and remember this moment that luckily enough was caught on camera.</p>

<video class="video" controls>
    <source src="<?php echo $videos_url; ?>/davidhunter/kilmarnockcollege_graduation_2012.mp4" type="video/mp4">
</video>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "entry.php";
