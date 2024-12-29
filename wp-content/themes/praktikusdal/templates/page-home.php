<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<main class="page__main">
	<?php get_template_part('template-parts/section-our-services'); ?>
	<?php get_template_part('template-parts/section-universities'); ?>
	<?php get_template_part('template-parts/section-warranty'); ?>
	<?php get_template_part('template-parts/section-reviews'); ?>
</main>
<div id="form-order">
	<?php echo do_shortcode( '[form_order]' ); ?>
</div>
<?php get_footer(); ?>