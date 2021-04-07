<?php /* Template Name: Contact */ ?>
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

  <section class="s-contact">
    <div class="cn">
      <div class="columns-content">
          <div class="b-info half-content">
              <?php the_field( 'content2' ); ?>
          </div>

          <div class="b-form half-content">
              <?php the_field( 'form' ); ?>
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
<!--      <div id="map-canvas-1" class="map" data-lat="--><?php //echo esc_attr($location['lat']); ?><!--" data-lng="--><?php //echo esc_attr($location['lng']); ?><!--" data-zoom="16"></div>-->
<!--      <a class="marker" data-rel="map-canvas-1" data-lat="--><?php //echo esc_attr($location['lat']); ?><!--" data-lng="--><?php //echo esc_attr($location['lng']); ?><!--" data-image="--><?php //echo get_template_directory_uri(); ?><!--/images/marker.png"></a>-->
      <!--      --><?php //endif; ?>
    <div class="cn">
      <div class="map-info">
        <h2>Location & Contacts</h2>
        <div class="map-info-item">
          <div class="map-info__icon">
            <svg width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M29.8457 28.9632L27.6792 22.4H25.302L26.6221 28.8H3.37871L4.69889 22.4H2.32161L0.153538 28.9632C-0.396405 30.6336 0.578278 32 2.32161 32H27.6792C29.4226 32 30.3972 30.6336 29.8457 28.9632ZM22.9247 8C22.9247 5.87827 22.0898 3.84344 20.6037 2.34315C19.1176 0.842855 17.1021 0 15.0004 0C12.8988 0 10.8832 0.842855 9.39713 2.34315C7.91104 3.84344 7.07617 5.87827 7.07617 8C7.07617 15.64 15.0004 24 15.0004 24C15.0004 24 22.9247 15.64 22.9247 8ZM10.7213 8.096C10.7213 5.7104 12.6358 3.7776 15.0004 3.7776C16.1351 3.7776 17.2233 4.23266 18.0256 5.04266C18.828 5.85267 19.2787 6.95128 19.2787 8.0968C19.2787 9.24232 18.828 10.3409 18.0256 11.1509C17.2233 11.9609 16.1351 12.416 15.0004 12.416C13.8655 12.416 12.7771 11.9609 11.9746 11.1507C11.1722 10.3405 10.7213 9.24174 10.7213 8.096V8.096Z" fill="white"/>
            </svg>
          </div>
          <div class="map-info__text"><?php the_field( 'adress' ); ?></div>
        </div>
        <div class="map-info-item">
          <div class="map-info__icon">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
                <path d="M28.5971 24.1148L24.5084 28.1706C23.9048 28.7896 23.1048 28.9993 22.3257 29.0002C18.8803 28.897 15.6235 27.2046 12.9495 25.4667C8.56032 22.2736 4.53304 18.3142 2.00545 13.5295C1.03603 11.5231 -0.101447 8.96313 0.00723018 6.72363C0.016921 5.88118 0.243943 5.05436 0.837259 4.51134L4.92592 0.424728C5.77494 -0.297444 6.59601 -0.0477543 7.13932 0.793439L10.4287 7.0309C10.7749 7.76985 10.5763 8.5616 10.0597 9.08961L8.55339 10.5952C8.46039 10.7226 8.40118 10.8676 8.39969 11.0254C8.97732 13.2613 10.7273 15.3222 12.2731 16.7405C13.819 18.1588 15.4807 20.0803 17.6376 20.5351C17.9042 20.6095 18.2308 20.6356 18.4215 20.4583L20.1738 18.6762C20.7779 18.2184 21.6501 17.9946 22.295 18.3689H22.3257L28.2589 21.8717C29.1299 22.4177 29.2207 23.4728 28.5971 24.1148V24.1148Z" fill="white"/>
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect width="29" height="29" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <a href="tel:<?php the_field( 'phone' ); ?>" class="map-info__text"><?php the_field( 'phone' ); ?></a>
        </div>
        <div class="map-info-item">
          <div class="map-info__icon">
            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M28.9284 0H1.07129L14.9999 11.4729L29.0859 0.0321429C29.0344 0.0170759 28.9817 0.00634068 28.9284 0Z" fill="white"/>
              <path d="M15.676 13.6885C15.2813 14.0118 14.7133 14.0118 14.3186 13.6885L0 1.89209V20.3571C0 20.9488 0.479694 21.4285 1.07145 21.4285H28.9285C29.5203 21.4285 30 20.9488 30 20.3571V2.05067L15.676 13.6885Z" fill="white"/>
            </svg>
          </div>
          <a href="mailto:<?php the_field( 'email' ); ?>" class="map-info__text"><?php the_field( 'email' ); ?></a>
        </div>
      </div>
    </div>
  </div>

<!-- MAP -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxbeVVdNPUe8WZxM5sY69Oug7ol0ZeD6o&v=3&language=en"></script>
    <?php }
}
get_footer(); ?>