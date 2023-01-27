<?php

$article_title = "Movie: Snow White and the Huntsman (2012)";
$article_description = "Just watched a movie called Snow White and the Huntsman released a decade ago.";
$article_author = "David Hunter";
$article_date = "2022-10-15";
$article_time = "02:42";

$article_content = function()
{
?>

<p>Oh wow, what an amazing movie!</p>

<p>I got pulled in at every moment of action. Normally, I don't like action that much, but with Kristen Stweart as Snow White, I was transfixed at how well she suited the role.</p>

<p>Literally, I forgot how the story goes, and I legit felt like Snow White died, especially when she was kissed and that did absolutely nothing. I shed a tear.</p>

<p>I won't say much more other than you should totally watch this movie!</p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
{
    define( "D_S", DIRECTORY_SEPARATOR );
    include __DIR__ . D_S . ".." . D_S . ".." . D_S . ".." . D_S . ".." . D_S . "_inc" . D_S . "entry.php";
}
