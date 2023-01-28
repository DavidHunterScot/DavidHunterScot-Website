<?php

$current_page = "blog";
$page_title = $article_title . " - Blog";

include __DIR__ . DIRECTORY_SEPARATOR . "header.php";

if( $article_author == "David Hunter" )
    $avatar_url = $avatars_url . "/davidhunter_illustration_transparent_1.png";

?>

<article class="blog-entry">
    <div class="metadata">
        <?php if( isset( $avatar_url ) && $avatar_url ): ?>
            <div class="avatar"><img src="<?php echo $avatar_url; ?>" alt="<?php echo $article_author; ?>'s Avatar"></div>
        <?php endif; ?>

        <div class="info">
            <p><b>Written By</b><br><?php echo $article_author; ?></p>
            <p><b>Published</b><br><?php echo str_replace( " at ", "<br>", date( $blog_datetime_format, strtotime( $article_date . " " . $article_time ) ) ); ?></p>
        </div>
    </div>
    
    <div class="content">
        <h2 class="title"><?php echo $article_title; ?></h2>

        <?php echo $article_content(); ?>
    </div>
</article>

<?php include __DIR__ . DIRECTORY_SEPARATOR . "footer.php"; ?>
