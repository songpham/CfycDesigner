<div class="container-fluid page club-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>

    <!-- TOP BANNER -->
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?php echo LANG_CLUB_HCM_BANNER_TITLE ?></legend>
                <hr/>
                <span>
                    <?php echo LANG_CLUB_HCM_BANNER_SUB_TITLE ?>
                </span>
                <div class="red-btn">
                    <div class="red-btn-inline">
                        <a class="cta" href="<?php echo USER_BASE_URL ?>/vip-members<?php echo getSuffix('lang=' . $LANG) ?>" title="Discover Cali Dance"> <?php echo LANG_CLUB_HCM_BANNER_TEXT_BUTTON ?></a>
                    </div>
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
            <div class="title-text"><?php echo LANG_CLUB_HCM_CLUB_1_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan quan-tan-binh row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HCM_CLUB_2_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan quan-4 row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HCM_CLUB_3_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan quan-5 row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HCM_CLUB_4_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan quan-1 row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HCM_CLUB_5_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan quan-7 row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HCM_CLUB_6_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan quan-thu-duc row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HCM_CLUB_7_TITLE_TEXT ?></div>
        </div>
    </div>

    <div class="quan crescent row block">
        <div class='block-title'>
            <div class="title-text"><?php echo LANG_CLUB_HCM_CLUB_8_TITLE_TEXT ?></div>
        </div>
    </div>
    <!-- END CLUB NAME -->


    <div class="row text-center down-icon"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></div>


    <div class="row club-wrapper">


        <!-- CLUB LIST -->
        <div class="club-list">
            <div class="club-list-inline">
                <ul class="nav navbar-nav navbar-center">
                    <li class="active"><a href="quan-11"><?php echo LANG_CLUB_HCM_CLUB_1 ?></a></li>
                    <li><a href="quan-tan-binh"><?php echo LANG_CLUB_HCM_CLUB_2 ?></a></li>
                    <li><a href="quan-4"><?php echo LANG_CLUB_HCM_CLUB_3 ?></a></li>
                    <li><a href="quan-5"><?php echo LANG_CLUB_HCM_CLUB_4 ?></a></li>
                    <li><a href="quan-1"><?php echo LANG_CLUB_HCM_CLUB_5 ?></a></li>
                    <li><a href="quan-7"><?php echo LANG_CLUB_HCM_CLUB_6 ?></a></li>
                    <li><a href="quan-thu-duc"><?php echo LANG_CLUB_HCM_CLUB_7 ?></a></li>
                    <li><a href="crescent"><?php echo LANG_CLUB_HCM_CLUB_8 ?></a></li>
                </ul>
            </div>
        </div>
        <!-- END CLUB LIST -->

        <!-- CLUB LIST MOBILE -->
        <div class="btn-group club-list-mobile">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
                Choose your club <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="quan-11"><?php echo LANG_CLUB_HCM_CLUB_1 ?></a></li>
                <li><a href="quan-tan-binh"><?php echo LANG_CLUB_HCM_CLUB_2 ?></a></li>
                <li><a href="quan-4"><?php echo LANG_CLUB_HCM_CLUB_3 ?></a></li>
                <li><a href="quan-5"><?php echo LANG_CLUB_HCM_CLUB_4 ?></a></li>
                <li><a href="quan-1"><?php echo LANG_CLUB_HCM_CLUB_5 ?></a></li>
                <li><a href="quan-7"><?php echo LANG_CLUB_HCM_CLUB_6 ?></a></li>
                <li><a href="quan-thu-duc"><?php echo LANG_CLUB_HCM_CLUB_7 ?></a></li>
                <li><a href="crescent"><?php echo LANG_CLUB_HCM_CLUB_8 ?></a></li>
            </ul>
        </div>
        <!-- END CLUB LIST MOBILE -->

        <!-- QUAN 11 -->
        <div class="quan quan-11" style='display:block;'>


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
                            <?php echo LANG_CLUB_HCM_CLUB_1_CAPTION_1 ?>
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
                        <?php echo LANG_CLUB_HCM_CLUB_1_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15678.438388097391!2d106.6557978!3d10.764541300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eeb7f7d2d7d%3A0x17921408a3516ecd!2sTrung+T%C3%A2m+Tm+Parkson+Flemington!5e0!3m2!1svi!2s!4v1438674715037" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN 11 -->

        <!-- QUAN TAN BINH -->
        <div class="quan quan-tan-binh">
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
                            <?php echo LANG_CLUB_HCM_CLUB_2_CAPTION_1 ?>
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
            <div class="information">
                <div class="container-page">
                    <div class="col-md-6">

                        <?php echo LANG_CLUB_HCM_CLUB_2_CONTACT_INFO ?>

                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1354654249153!2d106.6530784!3d10.8009352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752937dffbd64f%3A0x9518e14a827a15d0!2sPico+Plaza!5e0!3m2!1svi!2s!4v1438674815019" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN TAN BINH -->

        <!-- QUAN 4 -->
        <div class="quan quan-4">
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
                            <?php echo LANG_CLUB_HCM_CLUB_3_CAPTION_1 ?>
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
            <div class="information">
                <div class="container-page">
                    <div class="col-md-6">
                        <?php echo LANG_CLUB_HCM_CLUB_3_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2330.5943875527837!2d106.70670142821326!3d10.76705255058661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xf063e9a80a8f62c8!2sCalifornia+at+the+Waterfront!5e0!3m2!1svi!2s!4v1438674888476" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN 4 -->

        <!-- QUAN 5 -->
        <div class="quan quan-5">
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
                            <?php echo LANG_CLUB_HCM_CLUB_4_CAPTION_1 ?>
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
            <div class="information">
                <div class="container-page">
                    <div class="col-md-6">
                        <?php echo LANG_CLUB_HCM_CLUB_4_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.8607728530853!2d106.66323469694977!3d10.75593046571943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ef05f38e56b%3A0xd3278a6de6e112af!2zUGFya3NvbiBIdW5nIFZ1b25nIFBsYXphLCAxMjYgSMO5bmcgVsawxqFuZywgcGjGsOG7nW5nIDQsIFF14bqtbiA1LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1438674936350" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN 5 -->

        <!-- QUAN 1 -->
        <div class="quan quan-1">
            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-5" class="carousel slide" data-ride="carousel">
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
                            <?php echo LANG_CLUB_HCM_CLUB_5_CAPTION_1 ?>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-5" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-5" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-5" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-5" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-5" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-5" role="button" data-slide="next">
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
                        <?php echo LANG_CLUB_HCM_CLUB_5_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.521449724753!2d106.6973091!3d10.771316599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3f1bfc912b%3A0xc26340977288bfe6!2sQueen+Ann+Building!5e0!3m2!1svi!2s!4v1438674987562" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN 1 -->

        <!-- QUAN 7 -->
        <div class="quan quan-7">
            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-6" class="carousel slide" data-ride="carousel">
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
                            <?php echo LANG_CLUB_HCM_CLUB_6_CAPTION_1 ?>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-6" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-6" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-6" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-6" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-6" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-6" role="button" data-slide="next">
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
                        <?php echo LANG_CLUB_HCM_CLUB_6_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9323.57564012172!2d106.70435105967451!3d10.728261621429661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xeaae21e17624cdb5!2zVHJ1bmcgVMOibSBUaMawxqFuZyBN4bqhaSBTQyBWaXZvQ2l0eQ!5e0!3m2!1svi!2s!4v1438675092654" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN 7 -->

        <!-- QUAN THU DUC -->
        <div class="quan quan-thu-duc">
            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-7" class="carousel slide" data-ride="carousel">
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
                            <?php echo LANG_CLUB_HCM_CLUB_7_CAPTION_1 ?>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-7" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-7" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-7" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-7" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-7" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-7" role="button" data-slide="next">
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
                        <?php echo LANG_CLUB_HCM_CLUB_7_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.493652453947!2d106.765227!3d10.850007999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527a1f1174155%3A0x8f8d0124542f3ca8!2zMjE2IFbDtSBWxINuIE5nw6JuLCBWaW5jb20gVGjhu6cgxJDhu6ljLCBCw6xuaCBUaOG7jSwgVGjhu6cgxJDhu6ljLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1438675160760" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_BOOK_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END QUAN THU DUC  -->

        <!-- CRESCENT -->
        <div class="quan crescent">
            <!-- SLIDESHOW -->
            <div class="slideshow">
                <div id="slideshow-8" class="carousel slide" data-ride="carousel">
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
                            <?php echo LANG_CLUB_HCM_CLUB_8_CAPTION_1 ?>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="container-page">
                        <div class="carousel-indicators thumbs">
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box active" data-target="#slideshow-8" data-slide-to="0">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-1.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-8" data-slide-to="1">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-2.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-8" data-slide-to="2">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-3.jpg" alt=""></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3 text-center box" data-target="#slideshow-8" data-slide-to="3">
                                <div class="box-inner"><img src="<?php echo USER_BASE_URL ?>/img/club/slide-4.jpg" alt=""></div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#slideshow-8" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#slideshow-8" role="button" data-slide="next">
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
                        <?php echo LANG_CLUB_HCM_CLUB_8_CONTACT_INFO ?>
                    </div>

                    <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2771.915330155998!2d106.7190059746404!3d10.728293474709872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xb6c098e537ce0abe!2sThe+Crescent+Mall!5e0!3m2!1svi!2s!4v1438676619630" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <div class="col-md-12 see-more-btn"><a href="#"><?php echo LANG_CLUBS_WEBSITE_BTN ?></a></div>
                </div>
            </div>
            <!-- END INFOMATION -->

        </div>
        <!-- END CRESCENT  -->

    </div>


    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>

<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/club.js"></script>