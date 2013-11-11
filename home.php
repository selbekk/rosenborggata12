<?php
/**
 * The home page of our theme
 *
 * This is the front page of the theme. There is still a bit of work to do here generalizing.
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */
get_header();
?>
    <div class=" hidden-xs">
            <div class="slides">
                <img src="<?php bloginfo('template_url'); ?>/images/content/slides/fasade-oppover.jpg" alt="slideshow" />
                <img src="<?php bloginfo('template_url'); ?>/images/content/slides/fasade-trappeoppgang.jpg" alt="slideshow" />
                <img src="<?php bloginfo('template_url'); ?>/images/content/slides/fasade-closeup-2.jpg" alt="slideshow" />
                <img src="<?php bloginfo('template_url'); ?>/images/content/slides/gang-trapper.jpg" alt="slideshow" />
            </div>
        </div>

        <div class="">
            <div class="page-intro">
                <h2>Flott beliggenhet, høy standard, kule naboer.</h2>
                <p class="lead">
                    Rosenborggata 12 er et borettslag som befinner seg minutter unna alt av fasiliteter på ærverdige
                    Majorstuen. På denne siden kan du finne det du trenger av informasjon som både beboer, potensiell kjøper,
                    leietager og utleier. Eller misunnelig nabo.
                </p>
            </div>

            <div class="tiles row">
                <div class="">
                    <div class="col-xs-6 col-sm-3 tile">
                        <a href="<?php bloginfo('url'); ?>/nyinnflyttet">
                            <div class="inner-tile new-tenant">
                            <h2>Nyinnflyttet?</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 tile">
                        <a href="<?php bloginfo('url'); ?>/nyttig-info">
                            <div class="inner-tile information">
                            <h2>Nyttig info</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 tile">
                        <a href="<?php bloginfo('url'); ?>/nyheter">
                            <div class="inner-tile news">
                            <h2>Nyheter</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 tile">
                        <a href="<?php bloginfo('url'); ?>/styret">
                            <div class="inner-tile board">
                            <h2>Styret</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 tile">
                        <a href="<?php bloginfo('url'); ?>/vaktmester">
                            <div class="inner-tile janitor">
                            <h2>Vaktmester</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 tile">
                        <a href="<?php bloginfo('url'); ?>/forsikring">
                            <div class="inner-tile insurance">
                            <h2>Forsikring</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 tile">
                        <a href="<?php bloginfo('url'); ?>/ordensregler">
                            <div class="inner-tile rules">
                            <h2>Ordensregler</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 tile">
                        <a href="<?php bloginfo('url'); ?>/utleie">
                            <div class="inner-tile rental">
                            <h2>Utleie</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hidden-xs row">
                <div class="col-sm-6 space-bottom">
                    <h2 class="no-space-top">Litt om borettslaget</h2>
                    <p>
                         Rosenborggata 12 ligger rett ved Bogstadveien på Majorstuen i Oslo. Den fem-etasjer høye bygården
                         består av 45 leiligheter på mellom 30 og 45 kvadratmeter, og har en generelt høy standard. Bygget
                         ble oppført i 1892, og ble sist totalrenovert i 2008. Borettslaget er en del av <a href="http://www.obos.no">OBOS</a>.
                    </p>
                    <a href="<?php bloginfo('url'); ?>/om" class="btn btn-primary">Les mer her</a>
                </div>
                <div class="col-sm-6">
                    <div class="highlighted">
                        <?php $recentpost = new WP_Query("showposts=1"); while($recentpost->have_posts()) : $recentpost->the_post(); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if( has_post_thumbnail ) the_post_thumbnail(array(250, 250), array('class' => 'hidden-sm pull-left responsive-img') ); ?>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary<?php if(has_post_thumbnail) echo ' respect-image'; ?>">&raquo; Les mer</a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
?>