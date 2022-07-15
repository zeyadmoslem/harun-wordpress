<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Harun
 */

get_header();
?>

        <!-- Hero Section
====================================== -->
<section id="slider" class="slider slide-overlay-black">
            <!-- START REVOLUTION SLIDER 5.0 -->
            <div class="rev_slider_wrapper">
                <div id="slider1" class="rev_slider" data-version="5.0">
                    <ul>
                        <!-- slide 1 -->
                        <li data-transition="slotfade-vertical" data-slotamount="default" data-masterspeed="0">
                            <!-- MAIN IMAGE -->
                            <img src="<?= get_template_directory_uri() ?>/assets/images/sliders/slide-bg/ss.avif" alt="Slide Background Image" width="1920"
                                height="1280">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-150"
                                data-whitespace="nowrap" data-width="none" data-height="none"
                                data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--icon"><img src="<?= get_template_directory_uri() ?>/assets/images/sliders/slide-bg/fork-img.png"
                                        alt="fork img"></div>
                            </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-50"
                                data-whitespace="nowrap" data-width="none" data-height="none"
                                data-frames='[{"delay":750,"speed":1000,"frame":"0","from":"y:-40px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--subheadline">Döner By Harun</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption top-sm--30" data-x="center" data-hoffset="0" data-y="center" data-voffset="30"
                                data-whitespace="nowrap" data-width="none" data-height="none"
                                data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline">Frische Zutaten, leckere Mahlzeiten</div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption top-sm--40" data-x="center" data-hoffset="0" data-y="center" data-voffset="90"
                                data-width="none" data-height="none"
                                data-frames='[{"delay":1250,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--bio text-center">Döner By Harun ist eines der ersten Restaurants in
                                  Karben, das Türkische Grichte und Döner serviert. <span></span> Das Restaurant wurde mit
                                    Blick auf die türkische Küche entworfen.
                                </div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption top-sm--50" data-x="center" data-hoffset="0" data-y="center" data-voffset="175"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                                data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                                <div class="slide-action">
                                    <a class="btn btn--secondary" href="#">Uners Menü</a>
                                </div>
                            </div>

                        </li>

                        <!-- slide 2 -->
                        <li data-transition="parallaxvertical" data-slotamount="default" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="<?= get_template_directory_uri() ?>/assets/images/sliders/slide-bg/ssss.jpg" alt="Slide Background Image" width="1920"
                                height="1280">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65"
                                data-whitespace="nowrap" data-width="none" data-height="none"
                                data-frames='[{"delay":750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--subheadline">Echtes Geschmack, leckeres Essen</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="0"
                                data-whitespace="nowrap" data-width="none" data-height="none"
                                data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline">Leidenschaft für den perfekten Geschmack</div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-frames='[{"delay":1250,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                                data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                                <div class="slide-action">
                                    <a class="btn btn--secondary" href="#">Uners Menü</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
            <!-- END OF SLIDER WRAPPER -->
        </section>
        <!-- Columns Section
