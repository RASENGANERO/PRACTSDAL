<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div 
  id="universities" class="universities"
  style="
    <?php 
      if ( get_field('is_our_univer', $frontpage_id) ) {
        echo 'display: none;';
      }
    ?>
    ">
  <div class="universities__container container">
    <h3 class="universities__title title-section">
      <?php the_field('our_univer_title', $frontpage_id); ?>
    </h3>
    <div class="universities__items">
      <?php
          $args = array(
            'order'          => 'DESC',
            'post_type'      => 'post-universities',
            'posts_per_page' => -1,
            'nopaging' => true,
          );
          $loop = new WP_Query( $args );
        ?>
        <?php
          if( $loop->have_posts() ) {
            while( $loop->have_posts() ) {
              $loop->the_post();
              ?>
              <a class="universities__item" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
              <?php
            }
            wp_reset_postdata();
          } 
        ?>
    </div>
  </div>
  <button class="universities__more" value="true">Показать ещё</button>
</div>