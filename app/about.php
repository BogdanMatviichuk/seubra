<?php /* Template Name: About */ ?>
<?php include_once( 'head.php' ) ?>

<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>


        <!--  Home Hero Screen  -->
        <section class="s-hero s-bg-image s-dark lazy" data-bg="<?php the_field( 'background1' ); ?>">
            <div class="cn min-height df df-alignCenter df-justifyCenter">

                <h2><?php the_field( 'title1' ); ?></h2>

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


        <section class="s-text s-dark gap-sm">
            <div class="cn df df-row">
                <div class="half-content half-content--left">
                    <div class="b-info">
                        <?php $image = get_field( 'top_image3' ); ?>
                        <picture>
                            <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                    media="(min-width: 600px)">
                            <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                                 alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                        </picture>
                        <?php the_field( 'content3' ); ?>
                    </div>
                </div>
                <div class="half-content half-content--right">
                    <?php $image = get_field( 'image3' ); ?>
                    <picture>
                        <source srcset="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
                                media="(min-width: 600px)">
                        <img src="<?php echo wp_get_attachment_image_url( $image, 'medium' ); ?>"
                             alt="<?php echo get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>">
                    </picture>
                </div>
            </div>
        </section>

        <section class="bgp-right s-bg-image s-dark content-right lazy" data-bg="<?php the_field( 'background4' ); ?>">
            <div class="cn df df-row">
                <div class="half-content">
                    <?php the_field( 'content4' ); ?>
                </div>
            </div>
        </section>


        <section class="four-columns">
            <div class="cn">
                <div class="four-columns-content">
                    <?php if ( have_rows( 'repeater5' ) ): ?>
                        <?php while ( have_rows( 'repeater5' ) ): the_row();
                            $image = get_sub_field( 'image' );
                            ?>
                            <div class="four-columns-item">
                                <div class="b-info half-content">
                                    <h2><?php the_sub_field( 'title' ); ?></h2>
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
            </div>
        </section>


    <?php }
}
get_footer(); ?>