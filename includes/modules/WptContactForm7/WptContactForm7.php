<?php

class WptContactForm7 extends ET_Builder_Module
{
    public  $slug = 'et_pb_wpt_contact_form_7' ;
    public  $vb_support = 'on' ;
    public  $container ;
    public  $fields_helper ;
    public  $main_css_element = 'section%%order_class%%' ;
    protected  $module_credits = array(
        'module_uri' => 'https://wptools.app/wordpress-plugin/grid-styler-for-contact-form-7-and-divi/?utm_source=divi-module&utm_medium=page&utm_campaign=cf7-divi&utm_content=free',
        'author'     => 'WP Tools → Get 7 day FREE Trial',
        'author_uri' => 'https://wptools.app/wordpress-plugin/grid-styler-for-contact-form-7-and-divi/?utm_source=divi-module&utm_medium=page&utm_campaign=cf7-divi&utm_content=free',
    ) ;
    public function init()
    {
        $this->name = esc_html__( 'Contact Form 7', 'wpcd-wpt-cf7-divi' );
        $this->container = \WPT\Cf7Divi\Loader::getInstance();
        require_once __DIR__ . '/WptContactForm7Fields.php';
        $this->fields_helper = new \WptContactForm7Fields();
    }
    
    public function get_fields()
    {
        return $this->fields_helper->get_all();
    }
    
    public function _render_module_wrapper( $output = '', $render_slug = '' )
    {
        $output = parent::_render_module_wrapper( $output, $render_slug );
        $output = trim( $output );
        // remove starting and ending divs
        $output = substr_replace(
            $output,
            '<section',
            0,
            4
        );
        $output = substr_replace(
            $output,
            '/section>',
            strlen( $output ) - 5,
            5
        );
        return $output;
    }
    
    /**
     * Render divi module
     */
    public function render( $attrs, $content = null, $render_slug )
    {
        $attrs = shortcode_atts( $this->fields_helper->get_defaults(), $this->props );
        $module_classes = $this->module_classname( $render_slug );
        $module_class = trim( ET_Builder_Element::add_module_order_class( '', $render_slug ) );
        $form_id = str_replace( 'cf7-', '', $attrs['contact_form_id'] );
        $shortcode = sprintf( '[contact-form-7 id="%s"/]', $form_id );
        if ( wpt_cgasfd_fs()->is_free_plan() ) {
            $this->add_classname( 'response-at-top' );
        }
        do_action( 'wpt_enqueue_cf7_divi_scripts' );
        ob_start();
        require $this->container['plugin_dir'] . '/resources/views/divi/cf7.php';
        return ob_get_clean();
    }
    
    /**
     * Settings modal toggle
     *
     * @return [type] [description]
     */
    public function get_settings_modal_toggles()
    {
        return $this->get_settings_modal_toggles__free();
    }
    
    /**
     * Freely available options.
     */
    public function get_settings_modal_toggles__free()
    {
        return [
            'general' => [
            'toggles' => [
            'cf7' => esc_html__( 'Contact Form 7', 'et_builder' ),
        ],
        ],
        ];
    }
    
    /**
     * Advanced fields.
     */
    public function get_advanced_fields_config()
    {
        return [
            'border'                => false,
            'borders'               => false,
            'text'                  => false,
            'box_shadow'            => false,
            'filters'               => false,
            'animation'             => false,
            'text_shadow'           => false,
            'max_width'             => false,
            'margin_padding'        => false,
            'custom_margin_padding' => false,
            'background'            => false,
            'fonts'                 => false,
            'link_options'          => false,
        ];
    }
    
    /**
     * Custom css fields.
     */
    public function get_custom_css_fields_config()
    {
        return [];
    }

}
new WptContactForm7();