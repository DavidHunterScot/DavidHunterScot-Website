---
site_title: David Hunter
site_tagline: Internet Services Specialist
site_author: David Hunter

website_source_code_url: https://github.com/DavidHunterScot/Website

images_url: https://assets.weburl.net/images
videos_url: https://assets.weburl.net/videos
webfonts_url: /assets/webfonts

content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata['article_title'] ) && $metadata['article_title'] ): echo $metadata['article_title'] . ' - Blog - '; endif; if( isset( $metadata['page_title'] ) && $metadata['page_title'] ) echo $metadata['page_title'] . ' - '; ?><?php echo $metadata['site_title']; ?><?php if( ! isset( $metadata['page_title'] ) && ! isset( $metadata['article_title'] ) ) echo ' - ' . $metadata['site_tagline']; ?></title>

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <link rel="stylesheet" type="text/css" href="<?php echo $metadata['webfonts_url']; ?>/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'stylesheets.php'; ?>
    </head>
    
    <body>
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'site-header.php'; ?>

        <?php

        if( isset( $metadata['article_author'] ) && $metadata['article_author'] == "David Hunter" )
            $avatar_url = $metadata['images_url'] . "/avatars/davidhunter_illustration_transparent_1.png";

        ?>

        <main>
            <div class="container">
                <?php if( isset( $metadata['article_title'], $metadata['article_description'], $metadata['article_author'], $metadata['article_date'], $metadata['article_time'] ) ): ?>
                    <article class="blog-entry">
                        <div class="metadata">
                            <?php if( isset( $avatar_url ) && $avatar_url ): ?>
                                <div class="avatar"><img src="<?php echo $avatar_url; ?>" alt="<?php echo $metadata['article_author']; ?>'s Avatar"></div>
                            <?php endif; ?>

                            <div class="info">
                                <p><b>Written By</b><br>--- metadata.article_author ---</p>
                                <p><b>Published</b><br><?php echo str_replace( " at ", "<br>", date( "jS F Y \a\\t g:i a", strtotime( $metadata['article_date'] . " " . $metadata['article_time'] ) ) ); ?></p>
                            </div>
                        </div>
                        
                        <div class="content">
                            <h2 class="title">--- metadata.article_title ---</h2>

                            {{ content }}
                        </div>
                    </article>
                <?php else: ?>
                    {{ content }}
                <?php endif; ?>
            </div>
        </main>

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'site-footer.php'; ?>

        <script type="text/javascript" src="/assets/js/anti-email-harvesting.js"></script>
        <script type="text/javascript" src="/assets/js/toggle-color-scheme.js"></script>
        
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'footer-javascripts.php'; ?>
    </body>
</html>
