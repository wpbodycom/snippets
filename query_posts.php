<?php

class WPbody_Posts {
    
    /**
     * Llamar a las acciones definidas en las
     * funciones después de instanciar la clase
     */
    public function __construct() {
        add_action( 'pre_get_posts', array($this, 'wpbody_rand_posts') );
        add_action( 'the_content', array($this, 'wpbody_content') );
    }
    
    /**
     * Obtener entradas de consulta personalizada
     * mediante la función query_posts()
     * @return array entradas de la consulta personalizada
     */
    public function wpbody_rand_posts() {

        /**
         * Comprueba que se trata de la principal página
         * del blog y que es el query del Loop principal
         */
        if( is_home() && is_main_query() ) {
            /**
             * Argumentos de la consulta
             * @var array
             */
            $args = array(
                'cat' => '2',
            );
            query_posts( $args );
        }
    }

}
/**
 * [$wpbody_query description]
 * @var WPbody_Posts
 */
$wpbody_query = new WPbody_Posts();

?>
