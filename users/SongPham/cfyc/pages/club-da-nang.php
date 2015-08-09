
<div class="container-fluid page club-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>

    <!-- TOP BANNER -->
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?php echo LANG_CLUB_DA_NANG_BANNER_TITLE ?></legend>
                <hr/>
                <span>
                    <?php echo LANG_CLUB_DA_NANG_BANNER_SUB_TITLE ?>
                </span>
                <div class="red-btn">
                    <a class="cta" href="#" title="Discover Cali Dance"> <?php echo LANG_CLUB_DA_NANG_BANNER_TEXT_BUTTON ?></a>
                </div>
            </fieldset>
        </div>
    </div>
    <!-- TOP BANNER -->

    <div class="whitespace-2x"></div>
    <div class="row text-center cyc">CHOOSE YOUR CLUB</div>
    <div class="whitespace"></div>

    <!-- CLUB NAME -->
    <div class="quan quan-11 row block" style="display: block;">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_DA_NANG_CLUB_1_TITLE_TEXT ?></div>
        </div>
    </div>
    <!-- END CLUB NAME -->

    <div class="row text-center down-icon"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></div>


    <!-- CLB DA NANG -->
    <div class="row club-wrapper">

        <div class="quan" style='display:block;'>

            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-1" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->


                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="carousel-caption">
                                <?php echo LANG_CLUB_DA_NANG_CLUB_1_CAPTION_1 ?>
                            </div>
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                <?php echo LANG_CLUB_DA_NANG_CLUB_1_CAPTION_2 ?>
                            </div>
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                <?php echo LANG_CLUB_DA_NANG_CLUB_1_CAPTION_3 ?>
                            </div>
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <div class="carousel-caption">
                                <?php echo LANG_CLUB_DA_NANG_CLUB_1_CAPTION_4 ?>
                            </div>
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-1" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-1" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-1" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SLIDESHOW -->


            <!-- INFOMATION -->
            <div class="information">
                <div class="container-page">
                    <div class="col-md-6">
                        <?php echo LANG_CLUB_DA_NANG_CLUB_1_CONTACT_INFO ?>
                    </div>

                <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1092610510605!2d108.21157900000001!3d16.059819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b5d1b05c31%3A0x5d8a0c90d7b2610d!2zMTU1IE5ndXnhu4VuIFbEg24gTGluaCwgVsSpbmggVHJ1bmcsIFEuIFRoYW5oIEtow6osIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1438677225258" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUB_DA_NANG_BOOK_BUTTON ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>


    </div>
    <!-- END CLB DA NANG-->

    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>

<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/club.js"></script>