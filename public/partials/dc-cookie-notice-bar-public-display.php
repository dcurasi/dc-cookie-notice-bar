<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Cookie_Notice_Bar
 * @subpackage Dc_Cookie_Notice_Bar/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div id="dc-cnb-container">
	<p id="dc-cnb-text">
		<?php echo do_shortcode(get_option('dc_cnb_message')); ?> <a id="dc-cnb-button"><?php echo get_option('dc_cnb_button_text'); ?></a>
	</p>
</div>