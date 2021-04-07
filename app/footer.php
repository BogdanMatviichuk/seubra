  </main>
  <!--  Footer  -->
  <footer class="footer">
    <div class="cn">
      <div class="footer-top">
        <div class="footer-brand">
            <?php $image = get_field( 'logo', 'option' ); ?>
            <picture>
                <source data-srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" media="(min-width: 600px)">
                <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
            </picture>
        </div>
          <?php wp_nav_menu( [
              'theme_location'  => 'footer',
              'container'       => '',
              'menu_class'      => 'footer-nav',

          ] ); ?>
        <div class="footer-address">
          <h3>Address:</h3>
          <address><?php the_field('address', 'option'); ?></address>
        </div>
        <div class="footer-contact">
          <h3>Seubra Limited</h3>
          <a href="tel:<?php the_field('phone', 'option'); ?>">Tel: <?php the_field('phone', 'option'); ?></a>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="footer-payments">
          <picture class="s-review-slider__logo">
            <source data-srcset="<?php echo get_template_directory_uri();?>/images/bg/payments.png" media="(min-width: 600px)">
            <img class="lazy" data-src="<?php echo get_template_directory_uri();?>/images/bg/payments.png" alt="">
          </picture>
        </div>
        <div class="copy">© Seubra. All Right Reserved.</div>
        <ul class="footer-socials">
          <li>
            <a href="<?php the_field('facebook', 'option'); ?>">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 15C30 6.71484 23.2852 0 15 0C6.71484 0 0 6.71484 0 15C0 23.2852 6.71484 30 15 30C15.0879 30 15.1758 30 15.2637 29.9941V18.3223H12.041V14.5664H15.2637V11.8008C15.2637 8.5957 17.2207 6.84961 20.0801 6.84961C21.4512 6.84961 22.6289 6.94922 22.9688 6.99609V10.3477H21C19.4473 10.3477 19.1426 11.0859 19.1426 12.1699V14.5605H22.8633L22.377 18.3164H19.1426V29.4199C25.4121 27.6211 30 21.8496 30 15Z" fill="white"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="<?php the_field('linkedin', 'option'); ?>">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM10.6412 22.6758H6.98799V11.6851H10.6412V22.6758ZM8.8147 10.1843H8.79089C7.565 10.1843 6.77216 9.34044 6.77216 8.28575C6.77216 7.20726 7.58926 6.38672 8.83896 6.38672C10.0887 6.38672 10.8577 7.20726 10.8815 8.28575C10.8815 9.34044 10.0887 10.1843 8.8147 10.1843ZM23.8138 22.6758H20.1611V16.796C20.1611 15.3184 19.6321 14.3106 18.3103 14.3106C17.3012 14.3106 16.7001 14.9904 16.436 15.6466C16.3394 15.8814 16.3158 16.2096 16.3158 16.5381V22.6758H12.6629C12.6629 22.6758 12.7107 12.7162 12.6629 11.6851H16.3158V13.2413C16.8013 12.4924 17.6699 11.4272 19.6081 11.4272C22.0116 11.4272 23.8138 12.998 23.8138 16.3737V22.6758Z" fill="white"/>
              </svg>

            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>


</div>

<div class="hidden-mnu">
  <div class="hidden-mnu__overlay"></div>
  <div class="hidden-mnu__box">

    <div class="hidden-mnu__box--top">
        <?php $image = get_field( 'logo', 'option' ); ?>
        <picture>
            <source data-srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" media="(min-width: 600px)">
            <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
        </picture>

      <span class="toggle-mnu"><span></span></span>
    </div>
    <div class="hidden-mnu__box--middle">
        <?php wp_nav_menu( [
            'theme_location'  => 'top',
            'container'       => 'nav',
            'container_class' => 'main-mnu',
            'menu_class'      => 'main-mnu',

        ] ); ?>

    </div>
  </div>
</div>
  <div id="modal-main" class="zoom-anim-dialog mfp-hide modal-main">
      <div class="modal-main-content"><iframe width="100%" height="550px" src="https://book.appointedd.com/app/5fad0fce73b59a694d772582"></iframe></div>
  </div>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
<script src="<?php echo get_template_directory_uri();?>/scripts/app.js"></script>
  <?php wp_footer();?>
</body>
</html>