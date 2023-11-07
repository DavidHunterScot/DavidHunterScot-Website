<header class="dh">
    <div class="container">
        <div class="logo">
            <h1 class="title"><a href="/">--- metadata.site_title ---</a></h1>
            <p class="tagline">--- metadata.site_tagline ---</p>
        </div>

        <nav>
            <a href="/"<?php if( isset( $metadata['current_page'] ) && $metadata['current_page'] == "home" ): ?> class="current"<?php endif; ?>>Home</a>
            <a href="/blog"<?php if( isset( $metadata['current_page'] ) && $metadata['current_page'] == "blog" ): ?> class="current"<?php endif; ?>>Blog</a>
            <a href="/projects"<?php if( isset( $metadata['current_page'] ) && $metadata['current_page'] == "projects" ): ?> class="current"<?php endif; ?>>Projects</a>
        </nav>
    </div>
</header>
