<?php

/*
Plugin Name: Responsive Menu Pro
Plugin URI: https://responsive.menu
Description: Highly Customisable Responsive Menu Plugin for WordPress
Version: 3.1.31
Author: ExpressTech
Text Domain: responsive-menu-pro
Author URI: https://responsive.menu
License: GPL2
Tags: responsive, menu, responsive menu
*/

define('RESPONSIVE_MENU_PRO_URL', plugin_dir_url( __FILE__ ));

define('RESPONSIVE_MENU_PRO_VERSION', '3.1.31');

/* Check correct PHP version first */
add_action('admin_init', 'check_responsive_menu_pro_php_version');
function check_responsive_menu_pro_php_version() {
    if(version_compare(PHP_VERSION, '5.4', '<')):
        add_action('admin_notices', 'responsive_menu_pro_deactivation_text');
        deactivate_plugins(plugin_basename(__FILE__));
    endif;
}

function responsive_menu_pro_deactivation_text() {
    echo '<div class="error"><p>' . sprintf(
            'Responsive Menu Pro requires PHP 5.4 or higher to function and has therefore been automatically disabled.
            You are still on %s.%sPlease speak to your web host about upgrading your PHP version.',
            PHP_VERSION,
            '<br /><br />'
        ) . '</p></div>';
}

if(version_compare(PHP_VERSION, '5.4', '<'))
    return;

include dirname(__FILE__) . '/vendor/autoload.php';
include dirname(__FILE__) . '/config/default_options.php';
include dirname(__FILE__) . '/config/services.php';
include dirname(__FILE__) . '/config/wp/scripts.php';
include dirname(__FILE__) . '/config/routing.php';
include dirname(__FILE__) . '/migration.php';
include dirname(__FILE__) . '/config/polylang.php';

if(is_admin()):
    $license_type = get_option('responsive_menu_pro_license_type');
    $item_id = 58802; // Our default Generic License
    if($license_type = 'Multi License')
        $item_id = 1143;
    elseif($license_type == 'Single License')
        $item_id = 1175;

    $updater = new ResponsiveMenuPro\Licensing\Check('https://responsive.menu', __FILE__, array(
        'version' => get_option('responsive_menu_pro_version'),
        'license' => trim(get_option('responsive_menu_pro_license_key')),
        'item_id' => $item_id,
        'author' => 'Responsive Menu',
        'url' => home_url()
    ));
endif;

add_action( 'admin_notices', 'og_deactivate_free_version_notice');

function og_deactivate_free_version_notice() {
    if(get_transient('og-admin-notice-activation')) {
        ?>
        <div class="notice notice-error is-dismissible">
            <p>Responsive Menu has been deactivated<p/>

        </div>
        <?php
        delete_transient('og-admin-notice-activation');
    }
}

function og_deactivate_responsive_menu() {

    $plugin = 'responsive-menu/responsive-menu.php';
  
   if( is_plugin_active($plugin) ){
        deactivate_plugins( 'responsive-menu/responsive-menu.php');
        set_transient( 'og-admin-notice-activation', true, 5 );
        
        return;
    }
}
//to check weather another plugin is acivated or not.
register_activation_hook( __FILE__, 'og_deactivate_responsive_menu');

/**
 * Add admin notice to upgrade the plugin license.
 */
add_action( 'admin_notices', 'responsive_menu_license_upgrade_admin_notice' );
function responsive_menu_license_upgrade_admin_notice() {
    $license_type = get_option('responsive_menu_pro_license_type');
    if ( ! empty( $license_type ) ) {
        return;
    }
    if ( empty( $_GET['page'] ) ) {
        return;
    }
    if ( 'responsive-menu-pro' !== $_GET['page'] ) {
        return;
    }
    $user_id = get_current_user_id();
    if ( ! empty( get_user_meta( $user_id, 'responsive_menu_admin_notice') ) ) {
        return;
    }
?>
    <div class="notice-responsive-menu notice error is-dismissible">
        <div class="notice-responsive-menu-logo">
            <img src="<?php echo RESPONSIVE_MENU_PRO_URL;?>/imgs/responsive-menu-logo.png" width="60" height="60" alt="logo" />
        </div>
        <div class="notice-responsive-menu-message">
            <h4 style="font-weight: 700;">Welcome to Responsive Menu Pro</h4>
            <p><?php _e( 'Please activate your license to get feature updates, premium support and unlimited access to the menu setings.', 'responsive-menu-pro' ); ?></p>
        </div>
        <div class="notice-responsive-menu-action">
            <a href="<?php echo esc_url( admin_url( '?page=responsive-menu-pro#license' ) ); ?>" data-toggle="tab"><span class="dashicons dashicons-update-alt"></span> Connecct & Activate</a>
        </div>
    </div>
<?php
}
/**
 * Add plugin upgrade link.
 *
 * Add a link to the settings page on the responsive menu page.
 * 
 * @param  array  $links List of existing plugin action links.
 * @return array         List of modified plugin action links.
 */
function responsive_menu_license_upgrade_link( $links ) {
    $license_type = get_option('responsive_menu_pro_license_type');
    if ( ! empty( $license_type ) ) {
        return $links;
    }
	$links = array_merge(
        $links,
        array( '<a class="responsive-menu-license-upgrade-link" href="' . esc_url( admin_url( '?page=responsive-menu-pro#license' ) ) . '">' . __( 'Connect & Upgrade', 'responsive-menu-pro') . '</a>')
    );
	return $links;
}
add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'responsive_menu_license_upgrade_link' );
add_action( "wp_ajax_responsive_menu_license_admin_notice_dismiss", "responsive_menu_license_admin_notice_dismiss");
/**
 * Function to hide the admin notice permanent.
 */
function responsive_menu_license_admin_notice_dismiss() {
    $user_id = get_current_user_id();
    update_user_meta( $user_id, 'responsive_menu_admin_notice', true );
}
