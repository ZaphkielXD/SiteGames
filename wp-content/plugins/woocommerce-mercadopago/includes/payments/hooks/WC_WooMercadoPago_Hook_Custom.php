<?php

class WC_WooMercadoPago_Hook_Custom extends WC_WooMercadoPago_Hook_Abstract
{
    /**
     * WC_WooMercadoPago_Hook_Custom constructor.
     * @param $payment
     */
    public function __construct($payment)
    {
        parent::__construct($payment);
    }

    /**
     * Load Hooks
     */
    public function loadHooks()
    {
        parent::loadHooks();
        add_action('wp_enqueue_scripts', array($this, 'add_checkout_scripts'));

        if (!empty($this->payment->settings['enabled']) && $this->payment->settings['enabled'] == 'yes') {
            add_action('woocommerce_after_checkout_form', array($this, 'add_mp_settings_script_custom'));
            add_action('woocommerce_thankyou', array($this, 'update_mp_settings_script_custom'));
        }
    }

    /**
     *  Add Discount
     */
    public function add_discount()
    {
        if (!isset($_POST['mercadopago_custom'])) {
            return;
        }
        if (is_admin() && !defined('DOING_AJAX') || is_cart()) {
            return;
        }
        $custom_checkout = $_POST['mercadopago_custom'];
        parent::add_discount_abst($custom_checkout);
    }

    /**
     * @return bool
     * @throws WC_WooMercadoPago_Exception
     */
    public function custom_process_admin_options()
    {
        $updateOptions = parent::custom_process_admin_options();
        return $updateOptions;
    }


    /**
     *
     */
    public function add_mp_settings_script_custom()
    {
        parent::add_mp_settings_script();
    }

    /**
     * @param $order_id
     */
    public function update_mp_settings_script_custom($order_id)
    {
        echo parent::update_mp_settings_script($order_id);
    }
}