============================================= -->
        <section id="banner7" class="banner banner-7 text-center pb-30 bg-dark">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="heading heading-1 mb-50 text--center">
                            <p class="heading--subtitle">Willkommen bei</p>
                            <h2 class="heading--title mb-0 text-white">Döner By Harun </h2>
                            <div class="divider--shape-4"></div>
                            <p class="heading--desc">Döner By Harun ist eines der ersten Restaurants in Karben, das
                                Türkische Grichte und Döner serviert. Das Restaurant wurde mit Blick auf die türkische
                                Küche entworfen.</p>
                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="banner-panel">
                            <div class="banner--img">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/banners/1.jpg" alt="banner img" class="img-responsive">
                                <div class="banner--overlay">Fangen Sie an, besser zu essen</div>
                            </div>
                            <div class="banner--content">
                                <h4>Täglich neue frische Menüs Zusatz</h4>
                                <p>Döner By Harun hilft Ihnen, sich dank unserer täglich wechselnden Menüs und unserer
                                    fantastischen kreativen Köche jeden Tag mit einer anderen Mahlzeit zu verwöhnen!
                                </p>
                            </div>
                        </div>
                        <!-- .banner-panel end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="banner-panel">
                            <div class="banner--img">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/banners/5.jpg" alt="banner img" class="img-responsive">
                                <div class="banner--overlay">Qualität ist das Herz</div>
                            </div>
                            <div class="banner--content">
                                <h4>Frische Zutaten, leckere Mahlzeiten</h4>
                                <p>Wer sagt, dass gesundes Essen nicht auch lecker sein kann? Die kreativen Köche von
                                    Bento verwenden frische und saisonale Zutaten, um sie erschwinglich zu machen.
                                </p>
                            </div>
                        </div>
                        <!-- .banner-panel end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="banner-panel">
                            <div class="banner--img">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/banners/3.jpg" alt="banner img" class="img-responsive">
                                <div class="banner--overlay">Heiß und servierfertig</div>
                            </div>
                            <div class="banner--content">
                                <h4>Kreative und talentierte Mitarbeiter</h4>
                                <p>Döner By Harun hat ein Team von kulinarischen Profis angeboten die köstliche Gerichte
                                    bei unvergesslichen Veranstaltungen zubereiten sowohl für Privatkunden.
                                </p>
                            </div>
                        </div>
                        <!-- .banner-panel end -->
                    </div>
                    <!-- .col-md-4 end -->

                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #banner7 end -->
        <!-- Menu Grid  -->
        <section id="menuGrid" class="bg-dark">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="heading heading-1 mb-50 text--center">
                            <p class="heading--subtitle">Schmecken am besten</p>
                            <h2 class="heading--title mb-0 text-white">Frische Zutaten, leckere Mahlzeiten</h2>
                            <div class="divider--shape-4"></div>
                            <p class="heading--desc">Jeder hat Geschmack, auch wenn er es nicht merkt. Auch wenn Sie
                                kein großer Koch sind, hindert Sie nichts daran, den Unterschied zwischen dem, was gut
                                schmeckt, und dem, was nicht schmeckt, zu verstehen.</p>
                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <div class="container pr-0 pl-0 tabs">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <?php
                                 $i = 0;
                                foreach ($menu_item_array as $key => $value ) { ?>
                                    <li class=" <?php if($i == 0){echo 'active';} ?> " ><a class="text-white" href="#<?= slug($key)?>" data-toggle="tab"><?= $key?></a></li>
                               
                            <?php  $i++; } ?>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">

                            <?php
                                 $i = 0;
                                foreach ($menu_item_array as $key => $value ) { ?>
                                <div class="tab-pane fade in  <?php if($i == 0){echo 'active';} ?>" id="<?= slug($key)?>">

                                <section id="" class="section section-divider menu menu-1 mtop-100 pt-0 pb-0 bg-dark">
                                    <div class="container-fluid">
                                        <div class="row ">
                                            <div class="col-xs-12 col-sm-12 col-md-6 pr-0 pl-0 d-none d-md-block" style="height:550px ;">
                                                <div class="bg-overlay bg-overlay-dark">
                                                    <div class="bg-section">
                                                        <img src="<?= get_template_directory_uri() ?>/assets/images/menu/split/1.jpg" alt="Background" />
                                                    </div>
                                                    <div class="divider--shape-right"></div>
                                                    <div class="p-2">
                                                        <div class="heading heading-3">
                                                            <h2 class="heading--title mb-0 text-white">Zusatzstufen:</h2>
                                                        </div>
                                                        <ul class="list number-list">
                                                            <li><span>1.</span>Phosphat</li>
                                                            <li><span>2.</span>Konservierungsstoffe</li>
                                                            <li><span>3.</span>Antioxidationsmittel</li>
                                                            <li><span>4.</span>Geschmacksverstärker</li>
                                                            <li><span>A:</span>für glutenhaltiges Getreide </li>
                                                            <li><span>B:</span>für Krebstiere und -erzeugnisse</li>
                                                            <li><span>C:</span>für Eier und daraus gewonnene Erzeugnisse</li>
                                                            <li><span>D:</span>für Fisch und Fischerzeugnisse (außer Fischgelatine)</li>
                                                            <li><span>G:</span>für Milch und Milcherzeugnisse (inklusive Laktose)</li>
                                                            <li><span>H:</span>für Schalenfrüchte und daraus gewonnene Erzeugnisse</li>
                                                            <li><span>K:</span>Sesamsamen</li>
                                                            <li><span>O:</span>für Schwefeldioxid und -erzeugnisse</li>
                                                            <li><span>R:</span>für Weichtiere wie Schnecken, Muscheln, Tintenfische und daraus hergestellte Erzeugnisse</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col-md-6 end-->
                                            <div class="col-xs-12 col-sm-12 col-md-6  pl-100 ">
                                                <div class="mt-10 menu-item-list">
                                                    <?php
                                                    foreach ($value as $item => $item_value) { ?>
                                                    <div class="dish-panel">
                                                        <h3 class="dish--title text-white"><?= $item?>
                                                        <span class="dish--stof"><?= $item_value['stof']?></span>
                                                        </h3>
                                                        <span class="dish--price"><?= $item_value['price']?> €</span>
                                                        <p class="dish--desc"><?= $item_value['desc']?></p>
                                                    </div>
                                                    <?php }
                                                    ?> 

      
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .container end -->
                                </section>
                                <!-- #cover1 end -->
                            </div>
                            <?php  $i++; } ?>
                        </div>
                        <!-- .tabs-content end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row text-center mt-70">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn--secondary btn--lg" href="<?php echo esc_url( home_url( '/menu' ) ); ?>">Vollständige Menü</a>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #menuGrid end -->

        <!-- Reservation #1 -->
        <section id="reservation1" class="reservation bg-overlay bg-overlay-dark bg-parallax pt-90 pb-80">
            <div class="bg-section">
                <img src="<?= get_template_directory_uri() ?>/assets/images/background/7.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="divider--shape-1up"></div>
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="heading heading-1 mb-50 text-center">
                            <p class="heading--subtitle">Kontakt</p>
                            <h2 class="heading--title text-white">Nehmen Sie kontakt mit uns auf!</h2>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                        <div class="reservation-form box-shadow mb-30 bg-dark text-center">
                        <?php echo wpautop(do_shortcode('[contact-form-7 id="22" title="Homepage"]')) ?>

                            <!-- form end -->
                        </div>
                        <!-- .contact-form end -->
                    </div>
                </div>
                <!-- .row end -->
                <div class="divider--shape-1down"></div>
            </div>
            <!-- .container end -->
        </section>
        <!-- #reservation1 end -->

        <!-- Testimonial #3 -->
        <section id="testimonial3" class="testimonial testimonial-3 text-center pt-80 pb-80 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 ">
                        <div id="testimonial-wide" class="carousel carousel-dots pr-30 pl-30" data-slide="1"
                            data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0"
                            data-loop="true" data-speed="800">
                            <!-- Testimonial #1 -->
                            <div class="testimonial-panel">
                                <div class="testimonial--rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- .testimonial-rating end -->
                                <div class="testimonial--body ">
                                    <p class="text-white">“ Wieder einmal fühle ich mich gezwungen, über unser wunderbares kulinarisches Erlebnis bei Döner by Harun zu schreiben. Mein Freund und ich haben oft wunderbar gegessen. Wir haben entweder Mahlzeiten oder Gespräche über unsere Mahlzeiten in Ihrem Restaurant mit Freunden und Familie geteilt ”</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--meta">
                                    <div class="testimonial--img">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/testimonial/1.jpg" alt="Zeyad">
                                    </div>
                                    <div class="testimonial--author">
                                        <h4>- Zeyad</h4>
                                    </div>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                            <!-- .testimonial-panel end -->

                            <!-- Testimonial #2 -->
                            <div class="testimonial-panel">
                                <div class="testimonial--rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- .testimonial-rating end -->
                                <div class="testimonial--body">
                                    <p class="text-white">“ Once again, I feel compelled to write about our wonderful dining experience at
                                        Granny. My wife and I have often had wonderful meals. We have shared either
                                        meals or conversations about our meals at your restaurant with friends and
                                        family ”</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--meta">
                                    <div class="testimonial--img">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/testimonial/2.png" alt="Testimonial Author">
                                    </div>
                                    <div class="testimonial--author">
                                        <h4>- David Casper</h4>
                                    </div>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                            <!-- .testimonial-panel end -->
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #testimonial3 end -->

<?php
get_footer();
