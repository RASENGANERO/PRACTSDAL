<?php
  $frontpage_id = get_option( 'page_on_front' );
?>
<div class="promo-header">
  <div class="promo-header__container container">
    <div class="promo-header__wrapper">
      <h1 class="promo-header__title">
        <?php the_field('header_promo_title', $frontpage_id); ?>
      </h1>
      <p class="promo-header__text">
        <?php the_field('header_promo_text', $frontpage_id); ?>
      </p>
      <div class="promo-header__video video">
        <!-- <iframe
          class="video__stream"
          src="https://www.youtube.com/embed/<?php the_field('video_id', $frontpage_id); ?>"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
         ></iframe> -->
         <?php get_template_part('template-parts/video', null, ['class' => 'video__stream']) ?>
      </div>
      <div class="promo-header__form">
        <?php echo do_shortcode( '[form_request]' ) ?>
      </div>
      <!-- <a 
        class="promo-header__link" 
        href="<?php the_field('header_promo_link'); ?>" 
        target="_blank">
          Мы ВКонтакте
      </a> -->
    </div>
  </div>
</div>