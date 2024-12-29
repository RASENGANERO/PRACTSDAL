<?php get_header(); ?>
<div class="promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text">
     
	 
	 <h1 class="promo-post__title">	  <?php
if (get_field("h1zag")) {
    echo "<h1>" . get_field("h1zag") . "</h1>";
} else {
    echo "<h1>" . get_the_title() . "</h1>";
}
?></h1>
      

	  
	  
	  
	  <div class="promo-post__text">
        <?php the_field("promo_text"); ?>
      </div>
      <div class="promo-post__info">
        <span class="promo-post__info-item">
          Срок: 
          <?php the_field('promo_info_deadline'); ?>
        </span>
        <span class="promo-post__info-item">
          Стоимость: 
          <?php the_field('promo_info_performed'); ?>
        </span>
        <span class="promo-post__info-item">
          <?php the_field('promo_info_adj') ?>
        </span>
        <span class="promo-post__info-item">
          <?php the_field('promo_info_pay') ?>
        </span>
      </div>
    </div>
    <div class="promo-post__item promo-post__item-picture">
      <?php 
        $image = get_field('promo_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'full', false, array( 
            'class' => 'promo-post__image',
          ) );
        }
        else {
          get_template_part('template-parts/video');
        }
      ?>
    </div>
  </div>
</div>

<main class="post-blog">
  <div class="post-blog__container container">
    <div class="post-blog__content">
      <?php echo otchet_the_content(get_field('post_content_text')); ?>

      <div class="post-blog__vk">
        <!-- <a 
          class="reviews-vk" 
          href="https://vk.com/praktikusdal" 
          target="_blank">
          Отзывы о нас в группе ВКонтакте
        </a> -->
      </div>

	    <?php comments_template(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>