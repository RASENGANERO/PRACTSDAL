<?php
	if (!is_single()) return;

	$settings = $args['settings'];
	$default_settings = [
		'section_title' => 'Другие наши услуги',
	];
	foreach ($default_settings as $key => $value)
	{
		if (!isset($settings[$key]) || !$settings[$key]) $settings[$key] = $value;
	}
	$post_categories = get_the_category();
	foreach ($post_categories as $key => $term)
	{
		$post_categories[$key] = $term->term_id;
	}
	$categories = get_categories(['parent' => 0, 'exclude' => $post_categories]);
?>
<div class="ccbd-wrapper ccbd-other_services-wrapper">
	<div class="section-block__title" style="text-align: center;"><?php echo $settings['section_title'] ?></div>
	<div class="ccbd-flex-wrap ccbd-j-c-f-s ccbd-other_services-wrap">
		<?php foreach ($categories as $term): ?>
			<a href="<?php echo get_category_link($term->term_id) ?>" class="ccbd-other_services-item">
				<span class="dashicons dashicons-editor-spellcheck"></span>
				<div class="ccbd-other_services-item-name"><?php echo $term->name ?></div>
			</a>
		<?php endforeach ?>
	</div>
</div>