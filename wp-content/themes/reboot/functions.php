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
function my_shortcode_fn() {
        global $post;
        return get_the_title(wp_get_post_parent_id($post->ID));
}
add_shortcode( 'title', 'my_shortcode_fn' );


require get_template_directory() . '/inc/init.php';


function my_custom_mime_types( $mimes ) {
  // New allowed mime types.
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  $mimes['doc'] = 'application/msword';
  // Optional. Remove a mime type.
  unset( $mimes['exe'] );
  return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );


function new_mywidgets() {
register_sidebar(array(
'name' => __( 'Виджет формы справа', 'mywidgets' ), //mywidgets - название (папка) шаблона
'id' => 'sidebar-5', //уникальный id виджета (обязательный параметр)
'description' => __( 'Виджет для формы связи справа', 'mywidgets' ),
'before_widget' => '<div class=" %1$s"><div class="myclass2 %2$s">', //класс виджета свой + динамический
'after_widget' => '</div></div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
) );


register_sidebar(array(
'name' => __( 'Виджет формы в записи', 'mywidgets' ), //mywidgets - название (папка) шаблона
'id' => 'sidebar-6', //уникальный id виджета (обязательный параметр)
'description' => __( 'Виджет для формы связи под заголовком', 'mywidgets' ),
'before_widget' => '<div class=" %1$s"><div class="myclass2 %2$s">', //класс виджета свой + динамический
'after_widget' => '</div></div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
) );

}
add_action('widgets_init', 'new_mywidgets');


function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    set_post_views($post_id);
}
add_action( 'wp_head', 'track_post_views');



function get_popular_posts_from_category($category_id, $number_of_posts = 5) {
    $args = array(
        'cat' => $category_id,
        'posts_per_page' => $number_of_posts,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

    if($query->have_posts()) {
        echo '<ul>';
        while($query->have_posts()) {
            $query->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        } 
        echo '</ul>';
    }

    wp_reset_postdata();
}

function popular_posts_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'category_id' => 1,
            'number_of_posts' => 5,
        ),
        $atts,
        'popular_posts'
    );

    ob_start();
    get_popular_posts_from_category($atts['category_id'], $atts['number_of_posts']);
    return ob_get_clean();
}
add_shortcode('popular_posts', 'popular_posts_shortcode');


// Включение поддержки коротких кодов в текстовых виджетах
add_filter('widget_text', 'do_shortcode');



// add_action('admin_menu', 'glasses_admin_menu');
function glasses_admin_menu()
{
    add_menu_page('Техническая страница', 'Техническая страница', 'administrator', 'special_page', 'special_page');
}


function special_page()
{
    echo '<pre>';
    echo '<h1>Техническая страница</h1>';

    echo '</pre>';return;

    $args = [
        'fields' => 'ids',
        'numberposts' => 100,
        'meta_query' => [
            [
                'key' => '_custom_rating',
                'compare_key' => 'NOT EXISTS',
            ],
        ],
    ];
    // print_r($args);
    $posts = get_posts($args);
    if (count($posts) == 0) die();

    $stars = [
        3,3,
        4,4,4,4,
        5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,
    ];

    foreach ($posts as $post_id)
    {
        $wpshop_rating_count = rand(5, 15);
        $wpshop_rating_sum = 0;
        $wpshop_rating_value = 0;

        for ($i=0; $i < $wpshop_rating_count; $i++)
        {
            $key = array_rand($stars);
            $wpshop_rating_sum += $stars[$key];
        }
        $wpshop_rating_value = $wpshop_rating_sum / $wpshop_rating_count;
        $wpshop_rating_value = round($wpshop_rating_value, 2);

        $rating_data = [
            'wpshop_rating_count' => $wpshop_rating_count,
            'wpshop_rating_sum' => $wpshop_rating_sum,
            'wpshop_rating_value' => $wpshop_rating_value,
            '_custom_rating' => 1,
        ];
        echo "$post_id\r\n";
        print_r($rating_data);

        foreach ($rating_data as $meta_key => $meta_value)
        {
            update_post_meta($post_id, $meta_key, $meta_value);
        }
    }

    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            let timer = setTimeout(() => {
                location.reload();
            }, 3000);
        });
    </script>
    <?php

    echo '</pre>';return;
}




