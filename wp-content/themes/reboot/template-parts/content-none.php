<?php
/**
 * ****************************************************************************
 *
 *   НЕ РЕДАКТИРУЙТЕ ЭТОТ ФАЙЛ
 *   DON'T EDIT THIS FILE
 *
 *   После обновления Вы потереяете все изменения. Используйте дочернюю тему
 *   After update you will lose all changes. Use child theme
 *
 *   https://support.wpshop.ru/docs/general/child-themes/
 *
 * *****************************************************************************
 *
 * @package reboot
 */

global $wpshop_core;

$is_show_search_form   = $wpshop_core->get_option( 'structure_search_form_show' );
$is_show_related_posts = $wpshop_core->get_option( 'structure_search_related_show' );

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php echo apply_filters( THEME_SLUG . '_search_without_results_title', __( 'Nothing found', THEME_TEXTDOMAIN ) ) ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>

            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', THEME_TEXTDOMAIN ), esc_url( admin_url( 'post-new.php' ) ) ) ?></p>

		<?php } elseif ( is_search() ) { ?>

			<p><?php echo apply_filters( THEME_SLUG . '_search_without_results_text', __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', THEME_TEXTDOMAIN ) ) ?></p>
			<?php
            if ( $is_show_search_form ) get_search_form();

        } else { ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', THEME_TEXTDOMAIN ) ?></p>
			<?php
			get_search_form();

        } ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->

<?php if ( $is_show_related_posts ) get_template_part( 'template-parts/related', 'posts' ) ?>