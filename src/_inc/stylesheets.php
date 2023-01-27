<?php if( isset( $stylesheets ) && is_array( $stylesheets ) ): ?>
    <?php foreach( $stylesheets as $stylesheet ): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
    <?php endforeach; ?>
<?php endif; ?>
