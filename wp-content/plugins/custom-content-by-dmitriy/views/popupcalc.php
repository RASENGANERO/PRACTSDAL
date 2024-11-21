<?php
	/*calc_*/
	$categories = get_categories(['parent' => 0]);
	$settings = $args['settings'];
	$default_settings = [
		'section_title' => 'Рассчитать стоимость',
		'section_subtitle' => 'Отправьте заявку и получите ответ с предложениями по цене и срокам в течение часа.',
		'section_image' => plugin_dir_url(__FILE__).'../assets/images/popupcalc.png',
		'button_text' => 'Узнать стоимость',
		'popup_title' => 'Заполните форму и получите расчет',
	];
	foreach ($default_settings as $key => $value)
	{
		if (!isset($settings[$key]) || !$settings[$key]) $settings[$key] = $value;
	}
	if (is_numeric($settings['section_image']))
	{
		$settings['section_image'] = wp_get_attachment_image_url($settings['section_image'], 'full');
	}
	$GLOBALS['ccbd_footer_calc'] = 1;
?>
<div class="ccbd-wrapper ccbd-popup-calc-wrapper">
	<div class="ccbd-flex-wrap ccbd-a-i-c ccbd-popup-calc-wrap">
		<div class="ccbd-popup-calc-col ccbd-flex-wrap-c">
			<div class="section-block__title"><?php echo $settings['section_title'] ?></div>
			<div class="section-block__subtitle"><?php echo $settings['section_subtitle'] ?></div>
			<div class="ccbd-flex-wrap-c ccbd-form-group ccbd-form-group-select">
				<label for="ccbd-popup-calc-type" class="ccbd-form-label">Вид работы</label>
				<select id="ccbd-popup-calc-type" class="ccbd-form-control">
					<option value="">Выберите вид работы</option>
					<option value="ВКР">ВКР</option>
					<option value="Курсовая">Курсовая</option>
					<option value="Лабораторная">Лабораторная</option>
					<option value="Тест">Тест</option>
					<option value="Отчёт по практике">Отчёт по практике</option>
					<option value="Дистанционное обучение">Дистанционное обучение</option>
				</select>
			</div>
			<button type="button" class="ccbd-button modal-open" data-modal="#ccbd-modal-calc"><?php echo $settings['button_text'] ?></button>
		</div>
		<div class="ccbd-popup-calc-col hide-in-cats">
			<img src="<?php echo $settings['section_image'] ?>" loading="lazy">
		</div>
	</div>
</div>