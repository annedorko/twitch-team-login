<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Twitch_Team_Login
 * @subpackage Twitch_Team_Login/admin/partials
 */
?>

<div class="wrap">
    <h1>Twitch Team Settings</h1>

    <form class="" action="options.php" method="post">
        <h2 class="title">Twitch App Settings</h2>
        <p>You must register your WordPress site as a <a href="https://dev.twitch.tv/console/apps" target="_blank">Twitch app</a> in order to connect with the Twitch API.</p>
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row">OAuth Redirect URL</th>
                    <td>
                        <?php echo home_url( 'twitch/auth/' ); ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Twitch Client ID</th>
                    <td>
                        <input type="password" name="" value="" class="regular-text">
                        <p class="description">Find or create your <a href="https://dev.twitch.tv/console/apps" target="_blank">Twitch Client ID here</a>.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Twitch Client Secret</th>
                    <td>
                        <input type="password" name="" value="" class="regular-text">
                        <p class="description">Find or create your <a href="https://dev.twitch.tv/console/apps" target="_blank">Twitch Client Secret here</a>.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Authenticate App</th>
                    <td>
                        <input type="button" name="connect" value="Authenticate Twitch App" class="button" disable />
                    </td>
                </tr>
            </tbody>
        </table>
        <h2>Twitch Team Settings</h2>
        <p>You will be able to connect this website to a Twitch team after authenticating your WordPress account with Twitch.</p>
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row">Your Account</th>
                    <td>
                        <input type="button" name="connect" value="Connect to Twitch" class="button" disable />
                    </td>
                </tr>
                <tr>
                    <th scope="row">Team</th>
                    <td>
                        <select class="" name="" disabled>
                            <option value="">Twitch Team 1</option>
                            <option value="">Twitch Team 2</option>
                            <option value="">Twitch Team 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Permissions</th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="checkbox" name="" value=""> Restrict new site registrations to team members
                            </label>
                            <br>
                            <label>
                                <input type="checkbox" name="" value=""> Restrict logins to current members
                            </label>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" value="Save Changes" class="button button-primary">
        </p>
    </form>
</div>
