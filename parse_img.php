<?
set_time_limit(0);

require_once( 'wp-load.php' );

for($i=1;$i<16;$i++){
    $image_url = 'https://praktika-studenta.ru/wp-content/uploads/2024/05/img'.$i.'.jpg';

    $upload_dir = wp_upload_dir();

    $image_data = file_get_contents( $image_url );

    $filename = basename( $image_url );

    if ( wp_mkdir_p( $upload_dir['path'] ) ) {
      $file = $upload_dir['path'] . '/' . $filename;
    }
    else {
      $file = $upload_dir['basedir'] . '/' . $filename;
    }

    file_put_contents( $file, $image_data );

    $wp_filetype = wp_check_filetype( $filename, null );

    $attachment = array(
      'post_mime_type' => $wp_filetype['type'],
      'post_title' => sanitize_file_name( $filename ),
      'post_content' => '',
      'post_status' => 'inherit'
    );

    $attach_id = wp_insert_attachment( $attachment, $file );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
    wp_update_attachment_metadata( $attach_id, $attach_data );
}



function ds_get_image_id($image_url) {
  global $wpdb;
  $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE post_title='%s';", $image_url ));
        return $attachment[0];
}

$posts = get_posts(
    array(
        'numberposts'   => -1,
        'post_type'     => 'post'
    )
);

foreach( $posts as $p ){
  $x = rand(1,15);
  $image_src= 'img'.$x.'.jpg';
  $thumb_id= ds_get_image_id($image_src);
  update_post_meta( $p->ID, '_thumbnail_id', $thumb_id );
}


?>