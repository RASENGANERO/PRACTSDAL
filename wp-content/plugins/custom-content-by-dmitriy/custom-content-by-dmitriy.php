<?php

/**
 * Plugin Name: Custom Content By Dmitriy
 * Description: Custom Content for pages
 *
 * Author URI:  https://t.me/kardinal9897
 * Author:      Dmitriy
 */

class CCBD
{
	private $nonceField;
	private $nonceName;

	private $popupCalcSettings = [];
	private $pluses1Settings = [];
	private $reviewsSliderSettings = [];
	private $stepsSettings = [];
	private $pluses2Settings = [];
	private $guaranteesSettings = [];
	private $otherServicesSettings = [];

	/*
	[ccbd_popup_calc]
	[ccbd_pluses_1]
	[ccbd_reviews_slider]
	[ccbd_steps]
	[ccbd_pluses_2]
	[ccbd_guarantees]
	[ccbd_other_services]
	*/

	function __construct()
	{
		$this->ccbdLoadValues();

		$this->nonceField = plugin_basename(__FILE__);
		$this->nonceName = 'custom_content_by_dmitriy';

		/*Admin hooks*/
		add_action('admin_menu', [$this, 'ccbdAdminMenu']);
		add_action('admin_init', [$this, 'ccbdAdminInit']);
		add_action('admin_enqueue_scripts', [$this, 'ccbdAdminEnqueueScripts']);
		/*Shortcodes*/
		add_shortcode('ccbd_popup_calc' , [$this, 'ccbdPopupCalc']);
		add_shortcode('ccbd_pluses_1' , [$this, 'ccbdPluses1']);
		add_shortcode('ccbd_reviews_slider' , [$this, 'ccbdReviewsSlider']);
		add_shortcode('ccbd_steps' , [$this, 'ccbdSteps']);
		add_shortcode('ccbd_pluses_2' , [$this, 'ccbdPluses2']);
		add_shortcode('ccbd_guarantees' , [$this, 'ccbdGuarantees']);
		add_shortcode('ccbd_other_services' , [$this, 'ccbdOtherServices']);
		/*Front hooks*/
		add_action('wp_enqueue_scripts', [$this, 'ccbdEnqueueScripts']);
		add_filter('get_the_archive_description', [$this, 'ccbdArchiveDescription']);
		add_action('get_footer', [$this, 'ccbdGetFooter'], 10, 2);
		add_action('wp_footer', [$this, 'ccbdFooter']);
		add_filter('the_content', [$this, 'ccbdTheContent']);
	}

	public function ccbdLoadValues()
	{
		$this->popupCalcSettings = [
			'section_title' => get_option('ccbd_calc_section_title'),
			'section_subtitle' => get_option('ccbd_calc_section_subtitle'),
			'section_image' => get_option('ccbd_calc_section_image'),
			'button_text' => get_option('ccbd_calc_button_text'),
			'popup_title' => get_option('ccbd_calc_popup_title'),
		];
		$this->pluses1Settings = [
			'section_title' => get_option('ccbd_p1_section_title'),
			'pluses_list' => get_option('ccbd_p1_pluses_list'),
		];
		$this->reviewsSliderSettings = [
			'section_title' => get_option('ccbd_rev_section_title'),
			'reviews_list' => get_option('ccbd_rev_reviews_list'),
		];
		$this->stepsSettings = [
			'section_title' => get_option('ccbd_stp_section_title'),
			'section_text' => get_option('ccbd_stp_section_text'),
			'steps_list' => get_option('ccbd_stp_steps_list'),
		];
		$this->pluses2Settings = [
			'section_title' => get_option('ccbd_p2_section_title'),
			'section_subtitle' => get_option('ccbd_p2_section_subtitle'),
			'section_text' => get_option('ccbd_p2_section_text'),
			'pluses_list' => get_option('ccbd_p2_pluses_list'),
		];
		$this->guaranteesSettings = [
			'section_title_1' => get_option('ccbd_gr_section_title_1'),
			'section_text_1' => get_option('ccbd_gr_section_text_1'),
			'section_image_1' => get_option('ccbd_gr_section_image_1'),
			'section_title_2' => get_option('ccbd_gr_section_title_2'),
			'section_text_2' => get_option('ccbd_gr_section_text_2'),
			'section_image_2' => get_option('ccbd_gr_section_image_2'),
		];
		$this->otherServicesSettings = [];
	}

