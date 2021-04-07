<?php /* Template Name: Home */ ?>
<?php include_once( 'head.php' ) ?>

<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <!--  Home Hero Screen  -->
        <section class="home-hero s-dark lazy">
            <div class="cn df df-column df-alignCenter df-justifyCenter">

                <h1 class="home-hero__title"><?php the_field( 'title1' ); ?></h1>
                <p class="home-hero__description"><?php the_field( 'subtitle1' ); ?></p>

                <a href="<?php the_field( 'button_url1' ); ?>"
                   class="home-hero__btn btn btn--green"><span><?php the_field( 'button_text1' ); ?></span>
                    <div class="back"></div>
<!--                    <a class="popup-with-move-anim btn btn--bordered" href="#modal-main">Book now</a>-->
                </a>

            </div>
        </section>

        <section class="s-rent-slider s-dark">
            <div class="cn df df-row">
                <div class="half-content half-content--left">

                    <div class="b-info">
                        <?php the_field( 'content2' ); ?>
                    </div>

                    <div class="btn-wrap">
                        <a href="<?php the_field( 'button_url2' ); ?>" class="btn btn--bordered">
                            <span><?php the_field( 'button_text2' ); ?></span>
                            <div class="back"></div>
                        </a>
                    </div>
                </div>
                <div class="half-content half-content--right">
                    <div class="rent-slider">
                        <?php if ( have_rows( 'repeater2' ) ): ?>
                            <?php while ( have_rows( 'repeater2' ) ): the_row();
                                $image = get_sub_field( 'image' );
                                ?>
                                <div class="rent-slide">
                                    <div class="rent-slide-inner">
                                        <picture class="rent-slide__image">
                                            <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                                    media="(min-width: 600px)">
                                            <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                                                 alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                                        </picture>
                                        <div class="rent-slide__info">
                                            <h3 class="rent-slide__title"><?php the_sub_field( 'title' ); ?></h3>
                                            <p class="rent-slide__price"><?php the_sub_field( 'text' ); ?> <span
                                                        class="amount"><?php the_sub_field( 'price' ); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="four-columns">
            <div class="cn">
                <div class="four-columns-content">
                    <?php if ( have_rows( 'repeater3' ) ): ?>
                        <?php while ( have_rows( 'repeater3' ) ): the_row();
                            $image = get_sub_field( 'image' );
                            ?>
                            <div class="four-columns-item">
                                <div class="b-info half-content">
                                    <?php the_sub_field( 'title' ); ?>
                                    <picture class="hidden-from-tablet">
                                        <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                                media="(min-width: 600px)">
                                        <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                                             alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                                    </picture>
                                    <?php the_sub_field( 'content' ); ?>
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
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <div class="b-covid df df-row df-justify df-alignCenter">
                    <div class="b-covid-text">
                        <?php the_field( 'title3' );
                        $image = get_field( 'image3' );?>
                        <picture class="hidden-from-tablet">
                            <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                    media="(min-width: 600px)">
                            <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                                 alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                        </picture>
                        <?php the_field( 'content3' ); ?>
                    </div>
                    <div class="b-covid-image">
                        <picture class="hidden-to-mobile">
                            <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                    media="(min-width: 600px)">
                            <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                                 alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-space s-bg-image s-dark content-right lazy" data-bg="<?php the_field( 'background4' ); ?>">
            <div class="cn df df-row">
                <div class="half-content">
                    <?php the_field( 'content4' ); ?>
                    <div class="btn-wrap">
                        <a href="<?php the_field( 'button_url4' ); ?>" class="btn btn--green"><span><?php the_field( 'button_text4' ); ?></span>
                            <div class="back"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="s-features">
            <div class="cn">
                <h2><?php the_field( 'features_title4' ); ?></h2>
                <div class="s-features-items">
                    <?php if ( have_rows( 'features_repeater4' ) ): ?>
                        <?php while ( have_rows( 'features_repeater4' ) ): the_row();
                            $image = get_sub_field( 'image' );
                            ?>
                            <div class="s-features-item">
                                <picture class="s-features__icon">
                                    <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                            media="(min-width: 600px)">
                                    <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                                         alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                                </picture>
                                <h3 class="s-features__title"><?php the_sub_field( 'title' ); ?></h3>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <section class="home-parking s-bg-image s-dark content-left lazy" data-bg="<?php the_field( 'background5' ); ?>">
            <div class="cn df df-row">
                <div class="half-content">
                    <?php the_field( 'content5' ); ?>
                    <div class="btn-wrap">
                        <a href="<?php the_field( 'button_url5' ); ?>" class="btn btn--green"><span><?php the_field( 'button_text5' ); ?></span>
                            <div class="back"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="s-features s-dark">
            <div class="cn">
                <h2><?php the_field( 'features_title5' ); ?></h2>
                <div class="s-features-items">
                    <?php if ( have_rows( 'features_repeater5' ) ): ?>
                        <?php while ( have_rows( 'features_repeater5' ) ): the_row();
                            $image = get_sub_field( 'image' );
                            ?>
                            <div class="s-features-item">
                                <picture class="s-features__icon">
                                    <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                            media="(min-width: 600px)">
                                    <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                                         alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                                </picture>
                                <h3 class="s-features__title"><?php the_sub_field( 'title' ); ?></h3>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <section class="s-review">
            <div class="cn">
                <h2><?php the_field( 'title6' ); ?></h2>
                <div class="s-review-slider">
                    <?php if ( have_rows( 'repeater6' ) ): ?>
                        <?php while ( have_rows( 'repeater6' ) ): the_row();
                            $image = get_sub_field( 'image' );
                            $logo = get_sub_field( 'logo' );
                            ?>
                            <div class="s-review-slider-item">
                                <div class="s-review-slider-inner">
                                    <div class="s-review-slider-header">
                                        <div class="s-review-slider__member">
                                            <picture class="s-review-slider__image">
                                                <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                                        media="(min-width: 600px)">
                                                <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                                                     alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                                            </picture>
                                            <div class="s-review-slider__name"><?php the_sub_field( 'name' ); ?></div>
                                        </div>

                                        <picture class="s-review-slider__logo">
                                            <source srcset="<?php echo wp_get_attachment_image_url( $logo, 'full' ); ?>"
                                                    media="(min-width: 600px)">
                                            <img src="<?php echo wp_get_attachment_image_url( $logo, 'medium' ); ?>"
                                                 alt="<?php echo get_post_meta( $logo, '_wp_attachment_image_alt', true ); ?>">
                                        </picture>
                                    </div>
                                    <div class="s-review-slider-text">
                                        <?php the_sub_field( 'content' ); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>


                </div>
            </div>
        </section>

        <section class="s-bg-image s-dark lazy" data-bg="<?php the_field( 'background' ); ?>">
            <div class="cn min-height df df-alignCenter df-justifyCenter">

                <h2><?php the_field( 'title7' ); ?></h2>

            </div>
        </section>

    <?php }
}
get_footer(); ?>