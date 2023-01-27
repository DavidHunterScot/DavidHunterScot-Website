<header>
    <div class="container">
        <h1><a href="/">David Hunter</a></h1>
        <p><i>Personal Website</i></p>
    </div>
</header>

<nav>
    <div class="container">
        <a href="/"<?php if( isset( $current_page ) && $current_page == "home" ): ?> class="current"<?php endif; ?>>Home</a>
        <a href="/about/"<?php if( isset( $current_page ) && $current_page == "about" ): ?> class="current"<?php endif; ?>>About</a>
        <a href="/blog/"<?php if( isset( $current_page ) && $current_page == "blog" ): ?> class="current"<?php endif; ?>>Blog</a>
    </div>
</nav>

<?php if( isset( $current_page ) && $current_page == "blog" ): ?>
<div class="blog-nav">
    <div class="container">
        <span><b>Blogs:</b></span>
        <a href="/blog/movies/"<?php if( $current_page == "blog movies" ): ?> class="current"<?php endif; ?>>Movies</a>
    </div>
</div>
<?php endif; ?>
