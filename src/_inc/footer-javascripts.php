<?php if( isset( $footer_javascripts ) && is_array( $footer_javascripts ) ): ?>
    <?php foreach( $footer_javascripts as $footer_javascript_id => $footer_javascript ): ?>
        <script<?php if( is_string( $footer_javascript_id ) ) echo ' id="' . $footer_javascript_id . '"'; ?> src="<?php echo $footer_javascript; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
