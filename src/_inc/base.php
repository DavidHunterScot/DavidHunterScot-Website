---
site_title: David Hunter
site_tagline: Internet Services Specialist
site_author: David Hunter

website_source_code_url: https://weburl.net/github/davidhunterscot/website

images_url: https://assets.davidhunter.scot/images
videos_url: https://assets.davidhunter.scot/videos
webfonts_url: /assets/webfonts

stylesheets:
- /assets/webfonts/poppins/poppins.min.css
- /assets/css/stylesheet.min.css

javascripts:
- /assets/js/anti-email-harvesting.min.js
- /assets/js/toggle-color-scheme.min.js

content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>--- if( article_title ) ------ metadata.article_title --- - Blog - --- endif ------ if( page_title ) ------ metadata.page_title --- - --- endif ------ metadata.site_title ------ if( ! page_title && ! article_title ) --- - --- metadata.site_tagline ------ endif ---</title>
        
        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        --- loop( metadata = "stylesheets" ) ---
        <link rel="stylesheet" type="text/css" href="--- loop.item ---">
        --- endloop ---
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

        --- loop( metadata = "javascripts" ) ---
        <script type="text/javascript" src="--- loop.item ---"></script>
        --- endloop ---
    </body>
</html>
