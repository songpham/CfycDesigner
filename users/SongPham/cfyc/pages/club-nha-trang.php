
<div class="container-fluid page club-page nha-trang-club-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>

    <!-- TOP BANNER -->
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?php echo LANG_CLUB_BIEN_HOA_BANNER_TITLE ?></legend>
                <hr/>
                <span>
                    <?php echo LANG_CLUB_BIEN_HOA_BANNER_SUB_TITLE ?>
                </span>
                <div class="red-btn">
                    <div class="red-btn-inline">
                        <a class="cta" href="<?php echo USER_BASE_URL ?>/vip-members<?php echo getSuffix('lang=' . $LANG) ?>" title="Discover Cali Dance"> <?php echo LANG_CLUB_BIEN_HOA_BANNER_TEXT_BUTTON ?></a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <!-- TOP BANNER -->

    <div class="whitespace-2x"></div>
    <div class="row text-center cyc"><?php echo LANG_CLUBS_CHOOSE_CLUB_TITLE ?></div>
    <div class="whitespace"></div>

    <!-- CLUB NAME -->
    <div class="quan quan-11 row block" style="display: block;">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_BIEN_HOA_CLUB_1_TITLE_TEXT ?></div>
        </div>
    </div>
    <!-- END CLUB NAME -->

    <div class="row text-center down-icon"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></div>


    <!-- CLB BIEN HOA -->
    <div class="row club-wrapper">

        <div class="quan" style='display:block;'>

            <!-- SLIDESHOW -->
            <div class="slideshow">
                                <div id="slideshow-1" class="carousel slide desktop" data-ride="carousel">
                    <!-- Wrapper for slides -->


                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/desktop/bienhoa/club1/1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/desktop/bienhoa/club1/2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/desktop/bienhoa/club1/3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/desktop/bienhoa/club1/4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="carousel-caption">
                            <?php echo LANG_CLUB_HCM_CLUB_1_CAPTION_1 ?>
                        </div>
                    </div>
                    
                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-1" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/desktop/bienhoa/club1/1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/desktop/bienhoa/club1/2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/desktop/bienhoa/club1/3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/desktop/bienhoa/club1/4.jpg" alt=""></div>
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
                <!-- mobile -->
                 <div id="slideshow-1-m" class="carousel slide mobile" data-ride="carousel">
                    <!-- Wrapper for slides -->


                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/mobile/bienhoa/club1/1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/mobile/bienhoa/club1/2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/mobile/bienhoa/club1/3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/mobile/bienhoa/club1/4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="carousel-caption">
                            <?php echo LANG_CLUB_HCM_CLUB_1_CAPTION_1 ?>
                        </div>
                    </div>
                    
                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-1-m" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/mobile/bienhoa/club1/1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1-m" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/mobile/bienhoa/club1/2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1-m" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/mobile/bienhoa/club1/3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-1-m" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/mobile/bienhoa/club1/4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-1-m" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-1-m" role="button" data-slide="next">
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
                        <?php echo LANG_CLUB_BIEN_HOA_CLUB_1_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6587.933688713718!2d106.82662276918275!3d10.947593725492515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174deae6aaa1e59%3A0xf1828e61b6ca5b58!2zVGhlIFBlZ2FzdXMgUGxhemEsIDUzLTU1IFbDtSBUaOG7iyBTw6F1LCBRdXnhur90IFRo4bqvbmcsIHRwLiBCacOqbiBIw7JhLCDEkOG7k25nIE5haSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1438677157785" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="<?php echo USER_BASE_URL ?>/vip-members<?php echo getSuffix('lang=' . $LANG) ?>"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>


    </div>
    <!-- END CLB BIEN HOA-->

    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>

<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/club.js"></script>