<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Harun
 */

get_header();
?>

<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="<?= get_template_directory_uri()?>/assets/images/page-title/1.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Kontakt</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a></li>
                        <li class="active">Kontakt</li>
                    </ol>
                    <div class="divider--shape-1down"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->



<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact--desc">
                                <p>Döner By Harun ist eines der ersten Restaurants in Karben, das Türkische Grichte und Döner serviert. Das Restaurant wurde mit Blick auf die türkische Küche entworfen.</p>
                            </div>
                            <div class="row mb-30">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="contact--info">
                                        <h3 class="red-color">Unsere Adresse</h3>
                                        <p>Banhofstraße 192, 61184 Karben</p>
                                    </div>
                                </div>
                                <!-- .col-md-6 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="contact--info">
                                        <h3 class="red-color">Unser Telefon</h3>
                                        <p>Restaurants: 002 01065370701</p>
                                    </div>
                                </div>
                                <!-- .col-md-6 end -->
                            </div>
                            <!-- .row end -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="contact--info">
                                        <h3 class="red-color">Unsere Email</h3>
                                        <p>Email : kontakt@doener-by-harun.de</p>
                                    </div>
                                </div>
                                <!-- .col-md-6 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="contact--info">
                                        <h3 class="red-color">Folge uns</h3>
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-6 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .col-md-3 end -->

                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-form">
                            <?php echo wpautop(do_shortcode('[contact-form-7 id="17" title="Contact form 1"]')) ?>

                            </div>
                        </div>
                        <!-- .col-md-6 end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #contact1 end -->

<?php
get_footer();
