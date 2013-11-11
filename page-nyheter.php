<?php


get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="page-content">
<?php
    if( has_post_thumbnail() ) {
        the_post_thumbnail(array(1000, 350), array('class' => 'featured-image img-responsive hidden-xs'));
    }
?>
<h1><?php the_title(); ?></h1>
<p class="lead"><?php echo get_the_content(); ?></p>
</div>
<?php endwhile; ?>
<hr />
<div class="row">
<?php
     $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'category__not_in' => 'slides', // TODO: Update new post categories here
                'paged' => $paged
            );

            $list_of_posts = new WP_Query( $args );
?>
    <?php if($list_of_posts->have_posts() ) : ?>
    <div class="news-posts col-md-8">
    <?php while ( $list_of_posts->have_posts() ) : $list_of_posts->the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
    </div>

    <?php twentythirteen_paging_nav(); ?>

<?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php get_sidebar('nyheter'); ?>
</div>

<?php get_footer(); ?>