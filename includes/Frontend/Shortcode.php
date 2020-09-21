<?php

namespace WeDevs\Academy\Frontend;

/**
 * Shortcode handler class
 */
class Shortcode
{

    /**
     * Initialize the class
     */
    function __construct()
    {
        add_shortcode( 'wedevs-academy', [ $this, 'render_shortcode' ] );
    }

    /**
     * Shortcode handler class
     * 
     * @return string
     */
    public function render_shortcode( $atts, $content = '' )
    {
        wp_enqueue_script( 'academy-script' );
        wp_enqueue_style( 'academy-style' );
        
        return '<div class="academy-shortcode">Hello from Shortcode</div>';
    }
}
