<?php /* Template Name: Location */ ?>
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
              <?php the_field( 'title2' );
              $image = get_field( 'image2' ); ?>
            <picture class="hidden-from-tablet">
                <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                        media="(min-width: 600px)">
                <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                     alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
            </picture>
              <?php the_field( 'content2' ); ?>
            <div class="btn-wrap">
              <a href="<?php the_field( 'button_url2' ); ?>" class="btn btn--green">
                <span><?php the_field( 'button_text2' ); ?></span>
                <div class="back"></div>
              </a>
            </div>
          </div>

          <div class="b-image half-content">
            <picture class="hidden-to-mobile">
                <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                        media="(min-width: 600px)">
                <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                     alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="map-container">
    <div class="map-container__back"></div>
      <?php
      $location = get_field('location');
//      if( $location ): ?>
    <div class="map" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/map.jpg);"></div>
<!--          <div id="map-canvas-1" class="map" data-lat="--><?php //echo esc_attr($location['lat']); ?><!--" data-lng="--><?php //echo esc_attr($location['lng']); ?><!--" data-zoom="15"></div>-->
<!--          <a class="marker" data-rel="map-canvas-1" data-lat="--><?php //echo esc_attr($location['lat']); ?><!--" data-lng="--><?php //echo esc_attr($location['lng']); ?><!--" data-image="--><?php //echo get_template_directory_uri(); ?><!--/images/marker.png"></a>-->
<!--      --><?php //endif; ?>

    <div class="cn">
      <div class="map-info">
          <?php the_field( 'content' ); ?>
      </div>
    </div>
  </div>

  <!-- MAP -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxbeVVdNPUe8WZxM5sY69Oug7ol0ZeD6o&v=3&language=en"></script>
<?php }
}
get_footer(); ?>