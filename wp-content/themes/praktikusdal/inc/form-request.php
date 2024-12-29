<?php 

/**
* Add form request with Honeypot and Timestamp
*/

// Shortcode for form_request
function short_form_request() {
  $output = form_request_fields();
  return $output;
}
add_shortcode('form_request', 'short_form_request');

// Markup for form_request form
function form_request_fields() {
  // Generate a timestamp when the form is created.
  $timestamp = time();
  ob_start(); ?>
    <form class="form form--post form-request" action="" method="POST" onsubmit="yaCounter61086415.reachGoal('form1')">
      <div class="form__title">
        Нужна помощь и консультация? Пиши!
      </div>
      <input  
	     class="form__input" 
        type="text" 
        name="user_practice" 
        placeholder="Тип работы" 
        required>
      <input 
        class="form__input" 
        type="email" 
        placeholder="Ваш E-mail" 
        name="user_email" 
        required>

      <!-- Honeypot Field -->
      <div style="position:absolute; left:-5000px;" aria-hidden="true">
        <input type="text" name="website" tabindex="-1" autocomplete="off">
      </div>

      <!-- Timestamp field -->
      <input type="hidden" name="form_timestamp" value="<?php echo $timestamp; ?>">

      <button class="button form__button form-request__button" type="submit">
        Отправить заявку
      </button>
      <input 
        type="hidden" 
        name="id_form_request" 
        value="id-form-request">
      <input 
        type="hidden" 
        name="form_request_nonce" 
        value="<?php echo wp_create_nonce('form-request-nonce'); ?>">
      <input 
        type="hidden" 
        id="g-recaptcha-response-request" 
        name="g-recaptcha-response-request">
    </form>
	<!-- ... остальная часть вашего HTML/CSS ... -->
  <?php
  return ob_get_clean();
}

// Handler for form_request form
function handler_form_request() {

  if ( isset($_POST['id_form_request']) && wp_verify_nonce($_POST['form_request_nonce'], 'form-request-nonce') ) {
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

    $practice = sanitize_text_field($_POST["user_practice"]);
    $email = sanitize_email($_POST["user_email"]);

    // ... your existing code ...

    $to = 'praktikusdal@yandex.ru';
    $subject = 'Обратная связь';
    $message = "Тип практики: ". $practice ."\r\n";
    $message .= "Почта: ". $email ."\r\n";
    $headers = array(
      'Envelope-from: <info@otchet-studenta.ru>',
      'From: '.get_bloginfo('name').' <info@otchet-studenta.ru>',
      'Reply-To: praktikusdal@yandex.ru',
    );
    $headers = implode("\r\n", $headers);
    $response_mail = wp_mail( $to, $subject, $message, $headers);
  }
}
add_action('init', 'handler_form_request');
?>
