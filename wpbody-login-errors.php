<?php

/**
 * @package    WPbody.com
 * @subpackage WPbody/Snippets
 * @author     Anass Rahou <contacto@wpbody.com>
 */

// Llamar al $tag y engancharlo en el hook de loggin_errors
add_filter( 'login_errors', 'wpbody_mensaje_error' );

/**
 * Personalizar mensaje de error de acceso
 * @param  object    $error    Objeto que mensaje los errores
 * @return string              Mensaje de error a mostrar
 */
function wpbody_mensaje_error( $error ) {
    /**
     * Llamar al objeto $errors
     */
    global $errors;
    /**
     * Averigua si existe algún error 
     */
    $wpbody_error = $errors->get_error_code();
    if( $wpbody_error ) {
        $wpbody_error_mensaje = __( '¡Favor verifique los datos de acceso!', 'textdomain' );
    }
    // Mensaje a mostrar en caso de equivocase
    return $wpbody_error_mensaje;
}

?>
