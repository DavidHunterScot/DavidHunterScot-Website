<?php

$current_page = "blog";
$page_title = "Blog";

include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "header.php";

$entries = array();

?>

<h2 class="section-title">All Blog Entries</h2>

<section class="blog-entries">
    <?php if( isset( $entries ) && is_array( $entries ) && count( $entries ) > 0 ): ?>
        <?php foreach( $entries as $entry ): ?>
            <?php if( isset( $entry['date'] ) ): ?>
                <?php include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'entry-snippet.php'; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No blog entries yet. Please check back later.</p>
    <?php endif; ?>
</section>

<?php include __DIR__ . DIRECTORY_SEPARATOR . "_inc" . DIRECTORY_SEPARATOR . "footer.php"; ?>
