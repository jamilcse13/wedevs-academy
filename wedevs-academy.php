<?php

/**
 * Plugin Name: WeDevs Academy
 * Description: A tutorial plugin for weDevs Academy
 * Plugin URI: https://enzaime.com
 * Author: Jamil Ahsan
 * Author URI: https://www.linkedin.com/in/md-jamil-ahsan-cuet/
 * Version: 1.0
 * License: GPL2 or later
 */

if ( !defined( 'ABSPATH' ) ) {
     exit;
}

require_once __DIR__ . '/vendor/autoload.php';

/**
 * The main plugin class
 * as anyone can't change the class, so we use final
 */

final class WeDevs_Academy
{

    /**
     * plugin version
     */
    const version = '1.0';

    /**
     * class constructor
     * as anyone can't initialize this function
     */

    private function __construct() {

        $this->define_constants();

        register_activation_hook( __FILE__, [ $this, 'activate' ] );

        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );
    }

    /**
     * initializes a singleton instance
     * 
     * @return \WeDevs_Academy
     */

    public static function init()
    {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * define the required plugin constants
     * 
     * @return void
     */
    public function define_constants()
    {
        define ( 'WD_ACADEMY_VERSION', self::version );
        define ( 'WD_ACADEMY_FILE', __FILE__ );
        define ( 'WD_ACADEMY_PATH', __DIR__ );
        define ( 'WD_ACADEMY_URL', plugins_url( '', WD_ACADEMY_FILE ) );
        define ( 'WD_ACADEMY_ASSETS', WD_ACADEMY_URL . '/assets' );
    }

    /**
     * initialize the plugin
     * 
     * @return void
     */
    public function init_plugin()
    {
        if ( is_admin() ) {
            new WeDevs\Academy\Admin();
        } else {
            new WeDevs\Academy\Frontend();
        }
    }

    /**
     * do stuff upon plugin activation
     * 
     * @return void
     */
    public function activate()
    {
        $installed = get_option( 'wp_academy_installd' );

        if ( ! $installed ) {
            update_option( 'wp_academy_installed', time() );
        }

        update_option( 'wd_academy_version', WD_ACADEMY_VERSION );
    }
}

/**
 * initialize the main plugin
 * 
 * @return \WeDevs_Academy
 */
function wedevs_academy()
{
    return WeDevs_Academy::init();
}

/**
 * kick-off the plugin
 */
wedevs_academy();