<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
  <footer id="about-company" class="footer">
    <div class="footer__container container">
      <div class="footer__item footer__item-content">
        <h5 class="footer__title">
          <?php the_field('footer_title', $frontpage_id); ?>
        </h5>
        <span class="footer__text footer__subtitle">
          <?php the_field('footer_subtitle', $frontpage_id); ?>
        </span>
        <span class="footer__text footer__worging-hours">
          <?php the_field('footer_text_hours', $frontpage_id); ?>
        </span>
        <div class="footer__payment">
          <span class="footer__text footer__payment-text">
            Принимаем к оплате:
          </span>
          <svg class="footer__payment-icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#visa"></use>
          </svg>
        </div>
      </div>
      <div class="footer__item footer__item-social footer__social">
        <?php get_template_part('template-parts/section-social') ?>
      </div>
      <div class="footer__item footer__item-menu footer__menu">
        <?php wp_nav_menu( ['theme_location' => 'footer-menu'] ); ?>
      </div>
      <div class="footer__copyright">
        <?php the_field('footer_copyright', $frontpage_id); ?>
      </div>
    </div>
  </footer>
  <div class="alert">
    <span class="alert__icon"></span>
    <div class="alert__message"></div>
    <button class="alert__close">
      <svg class="alert__close-icon" enable-background="new 0 0 60.963 60.842" version="1.1" viewBox="0 0 60.963 60.842" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
        <path d="m59.595 52.861-22.501-22.502 22.379-22.379c1.825-1.826 1.825-4.786 0-6.611-1.826-1.825-4.785-1.825-6.611 0l-22.379 22.379-22.378-22.379c-1.826-1.825-4.785-1.825-6.611 0-1.826 1.826-1.826 4.786 0 6.611l22.378 22.379-22.503 22.502c-1.826 1.826-1.826 4.785 0 6.611 0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369l22.502-22.502 22.501 22.502c0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369c1.824-1.825 1.824-4.785-1e-3 -6.611z"/>
        </svg>
    </button>
  </div>
  <?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(96820514, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/96820514" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script src="//code.jivo.ru/widget/H4LIkCwSIT" async></script>

</body>
</html>
