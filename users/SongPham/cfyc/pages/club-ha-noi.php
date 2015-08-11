
<div class="container-fluid page club-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>

    <!-- TOP BANNER -->
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?php echo LANG_CLUB_HA_NOI_BANNER_TITLE ?></legend>
                <hr/>
                <span>
                    <?php echo LANG_CLUB_HA_NOI_BANNER_SUB_TITLE ?>
                </span>
                <div class="red-btn">
                    <div class="red-btn-inline">
                        <a class="cta" href="<?php echo USER_BASE_URL ?>/vip-members<?php echo getSuffix('lang=' . $LANG) ?>" title="Discover Cali Dance"> <?php echo LANG_CLUB_HA_NOI_BANNER_TEXT_BUTTON ?></a>
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
    <div class="quan quan-hoan-kiem row block" style="display: block;">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HA_NOI_CLUB_1_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan quan-dong-da row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HA_NOI_CLUB_2_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan quan-hai-ba-trung row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HA_NOI_CLUB_3_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan royal-city row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HA_NOI_CLUB_4_TITLE_TEXT ?></div>
        </div>
    </div>
    <!-- END CLUB NAME -->

    <div class="row text-center down-icon"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></div>

    <div class="row club-wrapper">

        <!-- CLUB LIST -->
        <div class="club-list">
            <div class="club-list-inline">
                <ul class="nav navbar-nav navbar-center">
                    <li class="active"><a href="quan-hoan-kiem"><?php echo LANG_CLUB_HA_NOI_CLUB_1 ?></a></li>
                    <li><a href="quan-dong-da"><?php echo LANG_CLUB_HA_NOI_CLUB_2 ?></a></li>
                    <li><a href="quan-hai-ba-trung"><?php echo LANG_CLUB_HA_NOI_CLUB_3 ?></a></li>
                    <li><a href="royal-city"><?php echo LANG_CLUB_HA_NOI_CLUB_4 ?></a></li>
                </ul>
            </div>
        </div>
        <!-- END CLUB LIST -->

        <!-- CLUB LIST MOBILE -->
        <div class="btn-group club-list-mobile">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
                <?php echo LANG_CLUBS_CHOOSE_CLUB_TITLE ?> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="quan-hoan-kiem"><?php echo LANG_CLUB_HA_NOI_CLUB_1 ?></a></li>
                <li><a href="quan-dong-da"><?php echo LANG_CLUB_HA_NOI_CLUB_2 ?></a></li>
                <li><a href="quan-hai-ba-trung"><?php echo LANG_CLUB_HA_NOI_CLUB_3 ?></a></li>
                <li><a href="royal-city"><?php echo LANG_CLUB_HA_NOI_CLUB_4 ?></a></li>
            </ul>
        </div>
        <!-- END CLUB LIST MOBILE -->


        <!-- QUAN HOAN KIEM -->
        <div class="quan quan-hoan-kiem" style='display:block;'>

            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-1" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->


                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="carousel-caption">
                            <?php echo LANG_CLUB_HA_NOI_CLUB_1_CAPTION_1 ?>
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
            <div class="row information">
                <div class="container-page">
                    <div class="col-md-6">
                        <?php echo LANG_CLUB_HA_NOI_CLUB_1_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1806790187384!2d105.84821529999999!3d21.0254554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab93cd9ccb09%3A0x79549a05fefac023!2sCapital+Building!5e0!3m2!1svi!2s!4v1438676815323" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN HOAN KIEM -->

        <!-- QUAN DONG DA -->
        <div class="quan quan-dong-da">
            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-2" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->


                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="carousel-caption">
                            <?php echo LANG_CLUB_HA_NOI_CLUB_2_CAPTION_1 ?>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-2" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-2" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-2" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-2" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-2" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SLIDESHOW -->


            <!-- INFOMATION -->
            <div class="row information">
                <div class="container-page">
                    <div class="col-md-6">
                        <?php echo LANG_CLUB_HA_NOI_CLUB_2_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4995423017585!2d105.8114538!3d21.012688999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab621b0085f1%3A0xff9d7e418f43fd75!2sSky+City+Tower!5e0!3m2!1svi!2s!4v1438676862594" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN DONG DA -->

        <!-- QUAN HAI BA TRUNG -->
        <div class="quan quan-hai-ba-trung">
            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-3" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->


                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="carousel-caption">
                            <?php echo LANG_CLUB_HA_NOI_CLUB_3_CAPTION_1 ?>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-3" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-3" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-3" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-3" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-3" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-3" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SLIDESHOW -->


            <!-- INFOMATION -->
            <div class="row information">
                <div class="container-page">
                    <div class="col-md-6">
                        <?php echo LANG_CLUB_HA_NOI_CLUB_3_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8641659557716!2d105.86798610000001!3d20.998081400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac0445924b81%3A0xb36557897b2b794!2sCalifornia+Fitness+%26+Yoga+Qu%E1%BA%ADn+Hai+B%C3%A0+Tr%C6%B0ng!5e0!3m2!1svi!2s!4v1438676913177" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN HAI BA TRUNG -->

        <!-- QUAN ROYAL CITY -->
        <div class="quan royal-city">
            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-4" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->


                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="carousel-caption">
                            <?php echo LANG_CLUB_HA_NOI_CLUB_4_CAPTION_1 ?>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-4" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-4" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-4" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-4" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-4" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-4" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SLIDESHOW -->


            <!-- INFOMATION -->
            <div class="row information">
                <div class="container-page">
                    <div class="col-md-6">
                        <?php echo LANG_CLUB_HA_NOI_CLUB_4_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4429.46528382591!2d105.81622754092115!3d21.003798912118363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9b159057b7%3A0xd70cb425e4030a28!2sPlatinum+Cineplex!5e0!3m2!1svi!2s!4v1438676993340" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_WEBSITE_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END ROYAL CITY -->

    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>

<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/club.js"></script>