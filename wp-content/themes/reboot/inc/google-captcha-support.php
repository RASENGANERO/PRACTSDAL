<?php
/**
 * ****************************************************************************
 *
 *   НЕ РЕДАКТИРУЙТЕ ЭТОТ ФАЙЛ
 *   DON'T EDIT THIS FILE
 *
 * *****************************************************************************
 *
 * @package reboot
 */

namespace Wpshop\Core;

use WP_Error;

class GoogleCaptchaSupport {

    /**
     * @return void
     */
    public function init() {
        if ( ! in_array( 'google-captcha/google-captcha.php', (array) get_option( 'active_plugins', [] ) ) ) {
            return;
        }

        if ( ! apply_filters( THEME_SLUG . '_enable_google_captcha_support', true ) ) {
            return;
        }

        add_filter( 'wpshop_contact_form_errors', [ $this, '_validate_contact_form' ] );
        add_filter( THEME_SLUG . '_contact_form_fields', [ $this, '_add_contact_form_field' ] );
    }

    /**
     * @param array $errors
     *
     * @return array
     */
    public function _validate_contact_form( $errors ) {
        $check = wp_parse_args( gglcptch_check(), [
            'response' => false,
            'reason'   => '',
            'errors'   => null,
        ] );

        if ( ! $check['response'] ) {
            if ( 'ERROR_NO_KEYS' == $check['reason'] ) {
                // нельзя отправить сообщение пока администратор не настроил рекапчу
                $errors[] = __( 'The message cannot be sent until the administrator has configured reCAPTCHA', THEME_TEXTDOMAIN );
            } elseif ( $check['errors'] instanceof WP_Error ) {
                foreach ( $check['errors']->get_error_messages() as $error_message ) {
                    $errors[] = $error_message;
                }
            }
        }

        return $errors;
    }

    /**
     * @param array $fields
     *
     * @return array
     */
    public function _add_contact_form_field( $fields ) {
        $fields[] = [
            'name'            => 'google_captcha',
            'render_callback' => function () {
                return do_shortcode( '[bws_google_captcha]' );
            },
        ];

        return $fields;
    }
}
