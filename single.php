<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */

get_header(); ?>
<div class="row">
    <div class="col-md-8">
    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>
        <?php rg12_post_nav(); ?>

    <?php endwhile; ?>
    </div>
<?php get_sidebar('nyheter'); ?>
</div>
<?php get_footer(); ?>