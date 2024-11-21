<?php
	/*gr_*/
	$settings = $args['settings'];
	$default_settings = [
		'section_title_1' => 'Что такое гарантийная поддержка?',
		'section_text_1' => 'Для каждого заказа предусмотрена гарантийная поддержка. Для диплома срок составляет 30 дней. Если вас не устроило качество работы или ее уникальность, обратитесь за доработками. Доработки будут выполнены бесплатно.',
		'section_image_1' => plugin_dir_url(__FILE__).'../assets/images/popupcalc.png',

		'section_title_2' => 'Гарантированная уникальность диплома от 75%',
		'section_text_2' => 'У нас разработаны правила проверки уникальности. Перед отправкой работы она будет проверена на сайте antiplagiat.ru. Также, при оформлении заказа вы можете указать необходимую вам систему проверки и процент оригинальности, тогда эксперт будет выполнять заказ согласно указанным требованиям.',
		'section_image_2' => plugin_dir_url(__FILE__).'../assets/images/popupcalc.png',
	];
	foreach ($default_settings as $key => $value)
	{
		if (!isset($settings[$key]) || !$settings[$key]) $settings[$key] = $value;
	}
	if (is_numeric($settings['section_image_1']))
	{
		$settings['section_image_1'] = wp_get_attachment_image_url($settings['section_image_1'], 'full');
	}
	if (is_numeric($settings['section_image_2']))
	{
		$settings['section_image_2'] = wp_get_attachment_image_url($settings['section_image_2'], 'full');
	}
?>
<div class="ccbd-wrapper ccbd-guarantees-wrapper">
	<div class="ccbd-flex-wrap ccbd-a-i-c ccbd-guarantees-wrap ccbd-guarantees-first">
		<div class="ccbd-flex-wrap-c ccbd-guarantees-content">
			<div class="section-block__title"><?php echo $settings['section_title_1'] ?></div>
			<div class="section-block__subtitle"><?php echo $settings['section_text_1'] ?></div>
		</div>
		<div class="ccbd-guarantees-image-wrap">
			<img src="<?php echo $settings['section_image_1'] ?>" class="ccbd-guarantees-image" loading="lazy">
		</div>
	</div>
	<div class="ccbd-flex-wrap ccbd-a-i-c ccbd-guarantees-wrap ccbd-guarantees-second">
		<div class="ccbd-guarantees-image-wrap">
			<img src="<?php echo $settings['section_image_2'] ?>" class="ccbd-guarantees-image" loading="lazy">
		</div>
		<div class="ccbd-flex-wrap-c ccbd-guarantees-content">
			<div class="section-block__title"><?php echo $settings['section_title_2'] ?></div>
			<div class="section-block__subtitle"><?php echo $settings['section_text_2'] ?></div>
		</div>
	</div>
</div>