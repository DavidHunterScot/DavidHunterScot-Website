<?php

$current_page = "blog";
$page_title = "Blog";

$footer_javascripts['blog-search'] = "/assets/js/blog-search.js";

if( ! function_exists( "get_blog_entries" ) )
{
    function get_blog_entries( String $path_to_blog_entries, &$entries, $root_path_to_blog_entries )
    {
        include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "config.php";
        
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
            $entry['datetime'] = date( $blog_datetime_format, strtotime( $article_date . " " . $article_time ) );
            $entry['description'] = $article_description;
            $entry['author'] = $article_author;
            $entry['permalink'] = "/blog/" . str_replace( array( "\\", ".php" ), "/", substr( $path_to_dir_item, strlen( $root_path_to_blog_entries ) + 1 ) );

            if( $article_author == "David Hunter" )
            {
                include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "config.php";
                $entry['avatar_url'] = $avatars_url . "/davidhunter_illustration_transparent_1.png";
            }

            $entries[] = $entry;
        }
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

<form class="blog-search-form" id="blog-search-form">
    <fieldset>
        <input type="text" name="searchbox" id="searchbox">
        <button type="submit">Search</button>
    </fieldset>
</form>

<h2 class="section-title">All Blog Entries</h2>

<section class="blog-entries">
    <?php if( isset( $entries ) && is_array( $entries ) && count( $entries ) > 0 ): ?>
        <?php foreach( $entries as $entry ): ?>
            <?php
                $entry_snippet = file_get_contents( __DIR__ . DIRECTORY_SEPARATOR . "api" . DIRECTORY_SEPARATOR . "blog" . DIRECTORY_SEPARATOR . "entry-snippet.txt" );

                $avatar_image = isset( $entry['avatar_url'] ) ? '<img src="' . $entry['avatar_url'] . '" alt="' . $entry['author'] . '\'s Avatar" class="avatar">' : '';

                $entry_snippet = str_replace
                (
                    array
                    (
                        "TITLE",
                        "AVATAR IMAGE",
                        "AUTHOR NAME",
                        "DATETIME",
                        "DESCRIPTION",
                        "PERMALINK",
                    ),
                    array(
                        $entry['title'],
                        $avatar_image,
                        $entry['author'],
                        $entry['datetime'],
                        $entry['description'],
                        $entry['permalink'],
                    ),
                    $entry_snippet
                );

                echo $entry_snippet;
            ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No blog entries yet. Please check back later.</p>
    <?php endif; ?>
</section>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
    include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "base.php";
