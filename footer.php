<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */
?>
    </div> <!-- end #main -->

    <footer class="outer-footer">
        <div class="container">
            <div class="row">
                <div class="contact col-sm-4 col-md-3 hidden-xs">
                    <h2>&nbsp;</h2>
                    <img src="<?php bloginfo('template_url'); ?>/images/content/rg12-logo.png" alt="Rosenborggata 12 logo" class="img-responsive"/>
                    <address>
                        <strong>Borettslaget Rosenborggt. 12</strong><br />
                        Rosenborggata 12<br />
                        0356 Oslo<br />
                        Org. nr 981 579 844
                        <br />
                        <strong>
                            <a href="mailto:rosenborggata12@googlegroups.com">rosenborggata12@googlegroups.com</a>
                        </strong>
                    </address>
                </div>
                <div class="contact-form col-sm-6 col-sm-offset-2 col-md-4 col-md-offset-1">
                    <h3>Kontakt oss</h3>
                    <form action="/kontakt" method="post" id="footer-contact-form">
                        <input type="text" id="form-name" name="form-name" class="form-control" placeholder="Hva heter du?" required />
                        <input type="email" id="form-email" name="form-email" class="form-control" placeholder="Hva er eposten din?" required />
                        <textarea rows="4" id="form-msg" name="form-msg" class="form-control" placeholder="Hva lurer du på?" required></textarea>
                        <input type="submit" class="btn btn-success footer-form" value="Send oss mail"/>
                    </form>
                </div>
                <div class="google-maps col-md-4 col-md-offset-0 hidden-xs hidden-sm">
                    <h3>Finn oss</h3>
                    <div id="maps-container" class="maps-container">

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.slides.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lib/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/views.min.js"></script>

    <!-- Google Analytics -->
    <script>

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-44337291-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

    <!-- Wordpress -->
    <?php wp_footer(); ?>
</body>
</html>
