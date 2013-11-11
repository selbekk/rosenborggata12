<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */

get_header(); ?>

    <?php if ( have_posts() ) : ?>

            <h1 class="page-title"><?php printf( 'Resultater for "%s"', get_search_query() ); ?></h1>

        <ol class="big-list">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
        </ol>

        <?php twentythirteen_paging_nav(); ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>