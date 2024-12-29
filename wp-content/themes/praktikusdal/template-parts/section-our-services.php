<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<div id="services" class="our-services">
  <div class="our-services__container container">
    <h3 class="our-services__title title-section">
      <?php the_field('our_services_title', $frontpage_id); ?>
    </h3>
    <div class="our-services__items">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'posts_per_page' => -1,
          'order'          => 'DESC',
			'orderby'        => 'date',
          'post_type'      => 'post-services',
          'paged'          => $paged
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
            <div class="our-services__item">
              <h6 class="our-services__item-title">
                <?php the_title(); ?>
              </h6>
              <div class="our-services__item-wrapper">
                <ul class="our-services__item-list">
                  <li class="our-services__item-list-item">
                    <?php the_field('promo_info_deadline'); ?>
                  </li>
                  <li class="our-services__item-list-item">
                    <?php the_field('promo_info_performed'); ?>
                  </li>
                  <li class="our-services__item-list-item">
                    <?php the_field('promo_info_adj') ?>
                  </li>
                  <li class="our-services__item-list-item">
                    <?php the_field('promo_info_pay') ?>
                  </li>
                </ul>
                <a class="button our-services__item-more" href="<?php the_permalink(); ?>">
                  Подробнее
                </a>
                <button class="button our-services__item-more show-form-button">
                  Оформить заявку
                </button>
              </div>
            </div>
            <?php
          }
          wp_reset_postdata();
        } 
      ?>
    </div>
  </div>
  <button class="universities__more" value="true">Показать ещё</button>
</div>