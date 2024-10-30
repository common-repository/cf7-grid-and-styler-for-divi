<?php
namespace WPT\Cf7Divi\Cf7;

/**
 * Admin.
 */
class Admin
{
    protected $container;

    /**
     * Constructor.
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function admin_enqueue_scripts($hook_suffix)
    {
        wp_enqueue_script(
            'wpt-cf7-divi-admin',
            $this->container['plugin_url'] . '/js/cf7-admin/edit.js',
            ['jquery'],
            $this->container['plugin_version']
        );
    }

    public function wpcf7_admin_init()
    {
        $tag_generator = \WPCF7_TagGenerator::get_instance();

        $tag_generator->add('wpt_row', __('row', 'contact-form-7'), $this->container['plugin_slug']);
        $tag_generator->add('wpt_one', __('1-col', 'contact-form-7'), $this->container['plugin_slug']);
        $tag_generator->add('wpt_one_half', __('1/2-col', 'contact-form-7'), $this->container['plugin_slug']);
        $tag_generator->add('wpt_one_third', __('1/3-col', 'contact-form-7'), $this->container['plugin_slug']);
        $tag_generator->add('wpt_one_fourth', __('1/4-col', 'contact-form-7'), $this->container['plugin_slug']);
        $tag_generator->add('wpt_two_third', __('2/3-col', 'contact-form-7'), $this->container['plugin_slug']);
        $tag_generator->add('wpt_three_fourth', __('3/4-col', 'contact-form-7'), $this->container['plugin_slug']);
    }

}
