<?php

add_filter( 'login_errors', 'login_error_message' );
function login_error_message( $error ) {
    global $errors;
    $error = sprintf( ucwords( str_replace( '_', ' ', $errors->get_error_code() ) ), '%s' );
    if( $errors->get_error_code() ) {
        $error;
    }
    return $error;
}

?>
