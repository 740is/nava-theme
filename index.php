<?php get_header(); ?>

    <section class="ib-hero-area"> <?php // BEGIN: Hero section ?>
        
        <?php
            $the_query = new WP_Query( array(
                'post_type' => 'stillingar_vefsidan',
                'p' => 'hero-textasvaedi'
            ) );
            
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
        ?> 
                <div class="ib-hero-slick-slider">
                <?php if ( get_field('field_5bf2832946b09') ) { // Hero Image ?>
                    <div>
                        <div class="ib-hero-slider">
                            <?php $image = get_field('field_5bf2832946b09'); ?>
                            <div style="background-image: url('<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>');" class="ib-hero-area-bkg-image">
                                <div class="ib-hero-area-bkg-image-overlay"></div>
                                <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"> -->
                            </div>

                            <?php if ( get_field('field_5bf281dd46b06') ) { ?>
                                <div class="ib-hero-area-text-values">
                                    <h2><?php echo get_field('field_5bf281dd46b06'); // Headline ?></h2>
                                    <p><?php echo get_field('field_5bf282ba46b07'); // Sub headline ?></p>
                                </div>
                            <?php } ?>

                            <?php if ( get_field('field_5bf282cb46b08') ) { ?>
                                <div class="ib-hero-area-text-quotes">
                                    <i class="ib-quote-mark ib-quote-begin">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-begin.svg">
                                    </i>
                                    
                                    <p><span class="ib-hero-quote"><?php echo get_field('field_5bf282cb46b08'); // Quote ?></span></p>
                                    <i class="ib-quote-from">-&nbsp;<?php echo get_field('field_5bf8186db2603'); // Quoted ?></i>
                                    
                                    <i class="ib-quote-mark ib-quote-end">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-end.svg">
                                    </i>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php }; ?>

                <?php if ( get_field('field_5c011cc04ef75') ) { // Hero Image ?>
                    <div>
                        <div class="ib-hero-slider">
                            <?php $image = get_field('field_5c011cc04ef75'); ?>
                            <div style="background-image: url('<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>')" class="ib-hero-area-bkg-image">
                                <div class="ib-hero-area-bkg-image-overlay"></div>
                                <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"> -->
                            </div>

                            <?php if ( get_field('field_5c011cca4ef76') ) { ?>
                                <div class="ib-hero-area-text-values">
                                    <h2><?php echo get_field('field_5c011cca4ef76'); // Headline ?></h2>
                                    <p><?php echo get_field('field_5c011cd14ef77'); // Sub headline ?></p>
                                </div>
                            <?php } ?>

                            <?php if ( get_field('field_5c011cd44ef78') ) { ?>
                                <div class="ib-hero-area-text-quotes">
                                    <i class="ib-quote-mark ib-quote-begin">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-begin.svg">
                                    </i>
                                    
                                    <p><span class="ib-hero-quote"><?php echo get_field('field_5c011cd44ef78'); // Quote ?></span></p>
                                    <i class="ib-quote-from">-&nbsp;<?php echo get_field('field_5c011cda4ef79'); // Quoted ?></i>
                                    
                                    <i class="ib-quote-mark ib-quote-end">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-end.svg">
                                    </i>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php }; ?>

                <?php if ( get_field('field_5c013395169cb') ) { // Hero Image ?>
                    <div class="ib-hero-slider">
                        <?php $image = get_field('field_5c013395169cb'); ?>
                        <div style="background-image: url('<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>');" class="ib-hero-area-bkg-image">
                            <div class="ib-hero-area-bkg-image-overlay"></div>
                            <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"> -->
                        </div>

                        <?php if ( get_field('field_5c01339d169cc') ) { ?>
                            <div class="ib-hero-area-text-values">
                                <h2><?php echo get_field('field_5c01339d169cc'); // Headline ?></h2>
                                <p><?php echo get_field('field_5c0133a2169cd'); // Sub headline ?></p>
                            </div>
                        <?php } ?>

                        <?php if ( get_field('field_5c0133aa169ce') ) { ?>
                            <div class="ib-hero-area-text-quotes">
                                <i class="ib-quote-mark ib-quote-begin">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-begin.svg">
                                </i>
                                
                                <p><span class="ib-hero-quote"><?php echo get_field('field_5c0133aa169ce'); // Quote ?></span></p>
                                <i class="ib-quote-from">-&nbsp;<?php echo get_field('field_5c0133ae169cf'); // Quoted ?></i>
                                
                                <i class="ib-quote-mark ib-quote-end">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-end.svg">
                                </i>
                            </div>
                        <?php } ?>
                    </div>
                <?php }; ?>

                <?php if ( get_field('field_5c01346b9f6ee') ) { // Hero Image ?>
                    <div class="ib-hero-slider">
                        <?php $image = get_field('field_5c01346b9f6ee'); ?>
                        <div style="background-image: url('<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>');" class="ib-hero-area-bkg-image">
                            <div class="ib-hero-area-bkg-image-overlay"></div>
                            <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"> -->
                        </div>

                        <?php if ( get_field('field_5c01346f9f6ef') ) { ?>
                            <div class="ib-hero-area-text-values">
                                <h2><?php echo get_field('field_5c01346f9f6ef'); // Headline ?></h2>
                                <p><?php echo get_field('field_5c0134799f6f0'); // Sub headline ?></p>
                            </div>
                        <?php } ?>

                        <?php if ( get_field('field_5c01347d9f6f1') ) { ?>
                            <div class="ib-hero-area-text-quotes">
                                <i class="ib-quote-mark ib-quote-begin">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-begin.svg">
                                </i>
                                
                                <p><span class="ib-hero-quote"><?php echo get_field('field_5c01347d9f6f1'); // Quote ?></span></p>
                                <i class="ib-quote-from">-&nbsp;<?php echo get_field('field_5c0134819f6f2'); // Quoted ?></i>
                                
                                <i class="ib-quote-mark ib-quote-end">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-end.svg">
                                </i>
                            </div>
                        <?php } ?>
                    </div>
                <?php }; ?>
                </div> <?php // .ib-hero-slick-slider ?>
        <?php    


                }
            }
            wp_reset_postdata();
        ?>
    </section> <?php // END: Hero section ?>

    <div class="ib-featured-banner">
        <div class="ib-featured-content">
            <div class="ib-featured-logo">
                <?php
                $the_query = new WP_Query( array(
                    'post_type' => 'featured',
                    'orderby' => 'rand'
                ) );
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                ?>
                        <?php $postId = get_the_ID(); ?>
                            <div>
                                <a href="<?php echo get_field('field_5c8cffb968d8b', $postId); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                        <?php
                    }
                }
                ?>
            </div> <?php // .ib-featured-logo ?>
        </div> <?php // .ib-featured-content ?>
    </div> <?php // .ib-featured-banner ?>


    <?php
        $the_query = new WP_Query( array(
            'category_name' => 'bio'
        ) );

        if ( $the_query->have_posts() ) :
    ?>
    
        <section class="ib-front-page-section">
            <div class="ib-front-page-section-content">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="ib-front-page-section-image ib-image-align-left" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                    
                </div> <?php // .ib-front-page-section-image ?>
            
                <div class="ib-front-page-section-text ib-text-block-align-right">

                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <div class="ib-button ib-button-main-color">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div> <?php // .ib-front-page-section-text ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div> <?php // .ib-front-page-section-content ?>
        </section> <?php // .ib-front-page-section ?>

    <?php endif; ?>

    <!-- <section class="ib-middle-image-area"> <?php // BEGIN: Hero section ?>
        
        <?php
            $the_query = new WP_Query( array(
                'category_name' => 'forsidusvaedi-tvo'
            ) );
            
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
        ?>    
                        <?php $image = get_field('field_5bf2832946b09'); ?>
                        <div style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat;" class="ib-middle-image-bkg-img"></div>
                            
        <?php    
                }
            }
            wp_reset_postdata();
        ?>
    </section> <?php // END: Hero section ?> -->

    <!-- <div class="ib-front-page-contact">
        <div class="ib-front-page-contact-content">
            <div class="ib-front-page-contact-info">
                <h2>HAFÐU SAMBAND</h2>
                <h4></h4>
                <h3></h3>
            </div>

            <div class="ib-front-page-contact-form">

            </div>
        </div>
    </div> -->

    <?php
        $the_query = new WP_Query( array(
            'category_name' => 'forsidusvaedi-tvo'
        ) );

        if ( $the_query->have_posts() ) :
    ?>
    
        <section class="ib-front-page-section">
            <div class="ib-front-page-section-content">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="ib-front-page-section-image ib-image-align-right" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                </div> <?php // .ib-front-page-section-image ?>
        
                <div class="ib-front-page-section-text ib-text-block-align-left">

                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <!-- <div class="ib-button ib-button-main-color">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div> -->

                </div> <?php // .ib-front-page-section-text ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div> <?php // .ib-front-page-section-content ?>
        </section> <?php // .ib-front-page-section ?>

    <?php endif; ?>

    <?php // Kominn hingað ?>

    <?php
        $the_query = new WP_Query( array(
            'post_type' => 'forsiduflisar'
        ) );

        if ( $the_query->have_posts() ) :
    ?>
    
        <section class="ib-tiles-area">
            <div class="ib-tiles-area-content">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <a  href="">                        
                        <div class="ib-tiles-boxes">
                        
                        <div class="ib-tiles-boxes-overlay"></div>
                            <div class="ib-tiles-boxes-content">
                                <?php the_content(); ?>
                            </div> <?php // .ib-tiles-boxes-content ?>
                            <div class="ib-red-corner-small"><i class="fas fa-ellipsis-h"></i></div>
                        </div> <?php // .ib-tiles-boxes ?>

                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div> <?php // .ib-tiles-area-content ?>
        </section> <?php // .ib-tiles-area ?>

    <?php endif; ?>
    

<?php get_footer(); ?>
