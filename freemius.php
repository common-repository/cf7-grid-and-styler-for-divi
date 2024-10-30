<?php

if ( !function_exists( 'wpt_cgasfd_fs' ) ) {
    // Create a helper function for easy SDK access.
    function wpt_cgasfd_fs()
    {
        global  $wpt_cgasfd_fs ;
        
        if ( !isset( $wpt_cgasfd_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $wpt_cgasfd_fs = fs_dynamic_init( [
                'id'             => '5759',
                'slug'           => 'cf7-grid-and-styler-for-divi',
                'type'           => 'plugin',
                'public_key'     => 'pk_bd2ee44c28731d45cc6d6255f9409',
                'is_premium'     => false,
                'premium_suffix' => 'Premium',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'trial'          => [
                'days'               => 7,
                'is_require_payment' => false,
            ],
                'menu'           => [
                'slug'    => 'cf7-grid-and-styler-for-divi',
                'support' => false,
                'parent'  => [
                'slug' => 'wpcf7',
            ],
            ],
                'is_live'        => true,
            ] );
        }
        
        return $wpt_cgasfd_fs;
    }
    
    // Init Freemius.
    wpt_cgasfd_fs();
    // Signal that SDK was initiated.
    do_action( 'wpt_cgasfd_fs_loaded' );
}
