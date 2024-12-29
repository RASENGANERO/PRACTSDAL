<?php



  add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );
  add_action( 'after_setup_theme', 'theme_title' );
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );
  add_action( 'after_setup_theme', 'theme_add_thumbnails' );

  function getMarks($ID){
    $typePost = trim(strval(get_post_type($ID)));
    if ($typePost === 'post-specialties') {
      return get_the_terms($ID, 'specialties_tag');
    }
    if ($typePost === 'post-universities') {
      return get_the_terms($ID, 'universities_tag');
    }
    if ($typePost === 'post-services') {
      return get_the_terms($ID, 'service_tag');
    }
    return null;
  }
  function my_shortcode_fn() {
        global $post;
        return get_the_title(wp_get_post_parent_id($post->ID));
}
add_shortcode( 'title', 'my_shortcode_fn' );

  // Wrapper function for css
  function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
    wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
  }

  // Wrapper function for js
  function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
    wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
  }

  // Getting files of css/js
  function theme_styles_scripts() {
    enqueue_versioned_style( 'style', '/assets/css/style.css' );
    enqueue_versioned_script( 'script', '/assets/js/script.js', array(), true );
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js?render=6LfK3uAUAAAAADkInJv9kTtSxSlW9VOk-Txt0uVq', '', 'null', );
  }

  // Setting name of title for every page of site
  function theme_title() {
    add_theme_support( 'title-tag' );
  }

  // Adding thumbnails
  function theme_add_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size(650, 450, true);
    add_image_size( 'post-project', 800, 865, true );
  }

add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );
  function aw_custom_add_image_sizes() {
    add_image_size( 'xsm', 360, 9999 ); // 300px wide unlimited height
    add_image_size( 'sm', 768, 9999 ); // 768px wide unlimited height
    add_image_size( 'md', 1024, 9999 ); // 1024px wide unlimited height
    add_image_size( 'lg', 1280, 9999 ); // 1200px wide unlimited height
    add_image_size( 'xl', 1920, 9999 ); // 2000px wide unlimited height
}

