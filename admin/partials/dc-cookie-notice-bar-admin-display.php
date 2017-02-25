<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.3.0
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1><?php _e( 'Cookie Notice Bar', 'dc-cookie-notice-bar' ); ?></h1>
<form method="post" action="options.php">
    <!--necessaria per il corretto aggiornamento dei dati-->
    <?php settings_fields('dc_cnb_options_group'); ?>
    <?php settings_errors(); ?>
    <h2><?php _e( 'Configuration', 'dc-cookie-notice-bar' ); ?></h2>
    <table class="form-table">
           <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_activate"><?php _e( 'Enable / Disable', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                      <label for="dc_cnb_activate">
                          <input type="checkbox" id="dc_cnb_activate" value="1" <?php checked(get_option('dc_cnb_activate'), 1); ?> name="dc_cnb_activate"> <?php _e( 'Activate Options', 'dc-cookie-notice-bar' ); ?>
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_message"><?php _e( 'Message', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                      <label for="dc_cnb_message">
                      	  <textarea id="dc_cnb_message" name="dc_cnb_message" class="large-text" cols="50" rows="5"><?php echo get_option('dc_cnb_message'); ?>
                      	  </textarea>
                      	  <p class="description"><?php _e( 'The notice message into the cookie bar.', 'dc-cookie-notice-bar' ); ?></p>
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_button_text"><?php _e( 'Button Text', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_button_text" value="<?php echo get_option('dc_cnb_button_text'); ?>" name="dc_cnb_button_text" class="regular-text">
                        <p class="description"><?php _e( 'The text of the button to accept the usage of the cookies.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_time"><?php _e( 'Cookie expiry', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <select id="dc_cnb_time" name="dc_cnb_time">
                            <option value="day" <?php selected(get_option('dc_cnb_time'), 'day'); ?> ><?php _e( '1 day', 'dc-cookie-notice-bar' ); ?></option>
                            <option value="week" <?php selected(get_option('dc_cnb_time'), 'week'); ?> ><?php _e( '1 week', 'dc-cookie-notice-bar' ); ?></option>
                            <option value="month" <?php selected(get_option('dc_cnb_time'), 'month'); ?> ><?php _e( '1 month', 'dc-cookie-notice-bar' ); ?></option>
                            <option value="3months" <?php selected(get_option('dc_cnb_time'), '3months'); ?> ><?php _e( '3 months', 'dc-cookie-notice-bar' ); ?></option>
                            <option value="6months" <?php selected(get_option('dc_cnb_time'), '6months'); ?> ><?php _e( '6 months', 'dc-cookie-notice-bar' ); ?></option>
                            <option value="year" <?php selected(get_option('dc_cnb_time'), 'year'); ?> ><?php _e( '1 year', 'dc-cookie-notice-bar' ); ?></option>
                            <option value="infinity" <?php selected(get_option('dc_cnb_time'), 'infinity'); ?> ><?php _e( 'infinity', 'dc-cookie-notice-bar' ); ?></option>
                        </select>
                        <p class="description"><?php _e( 'The amount of time that cookie should be stored for.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_read_more_text"><?php _e( 'Read More Text', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_read_more_text" value="<?php echo get_option('dc_cnb_read_more_text'); ?>" name="dc_cnb_read_more_text" class="regular-text">
                        <p class="description"><?php _e( 'The text of the link "Read More". For add to the text use the shortcode [dc-cnb-read-more] in the Message Text.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_read_more_link"><?php _e( 'Read More Link', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_read_more_link" value="<?php echo get_option('dc_cnb_read_more_link'); ?>" name="dc_cnb_read_more_link" class="regular-text">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_read_more_target"><?php _e( 'Read More Target', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <select id="dc_cnb_read_more_target" name="dc_cnb_read_more_target">
                            <option value="_blank" <?php selected(get_option('dc_cnb_read_more_target'), '_blank'); ?> ><?php _e( '_blank', 'dc-cookie-notice-bar' ); ?></option>
                            <option value="_self" <?php selected(get_option('dc_cnb_read_more_target'), '_self'); ?> ><?php _e( '_self', 'dc-cookie-notice-bar' ); ?></option>
                        </select>
                    </td>
                </tr>
            </tbody>
       </table>

        <h2><?php _e( 'Design', 'dc-cookie-notice-bar' ); ?></h2>
        <table class="form-table">
           <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_position"><?php _e( 'Position', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <select id="dc_cnb_position" name="dc_cnb_position">
                            <option value="top" <?php selected(get_option('dc_cnb_position'), 'top'); ?> ><?php _e( 'Top', 'dc-cookie-notice-bar' ); ?></option>
                            <option value="bottom" <?php selected(get_option('dc_cnb_position'), 'bottom'); ?> ><?php _e( 'Bottom', 'dc-cookie-notice-bar' ); ?></option>
                        </select>
                        <p class="description"><?php _e( 'The position where you want display the notice.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_text_background"><?php _e( 'Background Color', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_text_background" value="<?php echo get_option('dc_cnb_text_background'); ?>" name="dc_cnb_text_background" class="regular-text" data-default-color="#000000">
                        <p class="description"><?php _e( 'The background color of the notice.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_text_color"><?php _e( 'Text Color', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_text_color" value="<?php echo get_option('dc_cnb_text_color'); ?>" name="dc_cnb_text_color" class="regular-text" data-default-color="#ffffff">
                        <p class="description"><?php _e( 'The text color of the notice.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_button_background"><?php _e( 'Button Background Color', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_button_background" value="<?php echo get_option('dc_cnb_button_background'); ?>" name="dc_cnb_button_background" class="regular-text" data-default-color="#e24545">
                        <p class="description"><?php _e( 'The background color of the button to accept the usage of the cookies.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_button_text"><?php _e( 'Button Text Color', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_button_color" value="<?php echo get_option('dc_cnb_button_color'); ?>" name="dc_cnb_button_color" class="regular-text" data-default-color="#ffffff">
                        <p class="description"><?php _e( 'The text color of the button to accept the usage of the cookies.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_button_padding"><?php _e( 'Button Padding', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_button_padding" value="<?php echo get_option('dc_cnb_button_padding'); ?>" name="dc_cnb_button_padding" class="regular-text">
                        <p class="description"><?php _e( 'The padding of the button to accept the usage of the cookies  (e.g. 5px 10px).', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_button_border_radius"><?php _e( 'Button Border Radius', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_button_border_radius" value="<?php echo get_option('dc_cnb_button_border_radius'); ?>" name="dc_cnb_button_border_radius" class="regular-text">
                        <p class="description"><?php _e( 'The border radius of the button to accept the usage of the cookies (e.g. 8px).', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_read_more_color"><?php _e( 'Read More Color', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_read_more_color" value="<?php echo get_option('dc_cnb_read_more_color'); ?>" name="dc_cnb_read_more_color" class="regular-text" data-default-color="#e24545">
                        <p class="description"><?php _e( 'The color of the Read More text.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_read_more_hover_color"><?php _e( 'Read More Hover Color', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_read_more_hover_color" value="<?php echo get_option('dc_cnb_read_more_hover_color'); ?>" name="dc_cnb_read_more_hover_color" class="regular-text" data-default-color="#e24545">
                        <p class="description"><?php _e( 'The color of the Read More text on hover.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
            </tbody>
       </table>

       <h2><?php _e( 'Advanced', 'dc-cookie-notice-bar' ); ?></h2>
        <table class="form-table">
            <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_debug_mode"><?php _e( 'Debug Mode', 'dc-cookie-notice-bar' ); ?></label>
                    </th>
                    <td>
                      <label for="dc_cnb_debug_mode">
                          <input type="checkbox" id="dc_cnb_debug_mode" value="1" <?php checked(get_option('dc_cnb_debug_mode'), 1); ?> name="dc_cnb_debug_mode"> <?php _e( 'Activate Debug Mode', 'dc-cookie-notice-bar' ); ?>
                      </label>
                      <p class="description"><?php _e( 'When debug mode is active the Cookie Notice Bar is always displayed.', 'dc-cookie-notice-bar' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                   <th scope="row"></th>
                   <td>
                       <p>
                           <?php submit_button(); ?>
                       </p>
                   </td>
                </tr>
            </tbody>
       </table>
</form>