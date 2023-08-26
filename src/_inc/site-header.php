<header>
    <div class="container">
        <div class="logo">
            <h1 class="title"><a href="/"><?php echo $site_title; ?></a></h1>
            <p class="tagline"><?php echo $site_tagline; ?></p>
        </div>

        <nav>
            <a href="/"<?php if( isset( $current_page ) && $current_page == "home" ): ?> class="current"<?php endif; ?>>Home</a>
            <a href="/blog/"<?php if( isset( $current_page ) && $current_page == "blog" ): ?> class="current"<?php endif; ?>>Blog</a>
            <a href="https://projects.davidhunter.ict.rocks/" target="_blank">Projects</a>
        </nav>
    </div>
</header>
