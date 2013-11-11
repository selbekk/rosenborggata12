<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */

get_header(); ?>
<div class="news-posts col-md-8">
<?php if ( have_posts() ) : ?>
    <h1 class="archive-title"><?php printf( 'Innlegg i kategorien "%s"', single_cat_title( '', false ) ); ?></h1>

    <?php if ( category_description() ) : // Show an optional category description ?>
    <p class="lead"><?php
    $categories = get_the_category();
    echo $categories[0]->description;

    ?></p>
    <?php endif; ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>

    <?php twentythirteen_paging_nav(); ?>

<?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
</div>

<?php get_sidebar('nyheter'); ?>
<?php get_footer(); ?>