<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Harun
 */

?>

<footer id="footer" class="footer footer-1 text-center bg-dark">

    <div class="footer--widget text--center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="footer--widget-content">
                        <h3>Unsere Adresse</h3>
                        <p>Banhofstraße 192, 61184 Karben<br>Tel:012345678</p>
                        <a class="link--styled" target="_blank" href="https://www.google.com/maps/place/D%C3%B6ner+By+Harun/@50.2328932,8.7552896,19.89z/data=!4m9!1m2!2m1!1sd%C3%B6ner+by+harun!3m5!1s0x47bd0520ce4348d7:0x73f8772cbe2024ea!8m2!3d50.2329508!4d8.7557411!15sCg9kw7ZuZXIgYnkgaGFydW5aESIPZMO2bmVyIGJ5IGhhcnVukgEKcmVzdGF1cmFudA">Sehe auf Karte</a>
                    </div>
                </div>
                <!-- .col-md-3 end -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="footer--reservation">
                        <div class="divider--shape-10up"></div>
                        <h3>Öffnungszeiten</h3>
                        <div class="divider--shape-11"></div>
                        <div class="footer--reservation-wrapper">
                            <ul class="list-unstyled">
                                <li>MO - SA <span>10:00 – 21:00</span></li>
                                <li>Sontag <span>12:00 – 21:00</span></li>
                                <li>Feiertage <span>Geschlossen</span></li>
                            </ul>
                            <a class="btn btn--primary btn--bordered btn--block">Kontakt</a>

                        </div>
                        <div class="divider--shape-10down"></div>
                    </div>
                </div>
                <!-- .col-md-3 end -->
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="footer--widget-content">
                        <h3>Kontakt Info</h3>
                        <p class="mb-0">Email: kontakt@doener-by-harun.de</p>
                        <p class="mb-0">Tel: 0123456789</p>
                        <a class="link--styled" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">Naachricht senden</a>
                    </div>
                </div>
                <!-- .col-md-3 end -->

            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->
    <!--Social
	============================================= -->
    <div class="footer--social">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 text-center">
                    <div class="footer--social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <!-- .social-icons end -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->
    <!-- Copyrights
	============================================= -->
    <div class="footer--copyright text-center">
        <div class="divider--shape-dark"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 red-color">
                    <span>&copy; 2022 Döner By Harun </span>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-copyright end -->
</footer>
</div>
<!-- #wrapper end -->

<?php wp_footer(); ?>

</body>
</html>
