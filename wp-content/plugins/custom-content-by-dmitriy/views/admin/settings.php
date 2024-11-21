<?php
$tabs = [
	'ccbd_popup_calc' => [
		'title' => 'Блок со всплывающим калькулятором',
		'name' => 'ccbd_calc',
		'desc' => '',
		'fields' => [
			'section_title' => [
				'type' => 'text',
				'label' => 'Заголовок',
			],
			'section_subtitle' => [
				'type' => 'text',
				'label' => 'Подзаголовок',
			],
			'section_image' => [
				'type' => 'file',
				'label' => 'Иконка',
			],
			'button_text' => [
				'type' => 'text',
				'label' => 'Текст в кнопке',
			],
			'popup_title' => [
				'type' => 'text',
				'label' => 'Заголовок во всплывающей форме',
			],
		],
	],
	'ccbd_pluses_1' => [
		'title' => 'Блок с плюсами и видео',
		'name' => 'ccbd_p1',
		'desc' => '',
		'fields' => [
			'section_title' => [
				'type' => 'text',
				'label' => 'Заголовок',
			],
			'pluses_video' => [
				'type' => 'text',
				'label' => 'Ссылка на видео',
			],
			'pluses_video_poster' => [
				'type' => 'text',
				'label' => 'Ссылка на постер',
			],
			'pluses_list' => [
				'type' => 'repeater',
				'label' => 'Список преимуществ',
				'sub_fields' => [
					'icon' => [
						'type' => 'file',
						'label' => 'Картинка',
					],
					'text' => [
						'type' => 'text',
						'label' => 'Текст',
					],
				],
			],
		],
	],
	'ccbd_reviews_slider' => [
		'title' => 'Слайдер с отзывами',
		'name' => 'ccbd_rev',
		'desc' => '',
		'fields' => [
			'section_title' => [
				'type' => 'text',
				'label' => 'Заголовок',
			],
			'reviews_list' => [
				'type' => 'repeater',
				'label' => 'Список отзывов',
				'sub_fields' => [
					'avatar' => [
						'type' => 'file',
						'label' => 'Аватарка',
					],
					'name' => [
						'type' => 'text',
						'label' => 'Имя',
					],
					'city' => [
						'type' => 'text',
						'label' => 'Город',
					],
					'stars' => [
						'type' => 'number',
						'label' => 'Оценка от 1 до 5',
					],
					'text' => [
						'type' => 'textarea',
						'label' => 'Текст отзыва',
					],
				],
			],
		],
	],
	'ccbd_steps' => [
		'title' => 'Блок с шагами',
		'name' => 'ccbd_stp',
		'desc' => '',
		'fields' => [
			'section_title' => [
				'type' => 'text',
				'label' => 'Заголовок',
			],
			'section_text' => [
				'type' => 'textarea',
				'label' => 'Текст',
			],
			'steps_list' => [
				'type' => 'repeater',
				'label' => 'Список шагов',
				'sub_fields' => [
					'icon' => [
						'type' => 'file',
						'label' => 'Иконка',
					],
					'text' => [
						'type' => 'text',
						'label' => 'Текст',
					],
				],
			],
		],
	],
	'ccbd_pluses_2' => [
		'title' => 'Блок с плюсами текст + картинка',
		'name' => 'ccbd_p2',
		'desc' => '',
		'fields' => [
			'section_title' => [
				'type' => 'text',
				'label' => 'Заголовок',
			],
			'section_subtitle' => [
				'type' => 'text',
				'label' => 'Подзаголовок',
			],
			'section_text' => [
				'type' => 'textarea',
				'label' => 'Текст',
			],
			'button_text' => [
				'type' => 'text',
				'label' => 'Текст в кнопке',
			],
		],
	],
	'ccbd_guarantees' => [
		'title' => 'Блок с гарантиями',
		'name' => 'ccbd_gr',
		'desc' => '',
		'fields' => [
			'section_title_1' => [
				'type' => 'text',
				'label' => 'Заголовок 1',
			],
			'section_text_1' => [
				'type' => 'text',
				'label' => 'Текст 1',
			],
			'section_image_1' => [
				'type' => 'file',
				'label' => 'Картинка 1',
			],
			'section_title_2' => [
				'type' => 'text',
				'label' => 'Заголовок 2',
			],
			'section_text_2' => [
				'type' => 'text',
				'label' => 'Текст 2',
			],
			'section_image_2' => [
				'type' => 'file',
				'label' => 'Картинка 2',
			],
		],
	],
	/*'ccbd_other_services' => [
		'title' => 'Блок с другими услугами',
		'name' => 'ccbd_os',
		'desc' => '',
		'fields' => [],
	],*/
];