add_filter( 'image_size_names_choose', 'aw_custom_add_image_size_names' );
function aw_custom_add_image_size_names( $sizes ) {
  return array_merge( $sizes, array(
    'xsm' => __( 'XSmall' ),
    'sm' => __( 'Small' ),
    'md' => __( 'Medium' ),
    'lg' => __( 'Large' ),
    'xl' => __( 'XLarge' ),
  ) );
}

 /**
  * Setting the class name for pages
  */

  add_filter( 'body_class','my_class_names' );
  function my_class_names( $classes ) {

    // Pages
    if( is_front_page() || get_post_type() === 'post-services' || get_post_type() === 'post-universities' || get_post_type() === 'post-specialties'|| get_post_type() === 'post' ) {
      $classes[] = 'page';
      return $classes;
    }
  
    return $classes;
  }

  /**
   * Register nav-menus of site
   */
  require get_template_directory() . '/inc/menu.php';

  // Forms
  require get_template_directory() . '/inc/form-request.php';
  require get_template_directory() . '/inc/form-order.php';

  // Custom fields
  require_once 'inc/terms-fields.php';


  /**
   * Register custom post type
   */
  //require get_template_directory() . '/inc/post-type.php';

  //  Include templates

  add_filter('template_include', 'my_template');
  function my_template( $template ) {

    // Pages
    if( is_front_page() ) {
      if ( $new_template = locate_template( array( 'templates/page-home.php' ) ) )
        return $new_template;
    }

    // Posts
    if ( get_post_type() === 'post-services' ) {
      $new_template = locate_template( array( 'templates/post-services.php' ) );
      if ( '' != $new_template ) {
          return $new_template;
      }
    }

    if ( get_post_type() === 'post-universities' ) {
      $new_template = locate_template( array( 'templates/post-universities.php' ) );
      if ( '' != $new_template ) {
          return $new_template;
      }
    }

    if ( get_post_type() === 'post-specialties' ) {
      $new_template = locate_template( array( 'templates/post-specialties.php' ) );
      if ( '' != $new_template ) {
          return $new_template;
      }
    }
  
    return $template;
  }


  // add_filter( 'post_type_link', 'remove_post_slug', 10, 3 );
  function remove_post_slug( $post_link, $post, $leavename ) {

    if ( 'post-services' != $post->post_type ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
  }

  // add_action( 'pre_get_posts', 'parse_request_trick' );
  function parse_request_trick( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post-services' ) );
    }
  }
  
  /**
   * Setting excerpt
   */
  add_filter( 'excerpt_length', function() {
    return 50;
  });
  add_filter('excerpt_more', function($more) {
    return '...';
  });

  ## Отключает новый редактор блоков в WordPress (Гутенберг).
  ## ver: 1.0
  if( 'disable_gutenberg' ){
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
    remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );
    add_action( 'admin_init', function(){
      remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
      add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
  }
  

add_filter('the_content', 'otchet_the_content');
function otchet_the_content($content)
{
    // Проверяем, используется ли шаблон "post-universities"
    if (is_single() && get_post_type() === 'post-universities' ) {
        // Получаем заголовок записи
        $post_title = get_the_title();

        // Создание HTML-кода с примерами отчётов и заменой [title] на заголовок записи
        $examples_html = '<blockquote>
        <ul>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/preddiplomnaja-praktika-mfjua.pdf" target="_blank" rel="noopener"> ' . esc_html($post_title) . ' пример отчета по учебной практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/praktika-mbdou.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по производственной практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/nauchno-issledovaetlskaja-rabota-mip.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по преддипломной практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-8-semestr-org.psihologija.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по НИР практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-vitte-proizvodstvennaja-grpr-rl.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по технологической практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-vitte-ucheb-jek-ooo-1.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по эксплуатационной практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/oznakomitelnaja-praktika-primer.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по изыскательной практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/nir-miit.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по юридической практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/proizvodstvennaja-praktika-tulgu.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по геологической практике </a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/uchebnaja-praktika-rosdistant.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по ознакомительной практике </a></li>
        </ul>
        </blockquote>
		<h2> ' . esc_html($post_title) . ' - примеры дневников практики
		<blockquote>
        <ul>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/1.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (1)</a></li>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/2.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (2)</a></li>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/3.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (3)</a></li>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/4.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (4)</a></li>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/5.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (5)</a></li>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/6.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (6)</a></li>
	<li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/2.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (7)</a></li>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/8.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (8)</a></li>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/9.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (9)</a></li>
    <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/10.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример дневника (10)</a></li></ul>
        </blockquote>
		'
		
			
			
			;

        // Регулярное выражение для поиска первого заголовка <h2>
        $pattern = '/(<h2.*?>.*?<\/h2>)/is';

        // Проверка, найден ли заголовок
        if (preg_match($pattern, $content, $matches, PREG_OFFSET_CAPTURE)) {
            // Получаем позицию первого заголовка
            $first_h2_position = $matches[0][1];
            
            // Вставляем HTML-код с примерами сразу после первого заголовка
            $content = substr_replace($content, $examples_html, $first_h2_position + strlen($matches[0][0]), 0);
        }

        // Создание HTML-кода формы
        $form_html = '<div class="post-blog__content-form">' . do_shortcode('[form_request]') . '</div>';
        
        // Добавление формы в конец содержимого
        $content .= $form_html;
    }
	
	
	    if (is_single() && get_post_type() === 'post-services' ) {
        // Получаем заголовок записи
        $post_title = get_the_title();

        // Создание HTML-кода с примерами отчётов и заменой [title] на заголовок записи
        $examples_html = '<h2>' . esc_html($post_title) . ' - примеры отчётов по практике</h2><blockquote>
        <ul>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/preddiplomnaja-praktika-mfjua.pdf" target="_blank" rel="noopener"> ' . esc_html($post_title) . ' пример отчета по учебной практике (1)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/praktika-mbdou.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по производственной практике (2)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/nauchno-issledovaetlskaja-rabota-mip.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по преддипломной практике (3)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-8-semestr-org.psihologija.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по НИР практике (4)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-vitte-proizvodstvennaja-grpr-rl.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по технологической практике (5)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-vitte-ucheb-jek-ooo-1.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по эксплуатационной практике (6)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/oznakomitelnaja-praktika-primer.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по изыскательной практике (7)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/nir-miit.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по юридической практике (8)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/proizvodstvennaja-praktika-tulgu.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по геологической практике (9)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/uchebnaja-praktika-rosdistant.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по ознакомительной практике (10)</a></li>
        </ul>
        </blockquote>';

        // Регулярное выражение для поиска первого заголовка <h2>
                $pattern = '/(<p.*?>.*?<\/p>)/is';

        // Проверка, найден ли параграф
        if (preg_match($pattern, $content, $matches, PREG_OFFSET_CAPTURE)) {
            // Получаем позицию первого параграфа
            $first_p_position = $matches[0][1];
            
            // Вставляем HTML-код с примерами сразу после первого параграфа
            $content = substr_replace($content, $examples_html, $first_p_position + strlen($matches[0][0]), 0);
        }

        // Создание HTML-кода формы
        $form_html = '<div class="post-blog__content-form">' . do_shortcode('[form_request]') . '</div>';
        
        // Добавление формы в конец содержимого
        $content .= $form_html;
    }
	
	
	
	
	 if (is_single() && get_post_type() === 'post-specialties' ) {
        // Получаем заголовок записи
        $post_title = get_the_title();

        // Создание HTML-кода с примерами отчётов и заменой [title] на заголовок записи
        $examples_html = '<h2>' . esc_html($post_title) . ' - примеры отчётов по практике</h2><blockquote>
        <ul>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/preddiplomnaja-praktika-mfjua.pdf" target="_blank" rel="noopener"> ' . esc_html($post_title) . ' пример отчета по практике (1)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/praktika-mbdou.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (2)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/nauchno-issledovaetlskaja-rabota-mip.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (3)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-8-semestr-org.psihologija.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (4)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-vitte-proizvodstvennaja-grpr-rl.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (5)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/otchet-vitte-ucheb-jek-ooo-1.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (6)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/oznakomitelnaja-praktika-primer.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (7)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/nir-miit.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (8)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/proizvodstvennaja-praktika-tulgu.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (9)</a></li>
            <li><a href="https://otchet-studenta.ru/wp-content/uploads/2024/12/uchebnaja-praktika-rosdistant.pdf" target="_blank" rel="noopener">' . esc_html($post_title) . ' пример отчета по практике (10)</a></li>
        </ul>
        </blockquote>';

        // Регулярное выражение для поиска первого заголовка <h2>
                $pattern = '/(<p.*?>.*?<\/p>)/is';

        // Проверка, найден ли параграф
        if (preg_match($pattern, $content, $matches, PREG_OFFSET_CAPTURE)) {
            // Получаем позицию первого параграфа
            $first_p_position = $matches[0][1];
            
            // Вставляем HTML-код с примерами сразу после первого параграфа
            $content = substr_replace($content, $examples_html, $first_p_position + strlen($matches[0][0]), 0);
        }

        // Создание HTML-кода формы
        $form_html = '<div class="post-blog__content-form">' . do_shortcode('[form_request]') . '</div>';
        
        // Добавление формы в конец содержимого
        $content .= $form_html;
    }

    return $content;}

  // Регистрация пользовательского типа записи "Услуги"
  function praktika_post_type_services() {
    register_post_type('post-services', array(
        'labels' => array(
            'name' => 'Услуги',
            'singular_name' => 'Услуга',
            'add_new' => 'Добавить новую услугу',
            'add_new_item' => 'Добавить новую услугу',
            'edit_item' => 'Редактировать услугу',
            'new_item' => 'Новая услуга',
            'view_item' => 'Посмотреть услугу',
            'search_items' => 'Найти услуги',
            'not_found' => 'Услуг не найдено',
            'not_found_in_trash' => 'В корзине услуг не найдено',
            'menu_name' => 'Услуги',
        ),
        'description' => 'Записи страницы "Услуги"',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'post-services'), // добавьте slug для удобства
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
        // Здесь мы добавляем таксономии
        //'taxonomies' => array('post_tag'), // Добавляем метки
    ));
}
add_action('init', 'praktika_post_type_services');

