<?php
	/*stp_*/
	$settings = $args['settings'];
	$default_icon = plugin_dir_url(__FILE__).'../assets/images/pluses1-col-icon.png';
	$default_settings = [
		'section_title' => 'Как сделать заказ?',
		'section_text' => 'Наши менеджеры всегда готовы ответить на ваши вопросы через online-консультант<br> или по телефону +7912 858-76-38. Также вы можете воспользоваться формой<br> отправки сообщений в личном кабинете.',
		'steps_list' => [
			[
				'icon' => $default_icon,
				'text' => 'Оставить заявку',
			],
			[
				'icon' => $default_icon,
				'text' => 'Обсудить заказ',
			],
			[
				'icon' => $default_icon,
				'text' => 'Ждать заказ',
			],
			[
				'icon' => $default_icon,
				'text' => 'Проверить заказ',
			],
			[
				'icon' => $default_icon,
				'text' => 'Оплатить заказ',
			],
			[
				'icon' => $default_icon,
				'text' => 'Получить работу',
			],
		],
	];
	foreach ($default_settings as $key => $value)
	{
		if (!isset($settings[$key]) || !$settings[$key]) $settings[$key] = $value;
	}
?>
<div class="ccbd-wrapper ccbd-steps-wrapper">
	<div class="ccbd-steps-title section-block__title"><?php echo $settings['section_title'] ?></div>
	<div class="ccbd-flex-wrap ccbd-j-c-c ccbd-steps-wrap">
		<?php foreach ($settings['steps_list'] as $key => $item): ?>
			<?php
				if (is_numeric($item['icon'])) $item['icon'] = wp_get_attachment_image_url($item['icon'], 'full');
				elseif (!$item['icon']) $item['icon'] = $default_icon;
			?>
			<div class="ccbd-flex-wrap-c ccbd-j-c-f-s ccbd-a-i-c ccbd-step-item">
				<div class="ccbd-flex-wrap ccbd-j-c-c ccbd-a-i-c ccbd-step-item-icon">
					<img src="<?php echo $item['icon'] ?>" loading="lazy">
				</div>
				<div class="ccbd-step-item-text"><?php echo $item['text'] ?></div>
			</div>
		<?php endforeach ?>
	</div>
	<div class="ccbd-steps-text"><?php echo $settings['section_text'] ?></div>
</div>