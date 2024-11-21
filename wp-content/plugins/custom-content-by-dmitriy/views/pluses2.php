<?php
	/*p2_*/
	$settings = $args['settings'];
	$default_settings = [
		'section_title' => 'Спасаем даже в самые горящие сроки!',
		'section_subtitle' => 'Не успеваешь сдать работу? Не паникуй! Мы выполним срочный заказ быстро и качественно.',
		'section_text' => '<b>'.get_bloginfo().'</b> – с нами твоя учеба станет легче и приятнее!',
		'button_text' => 'Узнать стоимость',
		'pluses_list' => [
			[
				'title' => 'Высокая уникальность',
				'text' => 'Высокая уникальность по всем известным системам антиплагиата. Гарантируем оригинальность каждой работы, проверенную на всех популярных сервисах.',
				'image' => '/wp-content/uploads/2024/08/vysokaya-unikalnost.png',
			],
			[
				'title' => 'Только актуальные, свежие источники.',
				'text' => 'Используем только проверенные и актуальные материалы для твоей работы.',
				'image' => '/wp-content/uploads/2024/08/tolko-aktualnye-svezhie-istochniki.png',
			],
			[
				'title' => 'Безопасная оплата после выполнения.',
				'text' => 'Ты оплачиваешь работу только после того, как убедишься в ее качестве.',
				'image' => '/wp-content/uploads/2024/08/bezopasnaya-oplata-posle-vypolneniya.png',
			],
			[
				'title' => 'Готовая работа в любом формате.',
				'text' => 'Предоставим работу в нужном тебе формате – Word, PDF, презентация и т.д.',
				'image' => '/wp-content/uploads/2024/08/gotovaya-rabota-v-lyubom-formate.png',
			],
			[
				'title' => 'Расчеты, чертежи и рисунки любой сложности.',
				'text' => 'Выполняем задания по различным техническим дисциплинам, используя COMPAS, 1С, 3D редакторы и другие программы.',
				'image' => '/wp-content/uploads/2024/08/raschety-chertezhi-i-risunki-lyuboj-slozhnosti.png',
			],
			[
				'title' => 'Полная анонимность.',
				'text' => 'Гарантируем полную конфиденциальность – никто не узнает о нашем сотрудничестве. Общайся с нами в любом удобном',
				'image' => '/wp-content/uploads/2024/08/polnaya-anonimnost.png',
			],
			[
				'title' => 'Доставка оригиналов по всей России.',
				'text' => 'Отправим оригиналы документов курьером или почтой в любую точку страны.',
				'image' => '/wp-content/uploads/2024/08/dostavka-originalov-po-vsej-rossii.png',
			],
			[
				'title' => 'Оформление практики под ключ.',
				'text' => 'Предоставляем полный пакет документов для прохождения практики – с печатями, подписями и гарантией подлинности.',
				'image' => '/wp-content/uploads/2024/08/oformlenie-praktiki-pod-klyuch.png',
			],
			[
				'title' => 'Любые корректировки – бесплатно и бессрочно!',
				'text' => 'Вносим правки в работу до тех пор, пока ты не будешь полностью доволен результатом.',
				'image' => '/wp-content/uploads/2024/08/lyubye-korrektirovki-besplatno-i-besrochno.png',
			],
			[
				'title' => 'Личный менеджер для каждого клиента.',
				'text' => 'Твой персональный менеджер ответит на все вопросы и поможет на всех этапах сотрудничества.',
				'image' => '/wp-content/uploads/2024/08/lichnyj-menedzher-dlya-kazhdogo-klienta.png',
			],
			[
				'title' => 'Непрерывная поддержка 24/7.',
				'text' => 'Мы на связи круглосуточно и готовы ответить на твои вопросы в любое время.',
				'image' => '/wp-content/uploads/2024/08/nepreryvnaya-podderzhka-24na7.png',
			],
			[
				'title' => 'Индивидуальный подход.',
				'text' => 'Учитываем все пожелания и требования — даже самых строгих преподавателей.',
				'image' => '/wp-content/uploads/2024/08/individualnyj-podhod.png',
			],
			[
				'title' => 'Моментальная сдача тестов и экзаменов онлайн.',
				'text' => 'Поможем успешно сдать тесты и экзамены любой сложности с оплатой по факту получения оценки.',
				'image' => '/wp-content/uploads/2024/08/momentalnaya-sdacha-testov-i-ekzamenov-onlajn-e1722586607269.png',
			],
			[
				'title' => 'Гарантия возврата.',
				'text' => 'Мы уверены в качестве своих услуг, поэтому предлагаем гарантию возврата средств, если результат тебя не устроит.',
				'image' => '/wp-content/uploads/2024/08/garantiya-vozvrata.png',
			],
			[
				'title' => 'Прозрачность процесса.',
				'text' => 'Ты сможешь отслеживать выполнение своей работы в личном кабинете.',
				'image' => '/wp-content/uploads/2024/08/prozrachnost-proczessa.png',
			],
			[
				'title' => 'Работаем официально.',
				'text' => 'Мы – зарегистрированная компания, заключаем договор на оказание услуг, что гарантирует твою безопасность.',
				'image' => '/wp-content/uploads/2024/08/rabotaem-oficzialno.png',
			],
			[
				'title' => 'Отзывы реальных студентов.',
				'text' => 'Не верь на слово – ознакомься с отзывами наших клиентов!',
				'image' => '/wp-content/uploads/2024/08/otzyvy-realnyh-studentov.png',
			],
			[
				'title' => 'Бонусная программа.',
				'text' => 'Получай скидки, бонусы и участвуй в акциях!',
				'image' => '/wp-content/uploads/2024/08/bonusnaya-programma.png',
			],
			[
				'title' => 'Полезные материалы.',
				'text' => 'Скачивай шаблоны работ, читай полезные статьи и получай советы по учебе в нашем блоге.',
				'image' => '/wp-content/uploads/2024/08/poleznye-materialy.png',
			],
			[
				'title' => 'Бесплатная консультация.',
				'text' => 'Затрудняешься с выбором темы или составлением плана работы? Мы поможем!',
				'image' => '/wp-content/uploads/2024/08/besplatnaya-konsultacziya.png',
			],
		],
	];
	foreach ($default_settings as $key => $value)
	{
		if (!isset($settings[$key]) || !$settings[$key]) $settings[$key] = $value;
	}
	$GLOBALS['ccbd_footer_calc'] = 1;
