<?php

/**
 * WptContactForm7Fields
 */
class WptContactForm7Fields
{
    public  $container ;
    public function __construct()
    {
        $this->container = \WPT\Cf7Divi\Loader::getInstance();
    }
    
    /**
     * Get list of selectors
     */
    public function get_selectors( $module )
    {
        $selectors = [
            'row'                          => [
            'selector' => "{$module->main_css_element} .wpcf7 .cf7-row",
            'label'    => __( 'Row', 'cf7-grid-and-styler-for-divi' ),
        ],
            'column'                       => [
            'selector' => "{$module->main_css_element} .wpcf7 .cf7-row .wpt-col",
            'label'    => __( 'Column', 'cf7-grid-and-styler-for-divi' ),
        ],
            'label'                        => [
            'selector' => "{$module->main_css_element} .wpcf7 .cf7-row .wpcf7-quiz-label, {$module->main_css_element} .wpcf7 .cf7-row>label, {$module->main_css_element} .wpcf7 .cf7-row div.wpt-col>label",
            'label'    => __( 'Label', 'cf7-grid-and-styler-for-divi' ),
        ],
            'text_select'                  => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpcf7-captchar, {$module->main_css_element} .wpcf7 .wpcf7-date, {$module->main_css_element} .wpcf7 .wpcf7-number, {$module->main_css_element} .wpcf7 .wpcf7-quiz, {$module->main_css_element} .wpcf7 .wpcf7-tel, {$module->main_css_element} .wpcf7 .wpcf7-text, {$module->main_css_element} .wpcf7 .wpcf7-textarea, {$module->main_css_element} .wpcf7 .wpcf7-url,section.et_pb_wpt_contact_form_7 .wpcf7 .wpcf7-select",
            'label'    => __( 'Text & Select Fields', 'cf7-grid-and-styler-for-divi' ),
        ],
            'radio_checkbox_options_label' => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpcf7-radio .wpcf7-list-item .wpcf7-list-item-label, {$module->main_css_element} .wpcf7 .wpcf7-checkbox .wpcf7-list-item .wpcf7-list-item-label",
            'label'    => __( 'Radio/Checkbox Label', 'cf7-grid-and-styler-for-divi' ),
        ],
            'radio_checkbox_input'         => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpcf7-radio .wpcf7-list-item input[type='radio'], {$module->main_css_element} .wpcf7 .wpcf7-checkbox .wpcf7-list-item input[type='checkbox']",
            'label'    => __( 'Radio/Checkbox Input', 'cf7-grid-and-styler-for-divi' ),
        ],
            'acceptance_field'             => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpcf7-acceptance",
            'label'    => __( 'Acceptance Field', 'cf7-grid-and-styler-for-divi' ),
        ],
            'acceptance_field_label'       => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpcf7-acceptance .wpcf7-list-item .wpcf7-list-item-label",
            'label'    => __( 'Acceptance Field Label', 'cf7-grid-and-styler-for-divi' ),
        ],
            'acceptance_field_checkbox'    => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpcf7-acceptance .wpcf7-list-item input[type='checkbox']",
            'label'    => __( 'Acceptance Field Checkbox', 'cf7-grid-and-styler-for-divi' ),
        ],
            'button'                       => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpcf7-submit",
            'label'    => __( 'Submit Button', 'cf7-grid-and-styler-for-divi' ),
        ],
            'button_row'                   => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpt-col.wpt-cf7-submit-btn-row",
            'label'    => __( 'Button Container', 'cf7-grid-and-styler-for-divi' ),
        ],
            'field_error'                  => [
            'selector' => "{$module->main_css_element} .wpcf7 .wpcf7-not-valid-tip",
            'label'    => __( 'Field Error', 'cf7-grid-and-styler-for-divi' ),
        ],
            'form_error'                   => [
            'selector' => "{$module->main_css_element} .wpcf7 div.wpcf7-response-output.wpcf7-mail-sent-ng, {$module->main_css_element} .wpcf7 div.wpcf7-response-output.wpcf7-validation-errors, {$module->main_css_element} div.wpcf7 form.wpcf7-form.invalid div.wpcf7-response-output,{$module->main_css_element} div.wpcf7 form.wpcf7-form.failed div.wpcf7-response-output",
            'label'    => __( 'Form Error', 'cf7-grid-and-styler-for-divi' ),
        ],
            'form_success'                 => [
            'selector' => "{$module->main_css_element} .wpcf7 div.wpcf7-response-output.wpcf7-mail-sent-ng, {$module->main_css_element} .wpcf7 div.wpcf7-response-output.wpcf7-mail-sent-ok,{$module->main_css_element} div.wpcf7 form.wpcf7-form.sent div.wpcf7-response-output",
            'label'    => __( 'Form Success', 'cf7-grid-and-styler-for-divi' ),
        ],
            'input_field_wrapper'          => [
            'selector' => "{$module->main_css_element} .wpt-row .wpt-col .wpcf7-form-control-wrap",
            'label'    => __( 'Input Field Wrapper', 'cf7-grid-and-styler-for-divi' ),
        ],
        ];
        return $selectors;
    }
    
    /**
     * Get divi module selector
     */
    public function get_selector( $key, $module )
    {
        $selectors = $this->get_selectors( $module );
        return $selectors[$key]['selector'];
    }
    
    /**
     * Get CSS field
     */
    public function get_css_fields( $module )
    {
        $selectors = [];
        $selectors = $this->get_selectors( $module );
        foreach ( $selectors as $key => $selector ) {
            $selectors[$key]['selector'] = "html body div#page-container " . $selector['selector'];
        }
        return $selectors;
    }
    
    /**
     * Get all fields
     */
    public function get_all()
    {
        $fields['contact_form_id'] = [
            'label'       => esc_html__( 'Select Form', 'et_builder' ),
            'type'        => 'select',
            'options'     => $this->container['cf7_post_type']->get_forms(),
            'tab_slug'    => 'general',
            'toggle_slug' => 'cf7',
            'default'     => $this->get_default( 'contact_form_id' ),
        ];
        return $fields;
    }
    
    /**
     * Get default value.
     */
    public function get_default( $key )
    {
        $defaults = $this->get_defaults();
        return ( isset( $defaults[$key] ) ? $defaults[$key] : '' );
    }
    
    /**
     * Defaults
     */
    public function get_defaults()
    {
        $defaults = [
            'contact_form_id' => 'cf7-0',
        ];
        return $defaults;
    }

}