<?php /* Template Name: Price */ ?>
<?php include_once( 'head.php' ) ?>

<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>


    <!--  Home Hero Screen  -->
  <section class="s-hero s-bg-image s-dark lazy" data-bg="<?php the_field( 'background1' ); ?>">
    <div class="cn min-height df df-alignCenter df-justifyCenter">
      <h1><?php the_field( 'title1' ); ?></h1>
    </div>
  </section>

  <section class="s-about four-columns">
    <div class="cn">
      <div class="four-columns-content">
        <div class="four-columns-item">
          <div class="b-info half-content">
            <h2><?php the_field( 'title2' ); ?></h2>
              <?php $image = get_field( 'image2' ); ?>
            <picture class="hidden-from-tablet">
              <source data-srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" media="(min-width: 600px)">
              <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
            </picture>
              <?php the_field( 'content2' ); ?>
            <div class="btn-wrap">
              <a href="<?php the_field( 'button_url2' ); ?>" class="btn btn--green">
                <span><?php the_field( 'button_title2' ); ?></span>
                <div class="back"></div>
              </a>
            </div>
          </div>

          <div class="b-image half-content">
            <picture class="hidden-to-mobile">
                <?php $image = get_field( 'image2' ); ?>
                <picture class="hidden-from-mobile">
                    <source data-srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" media="(min-width: 600px)">
                    <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                </picture>
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="s-dark s-membership s-membership--left">
    <div class="cn df df-alignCenter">
      <div class="membership-content">
        <h2 class="membership__title"><?php the_field( 'title3' ); ?></h2>
        <div class="membership__proposal"><?php the_field( 'description3' ); ?></div>
        <div class="membership-cards">
            <?php if ( have_rows( 'membership3' ) ): ?>
                <?php while ( have_rows( 'membership3' ) ): the_row();
                    ?>
                    <div class="membership__card">
                        <div class="membership__icon">
                            <?php the_sub_field( 'svg' ); ?>
                        </div>
                        <div class="membership__description"><?php the_sub_field( 'description' ); ?></div>
                        <div class="membership__price"><?php the_sub_field( 'price' ); ?></div>
                        <p>Subscription</p>
                        <div class="membership__period"><?php the_sub_field( 'period' ); ?></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <ul class="membership-list list--2cols">
            <?php if ( have_rows( 'membership_list3' ) ): ?>
                <?php while ( have_rows( 'membership_list3' ) ): the_row(); ?>
                            <li><?php the_sub_field( 'text' ); ?></li>
                <?php endwhile; ?>
            <?php endif; ?>

        </ul>
      </div>
      <div class="membership-image">
          <?php $image = get_field( 'image3' ); ?>
          <picture >
              <source data-srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" media="(min-width: 600px)">
              <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
          </picture>
        <div class="btn-wrap">
          <a class="popup-with-move-anim btn btn--bordered" href="#modal-main"><?php the_field( 'button_name3' ); ?></a>
        </div>
      </div>
    </div>
  </section>

  <section class="s-light s-membership s-membership--right gap-sm">
    <div class="cn df df-alignCenter">
      <div class="membership-image">
          <?php $image = get_field( 'image4' ); ?>
          <picture>
              <source data-srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" media="(min-width: 600px)">
              <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
          </picture>

        <div class="btn-wrap">
            <a class="popup-with-move-anim btn btn--bordered" href="#modal-main"><span><?php the_field( 'button_name4' ); ?></span><span class="back"></span></a>
        </div>
      </div>
      <div class="membership-content">
        <h2 class="membership__title"><?php the_field( 'title4' ); ?></h2>
        <div class="membership__proposal"><?php the_field( 'description4' ); ?></div>
        <div class="membership-cards">
            <?php if ( have_rows( 'membership4' ) ): ?>
                <?php while ( have_rows( 'membership4' ) ): the_row();
                    ?>
                    <div class="membership__card">
                        <div class="membership__icon">
                            <?php the_sub_field( 'svg' ); ?>
                        </div>
                        <div class="membership__description"><?php the_sub_field( 'description' ); ?></div>
                        <div class="membership__price"><?php the_sub_field( 'price' ); ?></div>
                        <p>Subscription</p>
                        <div class="membership__period"><?php the_sub_field( 'period' ); ?></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <ul class="membership-list list--2cols">
            <?php if ( have_rows( 'membership_list4' ) ): ?>
                <?php while ( have_rows( 'membership_list4' ) ): the_row(); ?>
                    <li><?php the_sub_field( 'text' ); ?></li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="s-dark s-membership s-membership--left s-membership--single">
    <div class="cn df df-alignCenter df-alignCenter">
      <div class="membership-content">
        <h2 class="membership__title"><?php the_field( 'title5' ); ?></h2>
        <div class="membership__proposal"><?php the_field( 'description5' ); ?></div>
        <div class="membership-cards">
          <div class="membership__card">
            <div class="membership__icon">
                <?php the_field( 'icon5' ); ?>
            </div>
            <div class="membership__description"><?php the_field( 'cart_description5' ); ?></div>
            <div class="membership__price"><?php the_field( 'price5' ); ?></div>
            <p>Subscription</p>
            <div class="membership__period"><?php the_field( 'period5' ); ?></div>
          </div>
          <ul class="membership-list">
              <?php if ( have_rows( 'membership_list5' ) ): ?>
                  <?php while ( have_rows( 'membership_list5' ) ): the_row(); ?>
                      <li><?php the_sub_field( 'text' ); ?></li>
                  <?php endwhile; ?>
              <?php endif; ?>
          </ul>
        </div>
        <div class="btn-wrap">
            <a class="popup-with-move-anim btn btn--bordered" href="#modal-main"><?php the_field( 'button_name5' ); ?></a>
        </div>
      </div>
      <div class="membership-image">
          <?php $image = get_field( 'image5' ); ?>
          <picture>
              <source data-srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" media="(min-width: 600px)">
              <img class="lazy" data-src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>" alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
          </picture>
      </div>
    </div>
  </section>

  <section class="s-bg-image s-dark lazy" data-bg="<?php the_field( 'background6' ); ?>">
    <div class="cn min-height df df-column df-alignCenter df-justifyCenter">

        <?php the_field( 'content6' ); ?>
      <a href="<?php the_field( 'button_url6' ); ?>" class="btn btn--green"><span><?php the_field( 'button_title6' ); ?></span><span class="back"></span></a>

    </div>
  </section>
    <?php }
}
get_footer(); ?>