?>
<div class="ccbd-wrapper ccbd-pluses2-wrapper">
	<div class="ccbd-pluses2-wrap">
		<div class="section-block__title"><?php echo $settings['section_title'] ?></div>
		<div class="section-block__subtitle"><?php echo $settings['section_subtitle'] ?></div>
		<ul class="ccbd-flex-wrap j-c-f-s ccbd-pluses2-list">
			<?php foreach ($settings['pluses_list'] as $key => $item): ?>
				<li class="ccbd-flex-wrap-c ccbd-a-i-f-s ccbd-pluses2-item" data-number="<?php echo $key + 1 ?>">
					<div class="ccbd-pluses2-item-title"><?php echo $item['title'] ?></div>
					<div class="ccbd-pluses2-item-text"><?php echo $item['text'] ?></div>
					<img src="<?php echo $item['image'] ?>" alt="<?php echo esc_attr($item['title']) ?>" title="<?php echo esc_attr($item['title']) ?>" class="ccbd-pluses2-item-image" loading="lazy">
				</li>
			<?php endforeach ?>
		</ul>
		<div class="section-block__subtitle"><?php echo $settings['section_text'] ?></div>
		<button type="button" class="ccbd-button modal-open" data-modal="#ccbd-modal-calc"><?php echo $settings['button_text'] ?></button>
	</div>
</div>