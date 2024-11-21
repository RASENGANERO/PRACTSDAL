<?php
	/*p1_*/
	$settings = $args['settings'];
	$default_icon = plugin_dir_url(__FILE__).'../assets/images/pluses1-col-icon.png';
	$default_settings = [
		'section_title' => 'Наши принципы работы',
		'pluses_list' => [
			[
				'icon' => $default_icon,
				'text' => 'Сдача точно в срок или поэтапно',
			],
			[
				'icon' => $default_icon,
				'text' => 'Поддержка и гарантия до защиты',
			],
			[
				'icon' => $default_icon,
				'text' => 'Полное соответствие требованиям',
			],
			[
				'icon' => $default_icon,
				'text' => 'Безопасная оплата и приватность',
			],
		],
		'pluses_video' => 'https://www.youtube.com/embed/HKVJ2JfhuNk',
		'pluses_video_poster' => 'https://img.youtube.com/vi/HKVJ2JfhuNk/maxresdefault.jpg',
	];
	foreach ($default_settings as $key => $value)
	{
		if (!isset($settings[$key]) || !$settings[$key]) $settings[$key] = $value;
	}
?>
<div class="ccbd-wrapper ccbd-pluses1-wrapper">
	<div class="ccbd-flex-wrap ccbd-pluses1-wrap">
		<div class="ccbd-pluses1-col ccbd-pluses1-col-title">
			<div class="ccbd-pluses1-title section-block__title"><?php echo $settings['section_title'] ?></div>
		</div>
		<?php foreach ($settings['pluses_list'] as $key => $item): ?>
			<?php
				if (is_numeric($item['icon'])) $item['icon'] = wp_get_attachment_image_url($item['icon'], 'full');
				elseif (!$item['icon']) $item['icon'] = $default_icon;
			?>
			<div class="ccbd-pluses1-col">
				<?php if (0): ?>
					<img src="<?php echo $item['icon'] ?>" class="ccbd-pluses1-col-icon" loading="lazy">
				<?php endif ?>
				<div class="ccbd-pluses1-col-icon" style="mask-image: url('<?php echo $item['icon'] ?>');-webkit-mask-image: url('<?php echo $item['icon'] ?>');"></div>
				<div class="ccbd-pluses1-col-text"><?php echo $item['text'] ?></div>
			</div>
			<?php if ($key == 1): ?>
				<div class="ccbd-pluses1-col ccbd-pluses1-col-video" style="min-height: 180px;">
					<a href="<?php echo $settings['pluses_video'] ?>" data-fancybox="video">
						<img src="<?php echo $settings['pluses_video_poster'] ?>" loading="lazy">
					</a>
					<!-- <iframe class="ccbd-video__stream" src="<?php echo $settings['pluses_video'] ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
</div>