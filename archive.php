<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
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
            <h1 class="archive-title"><?php
                if ( is_day() ) :
                    printf('Arkiv for %s', get_the_date() );
                elseif ( is_month() ) :
                    printf( 'Arkiv for %s', get_the_date( _x( 'F Y', 'monthly archives date format', 'twentythirteen' ) ) );
                elseif ( is_year() ) :
                    printf( 'Arkiv for %s', get_the_date( _x( 'Y', 'yearly archives date format', 'twentythirteen' ) ) );
                else :
                    _e( 'Arkiv', 'twentythirteen' );
                endif;
            ?></h1>

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