<?php
namespace WPT\Cf7Divi\Cf7;

/**
 * PostType.
 */
class PostType {
    protected $container;

    /**
     * Constructor.
     */
    public function __construct($container) {
        $this->container = $container;
    }

    /**
     * Get forms
     */
    public function get_forms() {

        $args = [
            'post_type'      => 'wpcf7_contact_form',
            'post_status'    => 'publish',
            'posts_per_page' => -1,

            'orderby'        => 'date',
            'order'          => 'ASC',
        ];

        $query = new \WP_Query($args);
        $forms = $query->get_posts();

        if (!$forms) {
            return [];
        }

        $items = ['cf7-0' => 'Select Contact Form 7'];

        foreach ($forms as $form) {
            $items['cf7-' . $form->ID] = $form->post_title;
        }

        return $items;

    }

}