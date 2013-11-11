<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */
?>
    <div class="blog-post" <?php if( is_search() ) : ?>style="border: 0;" <?php endif; ?>>
		<?php if ( has_post_thumbnail() && !is_search()) : ?>
			<?php the_post_thumbnail('full', array('class' => 'featured-image img-responsive hidden-xs')); ?>
		<?php endif; ?>
        <?php if ( is_search() ) : ?>
        <li><div class="list-content">
        <?php endif; ?>
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; // is_single() ?>

		<div class="entry-meta">
			<?php rg12_entry_meta(); ?>
			<?php edit_post_link( 'endre', '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div></li><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">

		<?php the_content( 'Les mer<span class="meta-nav">&rarr;</span>', true ); ?>
		<?php wp_link_pages( array(
                'before' => '<div class="page-links"><span class="page-links-title">Sider</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>'
		    ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
	</div>