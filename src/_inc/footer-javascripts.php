<?php if( isset( $footer_javascripts ) && is_array( $footer_javascripts ) ): ?>
    <?php foreach( $footer_javascripts as $footer_javascript ): ?>
        <script src="<?php echo $footer_javascript; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
