<?php include __DIR__ . DIRECTORY_SEPARATOR . 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo isset( $page_title ) && $page_title ? $page_title . ' - ' : ''; ?>David Hunter</title>

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'stylesheets.php'; ?>
    </head>
    
    <body>
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'site-header.php'; ?>

        <main>
            <div class="container">
