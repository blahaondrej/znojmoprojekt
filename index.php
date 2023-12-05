<?php require_once 'include/header-base.php' ?>

<?php require_once 'include/preloader.php' ?>

<?php require_once 'include/header.php' ?>



    <!-- ==================== Start Slider ==================== -->

    <header class="slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo $url ?>/src/assets/img/slid/slider1.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">01</h5>
                                        <h1 data-splitting><a href="#0">VÍTÁME VÁS</a>
                                        </h1>
                                        <p class="mt-10">Dovolte nám představit naší projektovou kancelář.</p>
                                        <a href="#about" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>VÍCE</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo $url ?>/src/assets/img/slid/slider2.jpg" data-overlay-dark="5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">02</h5>
                                        <h1 data-splitting><a href="#0">
                                                ARCHITEKTURA A INŽENÝRSTVÍ
                                            </a></h1>
                                        <p class="mt-10">Od zadání projektů staveb, zajištění legislativy až po kolaudaci.</p>
                                        <a href="#about" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Více</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo $url ?>/src/assets/img/slid/slider3.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">03</h5>
                                        <h1 data-splitting><a href="#0">
                                                VÍCE JAK 30 LET ZKUŠENOSTÍ
                                            </a>
                                        </h1>
                                        <p class="mt-10">Navrhujeme pro Vás již od roku 1990.</p>
                                        <a href="#about" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Více</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider setting -->
            <div class="setone">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top custom-font"></div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="exp-img wow fadeInUp" data-wow-delay=".15s">
                        <div class="img bg-img wow imago" data-background="<?php echo $url ?>/src/assets/img/aboutus.jpg">
                            <div class="since custom-font">
                                <span>OD ROKU</span>
                                <span>1990</span>
                            </div>
                            <div class="years custom-font">
                                <h2>32</h2>
                                <h5>LET ZKUŠENOSTÍ</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 valign">
                    <div class="exp-content wow fadeInUp" data-wow-delay=".15s">
                        <h6 class="sub-title">O NÁS</h6>
                        <h2 class="mb-20">JSME SEHRANÝ TÝM</h2>
                        <p>Společnost Znojmoprojekt byla založena v lednu roku 1990 jako architektonický ateliér. Až do současnosti se úspěšně rozrůstá o nové
                            kolegy, projekty a zkušenosti.</p>
                        <div class="numbers mt-50">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">400+</span></h3>
                                        <h6>DOKONČENÝCH PROJEKTŮ</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">50+</span></h3>
                                        <h6>PARTNERŮ A DODAVATELŮ</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">15</span></h3>
                                        <h6>ČLENŮ TÝMU<br>&nbsp;</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="services section-padding bg-gray">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".15s">PROHLÉDNĚTE SI</h6>
                        <h4 class="wow flipInX" data-wow-delay=".25s">NAŠE SLUŽBY</h4>
                    </div>
                </div>
            </div>
            <div class="row bord-box bg-img wow fadeInUp" data-wow-delay=".15s" data-background="<?php echo $url ?>/src/assets/img/services.jpg">

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">01</h2>
                    <h6 class="mb-20">ARCHITEKTURA</h6>
                    <p>Od návrhu drobné architektury po obchodní centra.</p>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">02</h2>
                    <h6 class="mb-20">INŽENÝRSTVÍ</h6>
                    <p>Zajistíme veškeré zákonné a stavební normy.<br>&nbsp;</p>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">03</h2>
                    <h6 class="mb-20">INTERIÉR</h6>
                    <p>Navrhujeme provozy veškerého charakteru.<br>&nbsp;</p>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">04</h2>
                    <h6 class="mb-20">URBANISMUS</h6>
                    <p>Studie území, rozvoj a zlepšování jeho společenské hodnoty.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start works ==================== -->

    <section class="portfolio section-padding">
        <div class="container-fluid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".15s">NAŠE AKTUÁLNÍ</h6>
                            <h4 class="wow flipInX" data-wow-delay=".25s">PROJEKTY</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- filter links -->
