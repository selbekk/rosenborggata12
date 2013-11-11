<?php
/**
 * The template for displaying Tag pages.
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="news-posts col-md-8">
    <?php if ( have_posts() ) : ?>
        <h1 class="archive-title"><?php printf( 'Innlegg tagget med "%s"', single_tag_title( '', false ) ); ?></h1>

        <?php if ( tag_description() ) : // Show an optional tag description ?>
        <div class="archive-meta"><?php echo tag_description(); ?></div>
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