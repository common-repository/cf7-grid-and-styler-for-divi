<?php
namespace WPT\Cf7Divi\WP;

/**
 * Action.
 */
class Action
{
    protected $container;

    /**
     * Constructor.
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function enqueue_cf7_divi_module_scripts()
    {
        wp_enqueue_style(
            'wpt-cf7-divi-flexbox',
            $this->container['plugin_url'] . '/styles/flexboxgrid.css',
            ['contact-form-7']
        );

        wp_enqueue_style(
            'wpt-cf7-divi',
            $this->container['plugin_url'] . '/styles/cf7-divi/style.css',
            ['contact-form-7'],
            $this->container['plugin_version']
        );

        wp_enqueue_script(
            'wpt-cf7-divi',
            $this->container['plugin_url'] . '/js/cf7/script.js',
            ['jquery'],
            $this->container['plugin_version']
        );
        $style = "
li.et_fb_wpt_contact_form_7::before {
    content: url(\"data:image/svg+xml,%3Csvg width='20' height='20' enable-background='new 0 0 100 100' version='1.1' viewBox='0 0 90 90' xml:space='preserve' xmlns='http://www.w3.org/2000/svg' xmlns:cc='http://creativecommons.org/ns%23' xmlns:dc='http://purl.org/dc/elements/1.1/' xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns%23' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cmetadata%3E%3Crdf:RDF%3E%3Ccc:Work rdf:about=''%3E%3Cdc:format%3Eimage/svg+xml%3C/dc:format%3E%3Cdc:type rdf:resource='http://purl.org/dc/dcmitype/StillImage'/%3E%3Cdc:title/%3E%3C/cc:Work%3E%3C/rdf:RDF%3E%3C/metadata%3E%3Cdefs%3E%3ClinearGradient id='linearGradient864' x1='24.405' x2='175.6' y1='197' y2='197' gradientTransform='matrix(.57174 0 0 .57174 -12.174 -67.632)' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%230575e6' offset='0'/%3E%3Cstop stop-color='%23021b79' offset='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Ccircle cx='45' cy='45' r='43.221' fill='url(%23linearGradient864)' stroke-width='0'/%3E%3Cg fill='%23fff' fill-opacity='.94118' stroke-width='.14262' aria-label='CF'%3E%3Cpath d='m37.543 54.767c3.2853 0 6.0107-1.232 7.9893-3.584l-3.024-3.3227c-1.1947 1.3067-2.6507 2.1653-4.4053 2.1653-3.6587 0-6.1973-2.912-6.1973-7.9147 0-4.8907 2.5387-7.84 5.9733-7.84 1.792 0 3.0987 0.70933 4.256 1.7547l3.024-3.3973c-1.6427-1.6053-4.1813-3.0987-7.28-3.0987-6.496 0-11.611 4.704-11.611 12.768 0 8.176 5.2267 12.469 11.275 12.469z'/%3E%3Cpath d='m47.567 54.319h5.488v-9.4453h9.1093v-4.6293h-9.1093v-5.6373h10.677v-4.6293h-16.165z'/%3E%3C/g%3E%3Cg%3E%3Cg fill='%23ffdd12' aria-label='7'%3E%3Cpath d='m65.912 32.277h1.8347c0.13867-2.6347 0.34133-3.808 2.0267-5.632v-1.1307h-5.152v1.536h3.2c-1.3653 1.7387-1.7707 3.0933-1.9093 5.2267z' fill='%23ffdd12'/%3E%3C/g%3E%3Cpath d='m45 65.095c2.9009 0 5.2585 2.3576 5.2585 5.2585 0 2.9009-2.3576 5.2585-5.2585 5.2585s-5.2585-2.3576-5.2585-5.2585c0-2.9009 2.3576-5.2585 5.2585-5.2585m0-0.87642c-3.3874 0-6.1349 2.7476-6.1349 6.1349s2.7476 6.1349 6.1349 6.1349c3.3874 0 6.1349-2.7476 6.1349-6.1349s-2.7476-6.1349-6.1349-6.1349z' fill='%23ffdd12' stroke-width='.43821'/%3E%3Cpath d='m46.718 71.882c0.16214-0.19281 0.28484-0.42068 0.3681-0.67922 0.08326-0.26293 0.19281-1.1569-0.0044-1.7441-0.08764-0.25854-0.21034-0.48641-0.37248-0.67484-0.16214-0.18843-0.35933-0.33304-0.59596-0.43821-0.23664-0.10517-0.51709-0.18405-0.82822-0.18405h-1.5995v4.3821h1.5995c0.31551 0 0.59596-0.10517 0.83698-0.21472 0.23663-0.10517 0.43821-0.25854 0.59597-0.44697zm-0.30674-4.3602c0.35495 0.14899 0.6617 0.36371 0.91148 0.6354 0.2454 0.27169 0.43383 0.59596 0.56091 0.96406 0.1227 0.3681 0.18405 0.79754 0.18405 1.2314 0 0.42506-0.05697 0.80192-0.17966 1.17-0.1227 0.3681-0.30675 0.69675-0.55214 0.96844-0.2454 0.27607-0.54776 0.49518-0.91148 0.65293-0.35495 0.15337-0.77125 0.27607-1.2358 0.27607h-1.9413c-0.24102 0-0.43821-0.1972-0.43821-0.43821v-5.2585c0-0.24102 0.19719-0.43821 0.43821-0.43821h1.9413c0.45574 0 0.86766 0.08764 1.2226 0.23663z' fill='%23fff' stroke-width='.43821'/%3E%3C/g%3E%3C/svg%3E\") !important;";
        wp_add_inline_style('wpt-cf7-divi-flexbox', $style);
    }

}
