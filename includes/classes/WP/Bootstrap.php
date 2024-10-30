<?php
namespace WPT\Cf7Divi\WP;

/**
 * Bootstrap.
 */
class Bootstrap {
    protected $container;

    /**
     * Constructor.
     */
    public function __construct($container) {
        $this->container = $container;
    }

    /**
     * Register activation hook
     */
    public function register_activation_hook() {
        flush_rewrite_rules(true);
    }

    public function admin_menu() {
        add_submenu_page(
            'wpcf7',
            'Contact Form 7 For Divi',
            'Contact Form 7 For Divi',
            'manage_options',
            'cf7-grid-and-styler-for-divi',
            [$this, 'admin_submenu_page']
        );
    }

    public function admin_submenu_page() {
        ob_start();
        require $this->container['plugin_dir'] . '/resources/views/admin_menu/sub_menu.php';
        echo ob_get_clean();
    }
}
