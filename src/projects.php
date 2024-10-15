---
page_title: Projects
current_page: projects
layout: src/_inc/base.php
---

<h2 style="text-transform: uppercase; text-align: center; font-size: 2.3rem;">Projects</h2>

<?php

$projects = array
(
    array
    (
        "title" => "Personal Website",
        "description" => "It is all about me",
        "url" => "https://davidhunter.webaddr.net",
        "image" => "/assets/images/avatars/davidhunter_illustration_transparent_1.png",
        "color" => "#333",
    ),
    array
    (
        "title" => "StaticPHP",
        "description" => "A Static Site Generator that turns PHP files into HTML files.",
        "url" => "https://staticphp.softwayr.net",
        "target" => "_blank",
        "image" => "/assets/images/logos/StaticPHP-Promo1.png",
        "color" => "#7A86B8",
    ),
    array
    (
        "title" => "Staticly",
        "description" => "The essential repository for Front End Web Developers.",
        "url" => "https://www.dah5.com/staticly",
        "image" => "",
        "color" => "#4A9CB3",
    ),
    array
    (
        "title" => "Network Tools",
        "description" => "Web based tools related to computer networks.",
        "url" => "https://networktools.webaddr.net",
        "target" => "_blank",
        "image" => "",
        "color" => "#ffffff",
    ),
    array
    (
        "title" => "DAH5",
        "description" => "The website that started it all, originally launched back in April 2005!",
        "url" => "https://www.dah5.com",
        "image" => "/assets/images/logos/dah5-logo-2024-alternate-150x35.png",
        "color" => "rgb( 38, 38, 38 )",
    ),
);
?>

<section class="projects">
    <div class="container">
        <?php

        for( $p = 0; $p < count( $projects ); $p++ )
        {
            $project = $projects[ $p ];
        ?>

        <div class="project">
            <?php if( $p % 2 === 0 ): ?>
                <div class="image left hide-mobile" style="background-image: url( '<?php echo $project['image']; ?>' ), linear-gradient( var( --angle-alt ), <?php if( isset( $project['color'] ) && $project['color'] ) echo $project['color']; else echo "#262626"; ?> 0%, var( --color-background-alt ) 50% );">&nbsp;</div>
            <?php endif; ?>
            <div class="info">
                <div class="title"><?php echo $project['title']; ?></div>
                <div class="description"><?php echo $project['description']; ?></div>
                <div class="url"><a href="<?php echo $project['url']; ?>"<?php if( isset( $project['target'] ) ) echo ' target="' . $project['target'] . '"'; ?>><?php echo $project['url']; ?></a></div>
            </div>
            <?php if( $p % 2 !== 0 ): ?>
                <div class="image right" style="background-image: url( '<?php echo $project['image']; ?>' ), linear-gradient( var( --angle ), <?php if( isset( $project['color'] ) && $project['color'] ) echo $project['color']; else echo "#262626"; ?> 0%, var( --color-background-alt ) 50% );">&nbsp;</div>
            <?php else: ?>
                <div class="image hide-desktop" style="background-image: url( '<?php echo $project['image']; ?>' ), linear-gradient( var( --angle ), <?php if( isset( $project['color'] ) && $project['color'] ) echo $project['color']; else echo "#262626"; ?> 0%, var( --color-background-alt ) 50% );">&nbsp;</div>
            <?php endif; ?>
        </div>

        <?php
        
        }

        ?>
    </div>
</section>