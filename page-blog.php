<?php
	/* Template Name: Blog */
?>

<?php get_header(); ?>

<div class="ib-posts-pages">

<?php

    $the_query = new WP_Query( array(
      'category_name' => 'blog'
    ) );

        if ( $the_query->have_posts() ) {
?>
            <h3> <?php the_title(); ?></h3>
            <ul class="ib-article-list">
            <?php  while ( $the_query->have_posts() ) {
                $the_query->the_post();
            ?>
                <li>
                    <!-- <a href="<?php the_permalink(); ?>"> -->
                        <div style="background-image: url('<?php the_post_thumbnail_url('small'); ?>')" class="ib-article-list-thumbnail"></div>
                  
                        <div class="ib-article-list-content">
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <span class="ib-article-list-date">
                                <?php get_the_date('d/m/Y'); ?>
                            </span>
                        </div>

                        <div class="ib-button ib-button-main-color">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    <!-- </a> -->
                </li>
            <?php } ?>
            </ul> <?php // .cp-news-list ?>
    <?php } else { ?>
    <?php } ?>
        <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
