<?php

function wpbody_content_filter( $content ) {
    return strtoupper( $content );
}
add_filter( 'the_content', 'wpbody_content_filter' );

?>
