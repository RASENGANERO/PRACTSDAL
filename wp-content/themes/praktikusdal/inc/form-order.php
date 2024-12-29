<?php 
	
	/**
	* Add form order with Honeypot and Timestamp
	*/

	// Shortcode for form_order
	function short_form_order() {
		$output = form_order_fields();
		return $output;
	}
	add_shortcode('form_order', 'short_form_order');
	
	// Markup for form_order form
	function form_order_fields() {
		// Generate a timestamp when the form is created.
		$timestamp = time();
		ob_start(); ?>
		<form class="form form--post form-request form-order" action="" method="POST" onsubmit="yaCounter61086415.reachGoal ('form1')">
			<h5 class="form__title">
				Заказать звонок
			</h5>
			<input 
				class="form__input" 
				type="tel" 
				name="user_phone" 
				placeholder="Ваш телефон" 
				required>
			
			<!-- Honeypot Field -->
			<div style="position:absolute; left:-5000px;" aria-hidden="true">
				<input type="text" name="website" tabindex="-1" autocomplete="off">
			</div>
			
			<!-- Timestamp field -->
			<input type="hidden" name="form_timestamp" value="<?php echo $timestamp; ?>">

			<button class="button form__button form-request__button" type="submit">
				Отправить
			</button>
			<button class="form-order__close" type="button" aria-label="Закрыть"></button>
			<input 
				type="hidden" 
				name="id_form_order" 
				value="id-form-order">
			<input 
				type="hidden" 
				name="form_order_nonce" 
				value="<?php echo wp_create_nonce('form-order-nonce'); ?>">
			<input 
				type="hidden" 
				id="g-recaptcha-response-order" 
				name="g-recaptcha-response-order">
		</form>
		<?php
		return ob_get_clean();
	}
	
	// Handler for form_order form
	function handler_form_order() {
		if ( isset($_POST['id_form_order']) && wp_verify_nonce($_POST['form_order_nonce'], 'form-order-nonce') ) {
			
			// Check the honeypot field
			if (!empty($_POST['website'])) {
				// If the honeypot field is filled out, it's a bot
				return;
			}
			
			// Get the current timestamp and the timestamp from the form.
			$current_timestamp = time();
			$form_timestamp = $_POST['form_timestamp'];

			// Check if the form was submitted too quickly after being displayed
			if (($current_timestamp - $form_timestamp) < 1) { // 1 seconds for example
				// Form was submitted too quickly, likely by a bot
				return;
			}

			$phone = sanitize_text_field($_POST["user_phone"]);

			// ... your existing code ...

			$to = 'praktikusdal@yandex.ru';
			$subject = 'Заказать звонок';
			$message = "Телефон: ". $phone ."\r\n";
			$headers = array(
				'Envelope-from: <info@otchet-studenta.ru>',
				'From: '.get_bloginfo('name').' <info@otchet-studenta.ru>',
				'Reply-To: praktikusdal@yandex.ru',
			);
			$headers = implode("\r\n", $headers);
			$response_mail = wp_mail( $to, $subject, $message, $headers);
		}
	}
	add_action('init', 'handler_form_order');
?>