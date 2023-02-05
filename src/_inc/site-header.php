<header>
    <div class="container">
        <h1><a href="/">David Hunter</a></h1>
        <p><i>Personal Website</i></p>
    </div>
</header>

<nav>
    <div class="container">
        <a href="/"<?php if( isset( $current_page ) && $current_page == "home" ): ?> class="current"<?php endif; ?>>Home</a>
        <a href="/blog/"<?php if( isset( $current_page ) && $current_page == "blog" ): ?> class="current"<?php endif; ?>>Blog</a>
    </div>
</nav>
