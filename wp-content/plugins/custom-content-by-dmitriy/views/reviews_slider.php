<?php
	/*rev_*/
	$settings = $args['settings'];
	$default_avatars = [
		plugin_dir_url(__FILE__).'../assets/images/avatar.png',
	];
	$default_settings = [
		'section_title' => 'Отзывы наших клиентов',
		'reviews_list' => [
			[
				'avatar' => $default_avatars[0],
				'name' => 'Иван',
				'city' => 'г. Москва',
				'stars' => 5,
				'text' => 'Как уже неоднократно упомянуто, явные признаки победы институционализации рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок!',
			],
			[
				'avatar' => $default_avatars[0],
				'name' => 'Дмитрий',
				'city' => 'г. Рязань',
				'stars' => 4,
				'text' => 'С учётом сложившейся международной обстановки, дальнейшее развитие различных форм деятельности прекрасно подходит для реализации форм воздействия.',
			],
			[
				'avatar' => $default_avatars[0],
				'name' => 'Андрей',
				'city' => 'г. Севастополь',
				'stars' => 5,
				'text' => 'Противоположная точка зрения подразумевает, что акционеры крупнейших компаний лишь добавляют фракционных разногласий и подвергнуты целой серии независимых исследований.',
			],
			[
				'avatar' => $default_avatars[0],
				'name' => 'Анатолий',
				'city' => 'г. Казань',
				'stars' => 3,
				'text' => 'Как принято считать, элементы политического процесса неоднозначны и будут подвергнуты целой серии независимых исследований.',
			],
		],
	];
	foreach ($default_settings as $key => $value)
	{
		if (!isset($settings[$key]) || !$settings[$key]) $settings[$key] = $value;
	}
?>
<div class="ccbd-wrapper ccbd-reviews_slider-wrapper">
	<div class="ccbd-reviews_slider-title section-block__title"><?php echo $settings['section_title'] ?></div>
	<div class="swiper-container ccbd-reviews-swiper" id="ccbd-reviews-swiper">
		<div class="swiper-wrapper">
			<?php foreach ($settings['reviews_list'] as $key => $item): ?>
				<?php
					if (is_numeric($item['avatar'])) $item['avatar'] = wp_get_attachment_image_url($item['avatar'], 'full');
					elseif (!$item['avatar']) $item['avatar'] = $default_avatars[0];
				?>
				<div class="swiper-slide">
					<div class="ccbd-flex-wrap-c ccbd-review-slide">
						<div class="ccbd-flex-wrap ccbd-j-c-f-s ccbd-a-i-c ccbd-review-author">
							<img src="<?php echo $item['avatar'] ?>" loading="lazy">
							<strong><?php echo $item['name'] ?></strong>
							<span><?php echo $item['city'] ?></span>
						</div>
						<div class="ccbd-flex-wrap ccbd-j-c-f-s ccbd-review-stars">
							<?php for ($i=0; $i < 5; $i++):  ?>
								<span class="dashicons dashicons-star-<?php echo $i < $item['stars'] ? 'filled' : 'empty' ?>"></span>
							<?php endfor ?>
						</div>
						<div class="ccbd-review-text"><?php echo $item['text'] ?></div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</div>