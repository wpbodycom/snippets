<?php

add_filter( 'login_errors', 'login_error_message' );

function login_error_message( $error ) {
    /**
     * Call the Object errors 
     */
    global $errors;
    /**
     * Prepare the error message that will be displayed for admin
     */
    $wpb_error = ucwords( str_replace( '_', ' ', $errors->get_error_code() ) );
    $error = __( $wpb_error, 'textdomain' );
    if( $errors->get_error_code() ) {
        $error;
    }
    // Return the  displayed error message
    return $error;
}

?>
