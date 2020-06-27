<?php

add_action('admin_menu', array( $this, 'addPluginAdminMenu' ), 9);

public function addPluginAdminMenu() {
    //add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    add_menu_page(  $this->plugin_name, 'Plugin Name', 'administrator', $this->plugin_name, array( $this, 'displayPluginAdminDashboard' ), 'dashicons-chart-area', 26 );
    
    //add_submenu_page( '$parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );
    add_submenu_page( $this->plugin_name, 'Plugin Name Settings', 'Settings', 'administrator', $this->plugin_name.'-settings', array( $this, 'displayPluginAdminSettings' ));
    }

    public function displayPluginAdminDashboard() {
		require_once 'partials'.$this->plugin_name.'-admin-display.php';
  }

  public function displayPluginAdminSettings() {
    // set this var to be used in the settings-display view
    $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'general';
    if(isset($_GET['error_message'])){
        add_action('admin_notices', array($this,'pluginNameSettingsMessages'));
        do_action( 'admin_notices', $_GET['error_message'] );
    }
    require_once 'partials/'.$this->plugin_name.'-admin-settings-display.php';
}

public function pluginNameSettingsMessages($error_message){
    switch ($error_message) {
        case '1':
            $message = __( 'There was an error adding this setting. Please try again.  If this persists, shoot us an email.', 'my-text-domain' );                 
            $err_code = esc_attr( 'plugin_name_example_setting' );                 
            $setting_field = 'plugin_name_example_setting';                 
            break;
    }
    $type = 'error';
    add_settings_error(
           $setting_field,
           $err_code,
           $message,
           $type
       );
}
