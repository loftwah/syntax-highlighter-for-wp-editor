<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 3.0
 */
function SHighlighterForWPE_render_submenu_page() {

	// Declare variables
    $options = get_option( 'SHighlighterForWPE_settings' );
    $example = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Code Example</title>
</head>
<body>
    <h1>Code Example</h1>
    
    <p><?php echo "Hello World!"; ?></p>

    <div class="foobar">
        This    is  an
        example of  smart
        tabs.
    </div>

    <p><a href="http://wordpress.org/">WordPress</a></p>
</body>
</html>';

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Syntax Highlighter for WP Editor', 'syntax-highlighter-for-wp-editor' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', 'syntax-highlighter-for-wp-editor' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'syntax-highlighter-for-wp-editor' ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin replaces the defaults WordPress Theme and Plugin Editor with an enhanced editor with syntax highlighting and line numbering', 'syntax-highlighter-for-wp-editor' ); ?></p>
                        </div>
                    </div>

                    <div id="using" class="postbox">
                        <h3 class="title"><?php _e( 'Using', 'syntax-highlighter-for-wp-editor' ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'To use, select the desired settings, then click "Save Changes". It\'s that simple!', 'syntax-highlighter-for-wp-editor' ); ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'syntax-highlighter-for-wp-editor' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Got something to say? Need help?', 'syntax-highlighter-for-wp-editor' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com?subject=Syntax Highlighter for WP Editor">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'syntax-highlighter-for-wp-editor' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'If you like this plugin and find it useful, please help me to make this plugin even better and keep it up-to-date.', 'syntax-highlighter-for-wp-editor' ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('../img/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'syntax-highlighter-for-wp-editor' ); ?></p>
                        </div>
                    </div>

                    <div id="advertisement" class="postbox">
                        <h3 class="title"><?php _e( 'Advertisement', 'syntax-highlighter-for-wp-editor' ); ?></h3>
                        <div class="inside">
                            <a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=36439_5_1_21" target="_blank" rel="nofollow"><img style="border:0px" src="http://www.elegantthemes.com/affiliates/media/banners/divi_250x250.jpg" width="250" height="250" alt="Divi WordPress Theme"></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END-SIDEBAR -->

            <!-- FORM -->
            <div class="has-sidebar sm-padded">
                <div id="post-body-content" class="has-sidebar-content">
                    <div class="meta-box-sortabless">

                        <form name="SHighlighterForWPE-form" action="options.php" method="post" enctype="multipart/form-data">
                            <?php settings_fields( 'SHighlighterForWPE_settings_group' ); ?>

                            <div class="postbox" id="Settings">
                                <h3 class="title"><?php _e( 'Main Settings', 'syntax-highlighter-for-wp-editor' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'There you can configure this plugin.', 'syntax-highlighter-for-wp-editor' ); ?></p>

                                    <table class="form-table">

                                        <tr valign='top'>
                                            <th>
                                                <?php _e( 'Color theme:', 'syntax-highlighter-for-wp-editor' ); ?>
                                            </th>
                                            <td>
                                                <select name="SHighlighterForWPE_settings[theme]">
                                                    <?php
                                                        $themes = array('default', '3024-day', '3024-night', 'ambiance-mobile', 'ambiance', 'base16-dark', 'base16-light', 'blackboard', 'cobalt', 'colorforth', 'eclipse', 'elegant', 'erlang-dark', 'lesser-dark', 'liquibyte', 'mbo', 'mdn-like', 'midnight', 'monokai', 'neat', 'neo', 'night', 'paraiso-dark', 'paraiso-light', 'pastel-on-dark', 'rubyblue', 'solarized', 'the-matrix', 'tomorrow-night-bright', 'tomorrow-night-eighties', 'ttcn', 'twilight', 'vibrant-ink', 'xq-dark', 'xq-light', 'zenburn');
                                                        foreach ($themes as $option) {
                                                            $selected = selected( $options['theme'], $option );
                                                            echo '<option value="' . $option . '" id="' . $option . '"' . $selected . ' >' . $option . '</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr valign='top'>
                                            <td></td>
                                            <td class='help-text'>
                                                <?php _e( 'Theme which you like to view.', 'syntax-highlighter-for-wp-editor' ); ?>
                                            </td>
                                        </tr>

                                        <tr valign='top'>
                                            <th>
                                                <?php _e( 'Display line numbers:', 'syntax-highlighter-for-wp-editor' ); ?>
                                            </th>
                                            <td>
                                                <input type="checkbox" name="SHighlighterForWPE_settings[line_numbers]" id="SHighlighterForWPE_settings[line_numbers]" <?php if ( !empty($options['line_numbers']) ) { checked( $options['line_numbers'], "on" ); } ?> >
                                            </td>
                                        </tr>

                                        <tr valign='top'>
                                            <th>
                                                <?php _e( 'First line number:', 'syntax-highlighter-for-wp-editor' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" name="SHighlighterForWPE_settings[first_line_number]" id="SHighlighterForWPE_settings[first_line_number]" size="1" value="<?php if ( !empty($options['first_line_number']) ) { echo $options['first_line_number']; } else { echo "0"; } ?>" >
                                            </td>
                                        </tr>

                                        <tr valign='top'>
                                            <th>
                                                <?php _e( 'The width of Tab:', 'syntax-highlighter-for-wp-editor' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" name="SHighlighterForWPE_settings[tab_size]" id="SHighlighterForWPE_settings[tab_size]" size="1" value="<?php if ( !empty($options['tab_size']) ) { echo $options['tab_size']; } else { echo "4"; } ?>" >
                                            </td>
                                        </tr>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'syntax-highlighter-for-wp-editor' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Preview">
                                <h3 class="title"><?php _e( 'Preview', 'syntax-highlighter-for-wp-editor' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'Click "Save Changes" to update this preview.', 'syntax-highlighter-for-wp-editor' ); ?></p>
                                    <textarea readonly id="SHighlighterForWPE"><?php echo $example; ?></textarea>
                                    <p><?php _e( 'This is an example of HTML language.', 'syntax-highlighter-for-wp-editor' ); ?></p>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- END-FORM -->

        </div>

	</div>
	<?php
}