<?php
/**
 * The template for displaying the contact page.
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */

get_header(); ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
        <div class="entry-thumbnail">
            <?php the_post_thumbnail('full', array('class' => 'responsive-img featured-image hidden-xs')); ?>
        </div>
        <?php endif; ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php if( strpos(get_the_content(), '<span id="more-') ) : ?>
        <div class="entry-teaser lead">
            <?php global $more; $more=0; the_content(''); $more=1; ?>
        </div>
        <?php endif; ?>
        <div class="entry-content">
            <?php the_content('', true); ?>
        </div>

        <footer class="entry-meta">
            <?php edit_post_link('Endre side', '<span class="edit-link">', '</span>' ); ?>
        </footer>
        <?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>