<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1>Cookie Notice Bar</h1>
<form method="post" action="options.php">
    <!--necessaria per il corretto aggiornamento dei dati-->
    <?php settings_fields('dc_cnb_options_group'); ?>
    <?php settings_errors(); ?>
    <h2>Configuration</h2>
    <table class="form-table">
           <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_activate">Enable / Disable</label>
                    </th>
                    <td>
                      <label for="dc_cnb_activate">
                          <input type="checkbox" id="dc_cnb_activate" value="1" <?php checked(get_option('dc_cnb_activate'), 1); ?> name="dc_cnb_activate"> Activate Options
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_message">Message</label>
                    </th>
                    <td>
                      <label for="dc_cnb_message">
                      	  <textarea id="dc_cnb_message" name="dc_cnb_message" class="large-text" cols="50" rows="5"><?php echo get_option('dc_cnb_message'); ?>
                      	  </textarea>
                      	  <p class="description">The notice message into the cookie bar.</p>
                      </label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_button_text">Button Text</label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_button_text" value="<?php echo get_option('dc_cnb_button_text'); ?>" name="dc_cnb_button_text" class="regular-text">
                        <p class="description">The text of the button to accept the usage of the cookies.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_time">Cookie expiry</label>
                    </th>
                    <td>
                        <select id="dc_cnb_time" name="dc_cnb_time">
                            <option value="day" <?php selected(get_option('dc_cnb_time'), 'day'); ?> >1 day</option>
                            <option value="week" <?php selected(get_option('dc_cnb_time'), 'week'); ?> >1 week</option>
                            <option value="month" <?php selected(get_option('dc_cnb_time'), 'month'); ?> >1 month</option>
                            <option value="3months" <?php selected(get_option('dc_cnb_time'), '3months'); ?> >3 months</option>
                            <option value="6months" <?php selected(get_option('dc_cnb_time'), '6months'); ?> >6 months</option>
                            <option value="year" <?php selected(get_option('dc_cnb_time'), 'year'); ?> >1 year</option>
                            <option value="infinity" <?php selected(get_option('dc_cnb_time'), 'infinity'); ?> >infinity</option>
                        </select>
                        <p class="description">The ammount of time that cookie should be stored for.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_read_more_text">Read More Text</label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_read_more_text" value="<?php echo get_option('dc_cnb_read_more_text'); ?>" name="dc_cnb_read_more_text" class="regular-text">
                        <p class="description">The text of the link "Read More". For add to the text use the shortcode [dc-cnb-read-more] in the Message Text.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_read_more_link">Read More Link</label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_read_more_link" value="<?php echo get_option('dc_cnb_read_more_link'); ?>" name="dc_cnb_read_more_link" class="regular-text">
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_read_more_target">Read More Target</label>
                    </th>
                    <td>
                        <select id="dc_cnb_read_more_target" name="dc_cnb_read_more_target">
                            <option value="_blank" <?php selected(get_option('dc_cnb_read_more_target'), '_blank'); ?> >_blank</option>
                            <option value="_self" <?php selected(get_option('dc_cnb_read_more_target'), '_self'); ?> >_self</option>
                        </select>
                    </td>
                </tr>
            </tbody>
       </table>

        <h2>Design</h2>
        <table class="form-table">
           <tbody>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_position">Position</label>
                    </th>
                    <td>
                        <select id="dc_cnb_position" name="dc_cnb_position">
                            <option value="top" <?php selected(get_option('dc_cnb_position'), 'top'); ?> >Top</option>
                            <option value="bottom" <?php selected(get_option('dc_cnb_position'), 'bottom'); ?> >Bottom</option>
                        </select>
                        <p class="description">The position where you want display the notice.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_text_background">Background Color</label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_text_background" value="<?php echo get_option('dc_cnb_text_background'); ?>" name="dc_cnb_text_background" class="regular-text" data-default-color="#000000">
                        <p class="description">The background color of the notice.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_text_color">Text Color</label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_text_color" value="<?php echo get_option('dc_cnb_text_color'); ?>" name="dc_cnb_text_color" class="regular-text" data-default-color="#ffffff">
                        <p class="description">The text color of the notice.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_button_background">Button Background Color</label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_button_background" value="<?php echo get_option('dc_cnb_button_background'); ?>" name="dc_cnb_button_background" class="regular-text" data-default-color="#e24545">
                        <p class="description">The background color of the button to accept the usage of the cookies.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="dc_cnb_button_text">Button Text Color</label>
                    </th>
                    <td>
                        <input type="text" id="dc_cnb_button_color" value="<?php echo get_option('dc_cnb_button_color'); ?>" name="dc_cnb_button_color" class="regular-text" data-default-color="#ffffff">
                        <p class="description">The text color of the button to accept the usage of the cookies.</p>
                    </td>
                </tr>
                
                <tr valign="top">
                   <th scope="row"></th>
                   <td>
                       <p>
                           <input type="submit" class="button-primary save-options" id="submit" name="submit" value="Salva le modifiche">
                       </p>
                   </td>
                </tr>
            </tbody>
       </table>
</form>