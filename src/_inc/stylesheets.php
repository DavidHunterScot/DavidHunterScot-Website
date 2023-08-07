<?php if( isset( $stylesheets ) && is_array( $stylesheets ) ): ?>
    <?php foreach( $stylesheets as $stylesheet_id => $stylesheet ): ?>
        <link rel="stylesheet" type="text/css"<?php if( is_string( $stylesheet_id ) ) echo ' id="' . $stylesheet_id . '"'; ?> href="<?php echo $stylesheet; ?>">
    <?php endforeach; ?>
<?php endif; ?>
