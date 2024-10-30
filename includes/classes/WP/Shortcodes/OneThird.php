<?php
namespace WPT\Cf7Divi\WP\Shortcodes;

/**
 * OneThird.
 */
class OneThird
{
    protected $container;

    /**
     * Constructor.
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function render(
        $attrs,
        $content = null
    ) {
        $attrs = shortcode_atts($this->default_shortcode_atts(), $attrs);

        ob_start();
        require $this->container['plugin_dir'] . '/resources/views/shortcodes/one_third.php';
        return ob_get_clean();
    }

    public function default_shortcode_atts()
    {
        return [
            'classes' => '',
        ];
    }

}