	public function ccbdAdminMenu($context)
	{
		add_menu_page('Custom Content', 'Custom Content', 'manage_options', 'ccbdSettings', [$this, 'ccbdSettings']);
	}
	public function ccbdAdminInit()
	{
		if (!isset($_POST[$this->nonceName])) return;
		if (!wp_verify_nonce($_POST[$this->nonceName], $this->nonceField)) return;

		foreach ($_POST as $section_key => $section_data)
		{
			foreach ($section_data as $option_name => $option_value)
			{
				$option_name = $section_key.'_'.$option_name;
				if (is_array($option_value))
				{
					$real_option_value = [];
					foreach ($option_value as $key => $values_data)
					{
						if ($key == 'is_delete') continue;
						foreach ($values_data as $index => $value)
						{
							$real_option_value[$index][$key] = $value;
						}
					}
					unset($real_option_value['cooount']);
					foreach ($option_value['is_delete'] as $index => $value)
					{
						unset($real_option_value[$index]);
					}
					array_values($real_option_value);
					if ($real_option_value) update_option($option_name, $real_option_value, 'no');
					else delete_option($option_name);
				}
				else
				{
					if ($option_value) update_option($option_name, $option_value, 'no');
					else delete_option($option_name);
				}
			}
		}

		wp_redirect($_POST['_wp_http_referer'], 302);
		die();
	}
	public function ccbdAdminEnqueueScripts($hook)
	{
		if (isset($_GET['page']) && $_GET['page'] == 'ccbdSettings' && !did_action('wp_enqueue_media'))
		{
			wp_enqueue_media();
		}
	}

	public function ccbdEnqueueScripts()
	{
		wp_enqueue_style('dashicons');
		wp_enqueue_style('ccbd-swiper', plugin_dir_url(__FILE__).'assets/swiper/swiper-bundle.min.css');
		wp_enqueue_style('ccbd-modal', plugin_dir_url(__FILE__).'assets/modal/modal.css');
		wp_enqueue_style('ccbd-styles', plugin_dir_url(__FILE__).'assets/css/ccbd-styles.css');

		wp_enqueue_script('jquery-ui-selectmenu');
		wp_enqueue_script('ccbd-swiper', plugin_dir_url(__FILE__).'assets/swiper/swiper-bundle.min.js');
		wp_enqueue_script('ccbd-modal', plugin_dir_url(__FILE__).'assets/modal/modal.js', ['jquery']);
		wp_enqueue_script('ccbd-scripts', plugin_dir_url(__FILE__).'assets/js/ccbd-scripts.js', ['jquery', 'ccbd-swiper', 'jquery-ui-selectmenu']);
	}
	public function ccbdArchiveDescription($description)
	{
		ob_start();
		load_template(__DIR__.'/views/popupcalc.php', false, ['settings' => $this->popupCalcSettings]);
		$html = ob_get_clean();
		return $description.$html;
	}
	public function ccbdGetFooter($name, $args)
	{
		if (is_single())
		{
			load_template(__DIR__.'/views/guarantees.php', false, ['settings' => $this->guaranteesSettings]);
			load_template(__DIR__.'/views/pluses2.php', false, ['settings' => $this->pluses2Settings]);
		}
		elseif (is_archive() || is_page())
		{
			load_template(__DIR__.'/views/pluses2.php', false, ['settings' => $this->pluses2Settings]);
		}
	}
	public function ccbdFooter()
	{
		load_template(__DIR__.'/views/footer/calc.php', false, ['settings' => $this->popupCalcSettings]);
	}
	public function ccbdTheContent($content)
	{
		if (!is_page())
		{
			$categories = get_the_category();
			foreach ($categories as $term)
			{
				if ($term->term_id == 6 || $term->category_parent == 6) return $content;
			}
			$pattern = '!<h2.*?\</h2>!s';
			preg_match_all($pattern, $content, $matches);
			foreach ($matches[0] as $key => $search)
			{
				$class = 'content-form-'.($key % 2 == 0 ? 'left' : 'right');
				$shortcode = '<div class="content-form '.$class.'">[contact-form-7 id="f532d27" title="Контактная форма 2"]</div>';
				$content = str_replace($search, '<div class="content-form-clear"></div>'.$search.$shortcode, $content);
			}
			$content = $content.'<div class="content-form-clear"></div>';
		}
		return $content;
	}

