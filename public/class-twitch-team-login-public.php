<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Twitch_Team_Login
 * @subpackage Twitch_Team_Login/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Twitch_Team_Login
 * @subpackage Twitch_Team_Login/public
 * @author     Your Name <email@example.com>
 */
class Twitch_Team_Login_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $twitch_team_login    The ID of this plugin.
	 */
	private $twitch_team_login;

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
	 * @param      string    $twitch_team_login       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $twitch_team_login, $version ) {

		$this->twitch_team_login = $twitch_team_login;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Twitch_Team_Login_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Twitch_Team_Login_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->twitch_team_login, plugin_dir_url( __FILE__ ) . 'css/twitch-team-login-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Twitch_Team_Login_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Twitch_Team_Login_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->twitch_team_login, plugin_dir_url( __FILE__ ) . 'js/twitch-team-login-public.js', array( 'jquery' ), $this->version, false );

	}

}
