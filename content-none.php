<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */
?>

<img src="<?php bloginfo('template_url'); ?>/images/content/404.jpg" alt="Fant ingen innlegg" class="featured-image img-responsive hidden-xs"/>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

<p><?php printf( 'Klar til å skrive ditt første innlegg? <a href="%1$s">Begynn her</a>.' , admin_url( 'post-new.php' )); ?></p>

<?php elseif ( is_search() ) : ?>
<h1>Fant ingen søkeresultater</h1>
<p>Beklager, men vi fant ingenting relatert til søkeordene dine. </p>
<?php rg12_get_search_trigger(); ?>

<?php else : ?>
<h1>Fant ikke innholdet</h2>
<p>Det ser ikke ut til at vi kan finne hva du leter etter. Kanskje du kan <span class="search-trigger">søke etter det?</span></p>
<?php endif; ?>