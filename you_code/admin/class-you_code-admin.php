<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://wordpress.org/plugins/you_code/
 * @since      1.0.0
 *
 * @package    You_code
 * @subpackage You_code/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    You_code
 * @subpackage You_code/public
 * @author     you code Mullenweg <ayoub.elbouinany99@gmail.com>
 */
class you_code_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action('admin_menu', array( $this, 'addPluginAdminMenu' ), 9);

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in My_plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The My_plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/my_plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in My_plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The My_plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/my_plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function addPluginAdminMenu() {
		//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
		add_menu_page(  $this->plugin_name, 'you_code', 'administrator', $this->plugin_name, array( $this, 'displayPluginAdminDashboard' ), 'dashicons-chart-area', 26 );
		
		//add_submenu_page( '$parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );
		add_submenu_page( $this->plugin_name, 'Settings', 'Settings', 'administrator', $this->plugin_name.'-settings', array( $this, 'displayPluginAdminSettings' ));
		}

		public function displayPluginAdminDashboard() {
			require_once 'partials/you_code-admin-dashboard.php';
	  }
	  public function displayPluginAdminSettings() {
		require_once 'partials/you_code-admin-display.php';
  }



}