// Регистрация таксономии (если требуется)
function gp_register_taxonomy() {
    register_taxonomy(
        'service_tag', // уникальный идентификатор таксономии
        array('post-services'), // к каким типам записей она относится
        array(
            'hierarchical' => false, // не иерархическая (как метки)
            'labels' => array(
                'name' => __('Tags'),
                'singular_name' => __('Tag'),
                'search_items' => __('Search Tags'),
                'all_items' => __('All Tags'),
                'edit_item' => __('Edit Tag'),
                'update_item' => __('Update Tag'),
                'add_new_item' => __('Add New Tag'),
                'new_item_name' => __('New Tag Name'),
                'menu_name' => __('Tags'),
            ),
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'service-tag'), // slug для URL
        )
    );
}
add_action('init', 'gp_register_taxonomy');
function praktika_post_type_universities() {
  register_post_type('post-universities', array(
    'labels'             => array(
      'name'               => 'Вузы',
      'singular_name'      => 'Вузы',
      'add_new'            => 'Добавить новый вуз',
      'add_new_item'       => 'Добавить новый вуз',
      'edit_item'          => 'Редактировать вуз',
      'new_item'           => 'Новый вуз',
      'view_item'          => 'Посмотреть вуз',
      'search_items'       => 'Найти вуз',
      'not_found'          => 'Вузов не найдено',
      'not_found_in_trash' => 'В корзине вузов не найдено',
      'menu_name'          => 'Вузы',
      ),
    'description'        => 'Записи страницы "Вуз"',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'post-universities'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
  ) );
}
add_action('init', 'praktika_post_type_universities');
function gp_register_taxonomy_univer() {
  register_taxonomy(
      'universities_tag', // уникальный идентификатор таксономии
      array('post-universities'), // к каким типам записей она относится
      array(
          'hierarchical' => false, // не иерархическая (как метки)
          'labels' => array(
              'name' => __('Tags'),
              'singular_name' => __('Tag'),
              'search_items' => __('Search Tags'),
              'all_items' => __('All Tags'),
              'edit_item' => __('Edit Tag'),
              'update_item' => __('Update Tag'),
              'add_new_item' => __('Add New Tag'),
              'new_item_name' => __('New Tag Name'),
              'menu_name' => __('Tags'),
          ),
          'show_ui' => true,
          'show_admin_column' => true,
          'query_var' => true,
          'rewrite' => array('slug' => 'service-univer'), // slug для URL
      )
  );
}
add_action('init', 'gp_register_taxonomy_univer');



