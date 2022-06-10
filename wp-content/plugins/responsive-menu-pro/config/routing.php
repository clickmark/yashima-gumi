<?php

if(is_admin()):
    add_action('admin_menu', function() {

        if(isset($_POST['responsive-menu-export']) && isset($_GET['page']) && $_GET['page'] == 'responsive-menu-pro'):
            header('Cache-Control: no-cache, no-store, must-revalidate');
            header('Pragma: no-cache');
            header('Expires: 0');
            header('Content-Type: application/json; charset=utf-8');
            header('Content-Disposition: attachment; filename=responsive-menu-pro-settings.json');
            $controller = get_responsive_menu_pro_service('admin_controller');
            echo $controller->export();
            exit();

        endif;

        add_menu_page(
            'Responsive Menu Pro',
            'Responsive Menu Pro',
            'manage_options',
            'responsive-menu-pro',
            function() {
                $controller = get_responsive_menu_pro_service('admin_controller');

                if(isset($_POST['responsive-menu-pro-current-page']))
                    update_option('responsive_menu_pro_current_page', $_POST['responsive-menu-pro-current-page']);

                if(isset($_POST['responsive-menu-pro-submit'])):
                    $valid_nonce = wp_verify_nonce( $_POST['responsive-menu-pro-nonce'], 'update');

                    echo $controller->update($valid_nonce, wp_unslash($_POST['menu']));

                elseif(isset($_POST['responsive-menu-reset'])):
                    $valid_nonce = wp_verify_nonce( $_POST['responsive-menu-pro-nonce'], 'update');
                    echo $controller->reset(get_responsive_menu_pro_default_options(), $valid_nonce );

                elseif(isset($_POST['responsive-menu-theme'])):
                    $valid_nonce = wp_verify_nonce( $_POST['responsive-menu-pro-nonce'], 'update');
                    echo $controller->apply_theme($_POST['menu']['menu_theme'], $valid_nonce );

                elseif(isset($_POST['responsive-menu-import'])):
                    $file = $_FILES['responsive-menu-import-file'];
                    $file_options = isset($file['tmp_name']) ? (array) json_decode(file_get_contents($file['tmp_name'])) : null;

                    $valid_nonce = wp_verify_nonce( $_POST['responsive-menu-pro-nonce'], 'update');
                    echo $controller->import( $file_options, $valid_nonce );

                elseif(isset($_POST['responsive-menu-import-theme'])):
                    $file = $_FILES['responsive-menu-import-theme-file'];
                    $theme = isset($file['tmp_name']) && $file['tmp_name'] ? $file['tmp_name'] : null;

                    $valid_nonce = wp_verify_nonce( $_POST['responsive-menu-pro-nonce'], 'update');
                    echo $controller->import_theme( $theme, $valid_nonce );

                elseif(isset($_POST['responsive-menu-pro-add-license-key'])):
                    $valid_nonce = wp_verify_nonce( $_POST['responsive-menu-pro-nonce'], 'update');
                    echo $controller->license($_POST['responsive-menu-pro-license-key'], $valid_nonce );

                elseif(isset($_POST['responsive-menu-rebuild-db'])):
                    $valid_nonce = wp_verify_nonce( $_POST['responsive-menu-pro-nonce'], 'update');
                    echo $controller->rebuild( $valid_nonce );

                else:
                    echo $controller->index();

                endif;
            },
            'dashicons-menu');
    });
else:
    add_action('template_redirect', function() {
        $controller = get_responsive_menu_pro_service('front_controller');
        if(isset($_GET['responsive-menu-pro-preview']) && isset($_POST['menu']))
            echo $controller->preview($_POST['menu']);
        else
            $controller->index();
    });
endif;