	public function ccbdSettings()
	{
		load_template(__DIR__.'/views/admin/settings.php', false, [
			'ccbd_popup_calc' => $this->popupCalcSettings,
			'ccbd_pluses_1' => $this->pluses1Settings,
			'ccbd_reviews_slider' => $this->reviewsSliderSettings,
			'ccbd_steps' => $this->stepsSettings,
			'ccbd_pluses_2' => $this->pluses2Settings,
			'ccbd_guarantees' => $this->guaranteesSettings,
			'ccbd_other_services' => $this->otherServicesSettings,
			'nonceField' => $this->nonceField,
			'nonceName' => $this->nonceName,
		]);
	}

	public function ccbdPopupCalc($atts)
	{
		ob_start();
		load_template(__DIR__.'/views/popupcalc.php', false, ['settings' => $this->popupCalcSettings]);
		$html = ob_get_clean();
		return $html;
	}
	public function ccbdPluses1($atts)
	{
		ob_start();
		load_template(__DIR__.'/views/pluses1.php', false, ['settings' => $this->pluses1Settings]);
		$html = ob_get_clean();
		return $html;
	}
	public function ccbdReviewsSlider($atts)
	{
		ob_start();
		load_template(__DIR__.'/views/reviews_slider.php', false, ['settings' => $this->reviewsSliderSettings]);
		$html = ob_get_clean();
		return $html;
	}
	public function ccbdSteps($atts)
	{
		ob_start();
		load_template(__DIR__.'/views/steps.php', false, ['settings' => $this->stepsSettings]);
		$html = ob_get_clean();
		return $html;
	}
	public function ccbdPluses2($atts)
	{
		ob_start();
		load_template(__DIR__.'/views/pluses2.php', false, ['settings' => $this->pluses2Settings]);
		$html = ob_get_clean();
		return $html;
	}
	public function ccbdGuarantees($atts)
	{
		ob_start();
		load_template(__DIR__.'/views/guarantees.php', false, ['settings' => $this->guaranteesSettings]);
		$html = ob_get_clean();
		return $html;
	}
	public function ccbdOtherServices($atts)
	{
		ob_start();
		load_template(__DIR__.'/views/other_services.php', false, ['settings' => $this->otherServicesSettings]);
		$html = ob_get_clean();
		return $html;
	}
}

global $ccbd;
$ccbd = new CCBD();

function ccbd_true_image_uploader_field($args)
{
	$value = $args['value'];
	$default = plugin_dir_url(__FILE__).'assets/images/no-image.jpg';
 
	if($value && ($image_attributes = wp_get_attachment_image_src($value, array(150, 150))))
	{
		$src = $image_attributes[0];
	}
	else
	{
		$src = $default;
	}
	echo '
	<div>
		<img data-src="'.$default.'" src="'.$src.'" width="150">
		<div>
			<input type="hidden" name="'.$args['name'].'" id="'.$args['id'].'" value="'.$value.'">
			<button type="button" class="upload_image_button button">Загрузить</button>
			<button type="button" class="remove_image_button button">×</button>
		</div>
	</div>
	';
}



	/*add_action( 'wp_mail_failed', 'onMailError', 10, 1 );
	function onMailError($wp_error)
	{
		echo "<pre>";
		print_r($wp_error);
		echo "</pre>";
	}*/