/*$to = 'PraktikaStudenta@yandex.ru';
$subject = 'Тестовая типо заявка';
$message = 'Текст сообщения заявки';
$headers = [
	'Envelope-from: <wordpress@praktika-studenta.ru>',
	'From: [_site_title] <wordpress@praktika-studenta.ru>',
];
$headers = implode("\r\n", $headers);
$res = wp_mail($to, $subject, $message, $headers);
print_r($res);*/

/*[ccbd_popup_calc]
[ccbd_pluses_1]
[ccbd_reviews_slider]
[ccbd_steps]
[ccbd_pluses_2]
[ccbd_guarantees]
[ccbd_other_services]*/
?>
<style type="text/css">
	.ccbd-settings-wrap * {
		box-sizing: border-box;
		text-decoration: none!important;
		outline: none!important;
	}
	.ccbd-settings-tabs-header {
		display: flex;
		max-width: 100%;
		overflow: auto;
	}
	.ccbd-settings-tabs-header a {
		white-space: nowrap;
		padding: 8px 12px;
		border: 1px solid #131313;
		border-radius: 10px 10px 0 0;
		color: #131313;
		box-shadow: none;
	}
	.ccbd-settings-tabs-header a + a {
		border-left: none;
	}
	.ccbd-settings-tabs-header a.current {
		color: green;
		font-weight: bold;
	}
	.repeater-wrap {
		margin-left: 32px;
		padding-left: 16px;
		border-left: 1px solid #131313;
	}
	.ccbd-settings-tabs-body [type=text], .ccbd-settings-tabs-body [type=number], .ccbd-settings-tabs-body textarea {
		width: 768px;
		max-width: 100%;
	}
	.repeater-item + .repeater-item {
		border-top: 1px solid #131313;
		margin-top: 16px;
		padding-top: 16px;
	}
	.repeater-item-field + .repeater-item-field {
		margin-top: 8px;
	}
</style>
<form action="" method="POST" class="wrap ccbd-settings-wrap">
	<h1><?php echo get_admin_page_title() ?></h1>
	<div class="ccbd-settings-tabs-header">
		<?php foreach ($tabs as $key => $tab): ?>
			<a href="#<?php echo $key ?>" class="<?php echo $key == 'ccbd_popup_calc' ? 'current' : '' ?>"><?php echo $tab['title'] ?></a>
		<?php endforeach ?>
	</div>
	<div class="ccbd-settings-tabs-body">
		<?php foreach ($tabs as $key => $tab): ?>
			<div id="<?php echo $key ?>" class="ccbd-settings-tab-item" style="display: <?php echo $key == 'ccbd_popup_calc' ? 'block' : 'none' ?>;">
				<p>Шорктод: <b>[<?php echo $key ?>]</b></p>
				<hr>
				<?php if (0): ?>
					<pre><?php print_r($args[$key]) ?></pre>
					<pre><?php print_r($tab) ?></pre>
				<?php endif ?>
				<?php foreach ($tab['fields'] as $name => $field): ?>
					<p>
						<label><?php echo $field['label'] ?></label><br>
						<?php
							$field_name = $tab['name'].'['.$name.']';
							$field_value = $args[$key][$name];
							$field_id = $tab['name'].'-'.$name;
						?>

						<?php if ($field['type'] == 'file'): ?>
							<?php
								$file_args = [
									'value' => $field_value,
									'name' => $field_name,
									'id' => $field_id,
								];
								ccbd_true_image_uploader_field($file_args);
							?>
						<?php elseif ($field['type'] == 'repeater'): ?>
							<div class="repeater-wrap">
								<?php if ($field_value): ?>
									<?php foreach ($field_value as $sub_key => $sub_value): ?>
										<div class="repeater-item repeater-item-content">
											<div class="repeater-item-field">
												<?php $deleted_name = $field_name.'[is_delete]['.$sub_key.']'; ?>
												<label>
													<input type="checkbox" name="<?php echo $deleted_name ?>"> Пометить на удаление
												</label>
											</div>
											<?php foreach ($field['sub_fields'] as $sub_name => $sub_field): ?>
												<div class="repeater-item-field">
													<label><?php echo $sub_field['label'] ?></label><br>
													<?php
														$sub_field_name = $field_name.'['.$sub_name.']['.$sub_key.']';
														$sub_field_id = $field_id.'-'.$sub_name.'-'.$sub_key.'';
													?>
													<?php if ($sub_field['type'] == 'file'): ?>
														<?php
															$file_args = [
																'value' => $sub_value[$sub_name],
																'name' => $sub_field_name,
																'id' => $sub_field_id,
															];
															ccbd_true_image_uploader_field($file_args);
														?>
													<?php elseif ($sub_field['type'] == 'textarea'): ?>
														<textarea name="<?php echo $sub_field_name ?>"><?php echo $sub_value[$sub_name] ?></textarea>
													<?php else: ?>
														<input type="<?php echo $sub_field['type'] ?>" name="<?php echo $sub_field_name ?>" value="<?php echo $sub_value[$sub_name] ?>">
													<?php endif ?>
												</div>
											<?php endforeach ?>
										</div>
									<?php endforeach ?>
								<?php endif ?>
								<div class="repeater-item" style="display: none;">
									<div class="repeater-item-field">
										<?php $deleted_name = $field_name.'[is_delete][cooount]'; ?>
										<label>
											<input type="checkbox" name="<?php echo $deleted_name ?>"> Пометить на удаление
										</label>
									</div>
									<?php foreach ($field['sub_fields'] as $sub_name => $sub_field): ?>
										<div class="repeater-item-field">
											<label><?php echo $sub_field['label'] ?></label><br>
											<?php
												$sub_field_name = $field_name.'['.$sub_name.'][cooount]';
												$sub_field_id = $field_id.'-'.$sub_name.'-cooount';
											?>
											<?php if ($sub_field['type'] == 'file'): ?>
												<?php
													$file_args = [
														'value' => 0,
														'name' => $sub_field_name,
														'id' => $sub_field_id,
													];
													ccbd_true_image_uploader_field($file_args);
												?>
											<?php elseif ($sub_field['type'] == 'textarea'): ?>
												<textarea name="<?php echo $sub_field_name ?>"></textarea>
											<?php else: ?>
												<input type="<?php echo $sub_field['type'] ?>" name="<?php echo $sub_field_name ?>" value="">
											<?php endif ?>
										</div>
									<?php endforeach ?>
								</div>
								<div class="repeater-item repeater-item-add-wrap">
									<button type="button" class="button repeater-item-add">Добавить</button>
								</div>
							</div>
						<?php elseif ($field['type'] == 'textarea'): ?>
							<textarea name="<?php echo $field_name ?>"><?php echo $field_value ?></textarea>
						<?php else: ?>
							<input type="<?php echo $field['type'] ?>" name="<?php echo $field_name ?>" value="<?php echo $field_value ?>">
						<?php endif ?>
					</p>
				<?php endforeach ?>
			</div>
		<?php endforeach ?>
	</div>
	<div style="margin-top: 25px;">
		<button type="submit" class="button button-primary">Сохранить</button>
		<?php wp_nonce_field($args['nonceField'], $args['nonceName']) ?>
	</div>
