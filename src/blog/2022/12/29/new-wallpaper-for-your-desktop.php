<?php

$article_title = "New Wallpaper for your Desktop";
$article_description = "Check out this new wallpaper I made for my own desktop and want to share it with you.";
$article_author = "David Hunter";
$article_date = "2022-12-29";
$article_time = "17:00";

$article_content = function()
{
    define( "D_S", DIRECTORY_SEPARATOR );
    include __DIR__ . D_S . ".." . D_S . ".." . D_S . ".." . D_S . ".." . D_S . "_inc" . D_S . "config.php";
?>

<p><?php global $article_description; echo $article_description; ?></p>

<p><img src="<?php echo $images_url; ?>/wallpapers/davidhunter_website_url_dark_desktop_1.png" alt="David Hunter Website URL Dark Desktop Wallpaper Image"></p>

<p>You can right click on it with your mouse and choose save as to download it to your computer, or press and hold with your finger on mobile devices and save to your gallery/photos or files to download it on a mobile device.</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
{
    define( "D_S", DIRECTORY_SEPARATOR );
    include __DIR__ . D_S . ".." . D_S . ".." . D_S . ".." . D_S . ".." . D_S . "_inc" . D_S . "entry.php";
}
