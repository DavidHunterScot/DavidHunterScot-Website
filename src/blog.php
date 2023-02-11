<?php

$current_page = "blog";
$page_title = "Blog";

function get_blog_entries( String $path_to_blog_entries, &$entries, $root_path_to_blog_entries )
{
    $dir_items = scandir( $path_to_blog_entries );

    foreach( $dir_items as $dir_item )
    {
        if( $dir_item == "." || $dir_item == ".." )
            continue;
        
        $path_to_dir_item = $path_to_blog_entries . DIRECTORY_SEPARATOR . $dir_item;

        if( is_dir( $path_to_dir_item ) )
        {
            get_blog_entries( $path_to_dir_item, $entries, $root_path_to_blog_entries );
            continue;
        }

        if( ! is_file( $path_to_dir_item ) || substr( $dir_item, -4 ) != ".php" )
            continue;
        
        include $path_to_dir_item;

        if( ! isset( $article_title, $article_date, $article_time, $article_description, $article_author ) )
            continue;
        
        $entry['title'] = $article_title;
        $entry['date'] = $article_date;
        $entry['time'] = $article_time;
        $entry['description'] = $article_description;
        $entry['author'] = $article_author;
        $entry['permalink'] = str_replace( array( "\\", ".php" ), "/", substr( $path_to_dir_item, strlen( $root_path_to_blog_entries ) + 1 ) );

        if( $article_author == "David Hunter" )
        {
            include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "config.php";
            $entry['avatar_url'] = $avatars_url . "/davidhunter_illustration_transparent_1.png";
        }

        $entries[] = $entry;
    }
}

$page_content = function()
{
    include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "config.php";
    
    $root_path_to_blog_entries = __DIR__ . DIRECTORY_SEPARATOR . "blog";

    $entries = array();
    
    get_blog_entries( $root_path_to_blog_entries, $entries, $root_path_to_blog_entries );

    $entries = array_reverse( $entries );
?>

<h2 class="section-title">All Blog Entries</h2>

<section class="blog-entries">
    <?php if( isset( $entries ) && is_array( $entries ) && count( $entries ) > 0 ): ?>
        <?php foreach( $entries as $entry ): ?>
            <?php include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "entry-snippet.php"; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No blog entries yet. Please check back later.</p>
    <?php endif; ?>
</section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "base.php";