</form>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('body').on('click', '.ccbd-settings-tabs-header a', function(event) {
			event.preventDefault();
			let href = $(this).attr('href');
			$('.ccbd-settings-tab-item').hide();
			$(href).show();
			$('.ccbd-settings-tabs-header a').removeClass('current');
			$(this).addClass('current');
		});

		$('body').on('click', '.repeater-item-add', function(event) {
			event.preventDefault();
			let html = $(this).parent().prev().html(),
				count = $(this).parent().parent().find('.repeater-item-content').length;
			html = $.trim(html);
			html = '<div class="repeater-item-content">' + html + '</div>';
			html = html.replaceAll(/cooount/g, count);
			$(this).parent().prev().before(html);
		});

		/*
		 * действие при нажатии на кнопку загрузки изображения
		 * вы также можете привязать это действие к клику по самому изображению
		 */
		$('body').on('click', '.upload_image_button', function(event) {
	 
			event.preventDefault();
	 
			const button = $(this);
	 
			const customUploader = wp.media({
				title: 'Выберите изображение плз',
				library : {
					// uploadedTo : wp.media.view.settings.post.id, // если для метобокса и хотим прилепить к текущему посту
					type : 'image'
				},
				button: {
					text: 'Выбрать изображение' // текст кнопки, по умолчанию "Вставить в запись"
				},
				multiple: false
			});
	 
			// добавляем событие выбора изображения
			customUploader.on('select', function() {
	 
				const image = customUploader.state().get('selection').first().toJSON();
	 
				button.parent().prev().attr( 'src', image.url );
				button.prev().val( image.id );
	 
			});
	 
			// и открываем модальное окно с выбором изображения
			customUploader.open();
		});
		/*
		 * удаляем значение произвольного поля
		 * если быть точным, то мы просто удаляем value у <input type="hidden">
		 */
		$('body').on('click', '.remove_image_button', function(event) {
	 
			event.preventDefault();
	 
			if ( true == confirm( "Уверены?" ) ) {
				const src = $(this).parent().prev().data('src');
				$(this).parent().prev().attr('src', src);
				$(this).prev().prev().val('');
			}
		});
	});
</script>