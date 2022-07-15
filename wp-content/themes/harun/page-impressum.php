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

        <!-- Page Title -->
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
                                    <h1>Impressum</h1>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a></li>
                                <li class="active">Impressum</li>
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

        <!-- Headline Section -->
        <section class="bg-dark">
            <div class="container imprint">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-capitalize red-color">Döner By Harun Restaurants</h3>
                        <p>Diese Internet-Seite ist ein Online-Angebot des:</p>
                        <p><a href=""></a>Döner By Harun Restaurants</p>
                        <p>Inhaber: Harun Cigdem </p>
                        <p>Banhofstraße 192, 61184 Karben </p>
                        <p>Tel:060399263900</p>
                        <p>E-Mail: kontakt@doener-by-harun.de
                        </p>
                        <p>Web   : https://doener-by-harun.de</p>
                        
                    </div>
                    <div class="clearfix mb-sm">
                    </div>
                    <div class="col-md-12">
                        <h4 class="text-capitalize red-color">Verantwortlich:
                        </h4>
                        <p>Harun Cigdem</p>
                        <p>USt-IdNr.:</p>
                        <p>xxxxxxxxxxxxx
                        </p>
                    </div>
                    <div class="clearfix mb-sm">
                    </div>
                    <div class="col-md-12">
                        <h4 class="text-capitalize red-color">Aufsichtsbehörde:
                        </h4>
                        <p>Stadt Karben / Gewerbeamt  </p>
                        <p>Rathausplatz 1
                        </p>
                        <p>61184 Karben

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- headline End -->

<?php
get_footer();
