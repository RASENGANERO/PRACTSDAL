<?php
	$categories = get_categories(['parent' => 0]);
	$settings = $args['settings'];
	$default_settings = [
		'section_title' => 'Рассчитать стоимость',
		'section_subtitle' => 'Отправьте заявку и получите ответ с предложениями по цене и срокам в течение часа.',
		'popup_title' => 'Заполните форму и получите расчет',
	];
	foreach ($default_settings as $key => $value)
	{
		if (!isset($settings[$key]) || !$settings[$key]) $settings[$key] = $value;
	}
	$GLOBALS['ccbd_footer_calc'] = 1;
?>
<div class="modal-wrapper big---modal" id="ccbd-modal-calc">
	<div class="modal-layout"></div>
	<div class="modal-content">
		<div class="modal-header">
			<div class="modal-title"><?php echo $settings['popup_title'] ?></div>
			<button class="modal-close"></button>
		</div>
		<div class="modal-body">
			<?php if (0): ?>
				<form method="POST" action="javascript:void(0)" class="ccbd-flex-wrap ccbd-calc-form" id="ccbd-calc-form">
					<input type="hidden" name="vid_raboty" id="vid_raboty">
					<div class="ccbd-flex-wrap-c ccbd-form-group ccbd-form-group-select">
						<label for="ccbd-popup-calc-type-m" class="ccbd-form-label">Вид работы*</label>
						<select id="ccbd-popup-calc-type-m" class="ccbd-form-control" required>
							<option value="Выберите вид работы">Выберите вид работы</option>
							<?php foreach ($categories as $category): ?>
								<option value="<?php echo $category->name ?>"><?php echo $category->name ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="ccbd-flex-wrap-c ccbd-form-group">
						<input type="text" class="ccbd-form-control" id="ccbd-popup-calc-subject" placeholder="Введите название предмета *">
					</div>
					<div class="ccbd-flex-wrap-c ccbd-form-group">
						<input type="text" class="ccbd-form-control" id="ccbd-popup-calc-name" required placeholder="Введите ваше имя *">
					</div>
					<div class="ccbd-flex-wrap-c ccbd-form-group">
						<input type="email" class="ccbd-form-control" id="ccbd-popup-calc-email" required placeholder="Введите ваш email *">
					</div>
					<div class="ccbd-flex-wrap-c ccbd-form-group ccbd-submit-group">
						<button type="submit" class="ccbd-button">Узнать стоимость</button>
						<label>
							<input type="checkbox" name="">
							<span>Даю согласие на обработку персональных данных, с Политикой конфиденциальности ознакомлен, с условиями Пользовательского соглашения согласен</span>
						</label>
					</div>
				</form>
			<?php else: ?>
				<?php echo do_shortcode('[contact-form-7 id="41b36f8" title="Форма для калькулятора"]') ?>
			<?php endif ?>
		</div>
	</div>
</div>