function praktika_post_type_specialties() {
  register_post_type('post-specialties', array(
    'labels'             => array(
      'name'               => 'Специальности',
      'singular_name'      => 'Специальности',
      'add_new'            => 'Добавить новую специальность',
      'add_new_item'       => 'Добавить новую специальность',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись специальность',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Специальности',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "Специальность"',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'post-specialties'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 7,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
  ) );
}
add_action('init', 'praktika_post_type_specialties');

function gp_register_taxonomy_special() {
  register_taxonomy(
      'specialties_tag', // уникальный идентификатор таксономии
      array('post-specialties'), // к каким типам записей она относится
      array(
          'hierarchical' => false, // не иерархическая (как метки)
          'labels' => array(
              'name' => __('Tags'),
              'singular_name' => __('Tag'),
              'search_items' => __('Search Tags'),
              'all_items' => __('All Tags'),
              'edit_item' => __('Edit Tag'),
              'update_item' => __('Update Tag'),
              'add_new_item' => __('Add New Tag'),
              'new_item_name' => __('New Tag Name'),
              'menu_name' => __('Tags'),
          ),
          'show_ui' => true,
          'show_admin_column' => true,
          'query_var' => true,
          'rewrite' => array('slug' => 'service-special'), // slug для URL
      )
  );
}
add_action('init', 'gp_register_taxonomy_special');