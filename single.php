<?php get_header(); ?>

<div class="ib-posts-pages">

<?php
    while ( have_posts() ) : the_post();
?>
        <div class="ib-posts-pages-content">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail('medium'); ?>
            <?php the_content(); ?>
        </div> <?php // ib-posts-pages-content" ?>
<?php
    endwhile;    
?>

</div> <?php //ib-posts-pages ?>

<?php get_footer(); ?>