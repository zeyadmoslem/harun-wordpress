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
        <img src="<?= get_template_directory_uri() ?>/assets/images/page-title/1.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Menü</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Startseite</a></li>
                        <li class="active">Menü</li>
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
                    foreach ($menu_item_array as $key => $value) { ?>
                        <li class=" <?php if ($i == 0) {
                                        echo 'active';
                                    } ?> "><a class="text-white" href="#<?= slug($key) ?>" data-toggle="tab"><?= $key ?></a></li>

                    <?php $i++;
                    } ?>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                    <?php
                    $i = 0;
                    foreach ($menu_item_array as $key => $value) { ?>
                        <div class="tab-pane fade in  <?php if ($i == 0) {
                                                            echo 'active';
                                                        } ?>" id="<?= slug($key) ?>">

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
                                                        <h3 class="dish--title text-white"><?= $item ?>
                                                            <span class="dish--stof"><?= $item_value['stof'] ?></span>
                                                        </h3>
                                                        <span class="dish--price"><?= $item_value['price'] ?> €</span>
                                                        <p class="dish--desc"><?= $item_value['desc'] ?></p>
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
                    <?php $i++;
                    } ?>
                </div>
                <!-- .tabs-content end -->
            </div>
            <!-- .col-md-12 end -->
        </div>

    </div>
    <!-- .container end -->
</section>
<!-- #menuGrid end -->

<?php
get_footer();
