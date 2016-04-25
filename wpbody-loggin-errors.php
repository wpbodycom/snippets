<?php

/**
 * Call The $tag With The loggin_errors Hook
 */
add_filter( 'login_errors', 'login_error_message' );
function login_error_message( $error ) {
    /**
     * Call $errors Object
     */
    global $errors;
    /**
     * Call The Current Error, If Exists 
     */
    $wpb_error = $errors->get_error_code();
    if( $errors->get_error_code() ) {
        $error_mensaje = __( '¡Favor verifique los datos de acceso!', 'textdomain' );;
    }
    return $error_mensaje;
}

?>