<!--                <div class="filtering text-center col-12 wow fadeInUp" data-wow-delay=".15s">
                    <div class="filter bg-img bg-repeat" data-background="/src/assets/img/line-pattern1.png">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.interior'>Interior</span>
                        <span data-filter='.theaters'>Theaters</span>
                        <span data-filter='.residential'>Residential</span>
                    </div>
                </div>-->

                <!-- gallery -->
                <div class="gallery twsty full-width">

                    <!-- gallery item -->
                    <div class="items theaters mt-50 wow fadeInUp" data-wow-delay=".15s">
                        <div class="item-img bg-img wow imago" data-background="<?php echo $url ?>/src/assets/img/projekty/projekt1.jpg">
                            <a href="<?php echo $url ?>/projekty/navrh-budovy-ldn.php">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Návrh budovy LDN</h5>
                            <span>Znojmo</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items interior mt-50 wow fadeInUp" data-wow-delay=".15s">
                        <div class="item-img bg-img wow imago" data-background="<?php echo $url ?>/src/assets/img/projekty/projekt2.jpg">
                            <a href="<?php echo $url ?>/projekty/obchodni-centrum.php">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Obchodní centrum</h5>
                            <span>Brno-Slatina</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items residential mt-50 wow fadeInUp" data-wow-delay=".15s">
                        <div class="item-img bg-img wow imago" data-background="<?php echo $url ?>/src/assets/img/projekty/projekt3.jpg">
                            <a href="<?php echo $url ?>/projekty/obchodni-dum-a-centrala.php">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Obchodní dům a centrála</h5>
                            <span>Praha-Vypich</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items interior theaters mt-50 wow fadeInUp" data-wow-delay=".15s">
                        <div class="item-img bg-img wow imago" data-background="<?php echo $url ?>/src/assets/img/projekty/projekt4.jpg">
                            <a href="<?php echo $url ?>/projekty/navrh-obchodniho-centra.php">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Návrh obchodního centra</h5>
                            <span>Brno-Mendlovo Náměstí</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->

    <!-- ==================== Start Team ==================== -->

    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tit">
                        <h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".15s">PŘEDSTAVUJEME VÁM</h6>
                        <h3 class="wow flipInX" data-wow-delay=".25s">NÁŠ TÝM</h3>
                        <p class="wow fadeInUp" data-wow-delay=".15s">Náš výkonný tým čítá okolo 15 kolegů, dovolte nám představit alespoň několik z nich.</p>
                        <div class="navs mt-30 wow fadeInUp" data-wow-delay=".15s">
                            <span class="prev">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </span>
                            <span class="next">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-container">
                        <div class="item wow fadeInUp" data-wow-delay=".15s">
                            <div class="img wow imago">
                                <img src="<?php echo $url ?>/src/assets/img/team/ing_arch_radomir_kaman.jpg" alt="Ing. Arch. Radomír Kaman" loading="lazy">
                                <div class="social">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>Ing. Arch. Radomír Kaman</h5>
                                <span>Jednatel / Architekt</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".15s">
                            <div class="img wow imago">
                                <img src="<?php echo $url ?>/src/assets/img/team/ing_arch_jana_kochova.jpg" alt="Ing. Arch. Jana Kochová" loading="lazy">
                                <div class="social">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>Ing. Arch. Jana Kochová</h5>
                                <span>Zástupce jednatele / architektka</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".15s">
                            <div class="img wow imago">
                                <img src="<?php echo $url ?>/src/assets/img/team/ing_jaroslav_ruzicka.jpg" alt="Jaroslav Růžička" loading="lazy">
                                <div class="social">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>Jaroslav Růžička</h5>
                                <span>Zástupce jednatele / projektant</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".15s">
                            <div class="img wow imago">
                                <img src="<?php echo $url ?>/src/assets/img/team/libuse_winterova.jpg" alt="Libuše Winterová" loading="lazy">
                                <div class="social">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <h5>Libuše Winterová</h5>
                                <span>Administrace</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Team ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog-grid section-padding mb-50">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".15s">PRÁVĚ DOKONČENÉ</h6>
                        <h4 class="wow flipInX" data-wow-delay=".25s">NOVINKY</h4>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".15s">
                        <div class="post-img">
                            <div class="img">
                                <img src="<?php echo $url ?>/src/assets/img/blog/blog1.jpg" alt="Rekonstrukce budovy a její dostavba" loading="lazy">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <span>Znojmo</span>
                                <span>2011</span>
                            </div>

                            <h5><a href="<?php echo $url ?>/projekty/rekonstrukce-budovy-a-jeji-dostavba.php">Rekonstrukce budovy a její dostavba</a>
                            </h5>

                            <a href="<?php echo $url ?>/projekty/rekonstrukce-budovy-a-jeji-dostavba.php" class="more">
                                <span class="custom-font">Více</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".1s">
                        <div class="post-img">
                            <div class="img">
                                <img src="<?php echo $url ?>/src/assets/img/blog/blog2.jpg" alt="Obchodní centrum" loading="lazy">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <span>Třinec</span>
                                <span>2013</span>
                            </div>

                            <h5><a href="<?php echo $url ?>/projekty/obchodni-centrum-trinec.php">Obchodní centrum</a>
                            </h5>

                            <a href="<?php echo $url ?>/projekty/obchodni-centrum-trinec.php" class="more">
                                <span class="custom-font">Více</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item wow fadeInUp" data-wow-delay=".25s">
                        <div class="post-img">
                            <div class="img">
                                <img src="<?php echo $url ?>/src/assets/img/blog/blog3.jpg" alt="Rozšíření centrálního hřbitova" loading="lazy">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <span>Znojmo</span>
                                <span>2010</span>
                            </div>

                            <h5><a href="<?php echo $url ?>/projekty/rozsireni-centralniho-hrbitova.php">Rozšíření centrálního hřbitova</a></h5>

                            <a href="<?php echo $url ?>/projekty/rozsireni-centralniho-hrbitova.php" class="more">
                                <span class="custom-font">Více</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->



    <!-- ==================== Start contact ==================== -->

    <section class="contact cont-map">
        <!--<div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 contact-form wow fadeInDown" data-wow-delay=".15s">
                    <form id="contact-form" method="post" action="contact.php">
                        <div class="section-head">
                            <h6 class="custom-font">MÁTE DOTAZY?</h6>
                            <h4>NAPIŠTE NÁM</h4>
                        </div>

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Jméno" required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="E-mail"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Zpráva" rows="4"
                                    required="required"></textarea>
                            </div>

                            <button type="submit" class="btn-curve btn-color"><span>ODESLAT</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
        <div class="contact-map">
            <div class="map" id="ieatmaps"></div>
        </div>
        <div class="bg-img" data-background="<?php echo $url ?>/src/assets/img/footer.jpg"></div>
    </section>

    <!-- ==================== End contact ==================== -->



<?php require_once 'include/footer.php' ?>

<?php require_once 'include/footer-base.php' ?>