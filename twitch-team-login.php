<?php

/**
 * @link              http://example.com
 * @since             1.0.0
 * @package           Twitch_Team_Login
 *
 * @wordpress-plugin
 * Plugin Name:       Twitch Team Login
 * Plugin URI:        https://github.com/annedorko/twitch-team-login
 * Description:       Allow members of a Twitch team to login to a WordPress website.
 * Version:           1.0.0
 * Author:            Anne Dorko
 * Author URI:        https://dorko.dev/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       twitch-team-login
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TWITCH_TEAM_LOGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-twitch-team-login-activator.php
 */
function activate_twitch_team_login() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-twitch-team-login-activator.php';
	Twitch_Team_Login_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-twitch-team-login-deactivator.php
 */
function deactivate_twitch_team_login() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-twitch-team-login-deactivator.php';
	Twitch_Team_Login_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_twitch_team_login' );
register_deactivation_hook( __FILE__, 'deactivate_twitch_team_login' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-twitch-team-login.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_twitch_team_login() {

	$plugin = new Twitch_Team_Login();
	$plugin->run();

}
run_twitch_team_login();
