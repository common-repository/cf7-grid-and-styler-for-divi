<?php

namespace WPT\Cf7Divi;

use  WPTools\Pimple\Container ;
/**
 * Container
 */
class Loader extends Container
{
    /**
     *
     * @var mixed
     */
    public static  $instance ;
    public function __construct()
    {
        parent::__construct();
        $this['bootstrap'] = function ( $container ) {
            return new WP\Bootstrap( $container );
        };
        $this['action'] = function ( $container ) {
            return new WP\Action( $container );
        };
        $this['cf7_row_shortcode'] = function ( $container ) {
            return new WP\Shortcodes\Cf7Row( $container );
        };
        $this['cf7_one_shortcode'] = function ( $container ) {
            return new WP\Shortcodes\One( $container );
        };
        $this['cf7_one_half_shortcode'] = function ( $container ) {
            return new WP\Shortcodes\OneHalf( $container );
        };
        $this['cf7_one_third_shortcode'] = function ( $container ) {
            return new WP\Shortcodes\OneThird( $container );
        };
        $this['cf7_one_fourth_shortcode'] = function ( $container ) {
            return new WP\Shortcodes\OneFourth( $container );
        };
        $this['cf7_two_third_shortcode'] = function ( $container ) {
            return new WP\Shortcodes\TwoThird( $container );
        };
        $this['cf7_three_fourth_shortcode'] = function ( $container ) {
            return new WP\Shortcodes\ThreeFourth( $container );
        };
        $this['cf7_admin'] = function ( $container ) {
            return new Cf7\Admin( $container );
        };
        $this['cf7_post_type'] = function ( $container ) {
            return new Cf7\PostType( $container );
        };
    }
    
    /**
     * Get container instance.
     */
    public static function getInstance()
    {
        if ( !self::$instance ) {
            self::$instance = new Loader();
        }
        return self::$instance;
    }
    
    /**
     * Plugin run
     */
    public function run()
    {
        register_activation_hook( $this['plugin_file'], [ $this['bootstrap'], 'register_activation_hook' ] );
        add_action( 'admin_menu', [ $this['bootstrap'], 'admin_menu' ] );
        add_action( 'wpt_enqueue_cf7_divi_scripts', [ $this['action'], 'enqueue_cf7_divi_module_scripts' ], 10 );
        // enable shortcode processing in contact form builder
        add_filter( 'wpcf7_form_elements', 'do_shortcode' );
        //
        add_shortcode( 'wpcf7_row', [ $this['cf7_row_shortcode'], 'render' ] );
        add_shortcode( 'wpcf7_one_half', [ $this['cf7_one_half_shortcode'], 'render' ] );
        add_shortcode( 'wpcf7_one', [ $this['cf7_one_shortcode'], 'render' ] );
        add_shortcode( 'wpcf7_one_third', [ $this['cf7_one_third_shortcode'], 'render' ] );
        add_shortcode( 'wpcf7_one_fourth', [ $this['cf7_one_fourth_shortcode'], 'render' ] );
        add_shortcode( 'wpcf7_two_third', [ $this['cf7_two_third_shortcode'], 'render' ] );
        add_shortcode( 'wpcf7_three_fourth', [ $this['cf7_three_fourth_shortcode'], 'render' ] );
        add_action(
            'admin_enqueue_scripts',
            [ $this['cf7_admin'], 'admin_enqueue_scripts' ],
            10,
            1
        );
        add_action( 'wpcf7_admin_init', [ $this['cf7_admin'], 'wpcf7_admin_init' ] );
        add_action( 'wp_print_styles', function () {
            wp_dequeue_style( 'wpt-cf7-divi-styles' );
        } );
        add_action( 'wp_enqueue_scripts', function () {
            if ( isset( $_GET['et_fb'] ) and $_GET['et_fb'] == '1' ) {
                do_action( 'wpt_enqueue_cf7_divi_scripts' );
            }
        } );
    }

}