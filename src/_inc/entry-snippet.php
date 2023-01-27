<article>
    <h3 class="title"><?php echo $entry['title']; ?></h3>
    <p class="metadata">Published by <?php if( isset( $entry['avatar_url'] ) ): ?><img src="<?php echo $entry['avatar_url']; ?>" alt="<?php echo $entry['author']; ?>'s Avatar" class="avatar"><?php endif; ?> <?php echo $entry['author']; ?> on <?php echo date( $blog_datetime_format, strtotime( $entry['date'] . " " . $entry['time'] ) ); ?>.</p>
    <p class="description"><?php echo $entry['description']; ?></p>
    <p class="buttons">
        <a href="/blog/<?php echo $entry['permalink']; ?>">Read More</a>
    </p>
</article>
