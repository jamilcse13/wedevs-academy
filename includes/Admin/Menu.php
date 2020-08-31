<?php

namespace WeDevs\Academy\Admin;

/**
 * Menu handler class
 */
class Menu
{
    /**
     * initialize the class
     */
    function __construct() 
    {
        add_action( 'admin_menu', [ $this, 'admin_menu' ] );
    }

    /**
     * register admin menu
     */
    public function admin_menu()
    {
        $parent_slug = 'wedevs-academy';
        $capability = 'manage_options';
        add_menu_page( __( 'WeDevs Academy', 'wedevs-academy' ), __( 'Academy', 'wedevs-academy' ), $capability, $parent_slug, [ $this, 'addressbook_page' ], 'dashicons-welcome-learn-more' );
        add_submenu_page( $parent_slug, __( 'Address Book', 'wedevs-academy' ), __( 'Address Book', 'wedevs-academy' ), $capability, $parent_slug, [ $this, 'addressbook_page' ] );
        add_submenu_page( $parent_slug, __( 'Settings', 'wedevs-academy' ), __( 'Settings', 'wedevs-academy' ), $capability, 'wedevs-academy-settings', [ $this, 'settings_page' ] );
    }

    /**
     * render the plugin page
     */
    // public function plugin_page()
    // {
    //     echo "Hello World";
    // }

    /**
     * render the addressbook page
     */
    public function addressbook_page()
    {
        $addressbook = new Addressbook();
        $addressbook->plugin_page();
    }

    /**
     * render the settings page
     */
    public function settings_page()
    {
        echo "Hello Settings";
    }
}
