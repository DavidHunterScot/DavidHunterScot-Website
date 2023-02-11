<?php include __DIR__ . DIRECTORY_SEPARATOR . 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . ' - '; ?><?php echo $site_title; ?><?php if( ! isset( $page_title ) || ! $page_title ) echo ' - ' . $site_tagline; ?></title>

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'stylesheets.php'; ?>
    </head>
    
    <body>
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'site-header.php'; ?>

        <main>
            <div class="container">

                <?php
                if( isset( $page_content ) && is_callable( $page_content ) )
                {
                    if( isset( $article_title, $article_author, $article_date, $article_time, $article_content ) && is_string( $article_title ) && is_string( $article_author ) && is_string( $article_date ) && is_string( $article_title ) && is_callable( $article_content ) )
                    {
                        $page_content( $article_title, $article_author, $article_date, $article_time, $article_content );
                    }
                    else
                    {
                        $page_content();
                    }
                }
                ?>
            
            </div>
        </main>

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'site-footer.php'; ?>

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'footer-javascripts.php'; ?>
    </body>
</html>
