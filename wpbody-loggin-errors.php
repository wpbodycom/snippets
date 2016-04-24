<?php

add_filter( 'login_errors', 'login_error_message' );

function login_error_message( $error ) {
    /**
     * Global variable $errors 
     */
    global $errors;
    /**
     * Prepare the error to view to the admin
     */
    $error = sprintf( ucwords( str_replace( '_', ' ', $errors->get_error_code() ) ), '%s' );
    if( $errors->get_error_code() ) {
        $error;
    }
    // Return the error message
    return $error;
}

?>
