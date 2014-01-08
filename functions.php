<?php //Opening PHP tag

// Custom Function to Include
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

// Disabling Gallery default styling
add_filter( 'use_default_gallery_style', '__return_false' );


?> 
