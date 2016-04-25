<?php

/**
 * @package    WPbody.com
 * @subpackage WPbody.com/Snippets
 * @author     Anass Rahou <contacto@wpbody.com>
 */

// Llamar al $tag y engancharlo en el hook de loggin_errors
add_filter( 'login_errors', 'login_error_message' );

/**
 * Personalizar mensaje de error de acceso
 * @param  object    $error    Objeto que mensaje los errores
 * @return string              Mensaje de error a mostrar
 */
function login_error_message( $error ) {
    /**
     * Llamar al objeto $errors
     */
    global $errors;
    /**
     * Averigua si existe algún error 
     */
    $wpb_error = $errors->get_error_code();
    if( $wpb_error ) {
        $error_mensaje = __( '¡Favor verifique los datos de acceso!', 'textdomain' );;
    }
    // Mensaje a mostrar en caso de equivocase
    return $error_mensaje;
}

?>
