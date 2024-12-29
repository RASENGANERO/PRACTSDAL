<?php get_header(); ?>
<div class="promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text">
      <h1 class="promo-post__title"><?php the_title(); ?></h1>
      <div class="promo-post__text"><?php echo do_shortcode('[form_request]') ?></div>
    </div>
    <div class="promo-post__item promo-post__item-picture">
      <?php get_template_part('template-parts/video') ?>
    </div>
  </div>
</div>
<main class="post-blog">
  <div class="post-blog__container container">
    <div class="post-blog__content">
      <?php the_content(); ?>
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