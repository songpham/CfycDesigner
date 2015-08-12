
<div class="container-fluid page celebrity-trainning-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <!-- GALLERY -->
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?php echo LANG_CELEBRITY_TRAINING_BANNER_TITLE ?></legend>
                <hr/>
                <span>
                    <?php echo LANG_CELEBRITY_TRAINING_BANNER_SUB_TITLE ?>
                </span>
                <div class="red-btn">
                    <div class="red-btn-inline">
                        <a class="cta" href="#" title="Discover Cali Dance"> <?php echo LANG_CELEBRITY_TRAINING_BANNER_TEXT_BUTTON ?></a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <!-- END GALLERY -->

    <div class="white-space-2x"></div>

    <!-- ABOUT CELEBRITY TRANINING -->
    <div class="row container-page">

        <div class="row block about-block">
            <div class='block-title'>
                <div class="title-text"><?php echo LANG_CELEBRITY_TRAINING_BLOCK_1_TITLE ?></div>
            </div>
            <div class="col-md-6 text">
                <?php echo LANG_CELEBRITY_TRAINING_BLOCK_1_CONTENT ?>
            </div>
            <div class="col-md-5 col-md-offset-1 col-xs-12 video">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vgICIwZkPbw"></iframe>
                </div>            
            </div>
        </div>

    </div>
    <!-- END ABOUT CELEBRITY TRAINING -->

    <div class="white-space-2x"></div>

    <!-- HOW DOES PT WORK ? -->
    <div class="row container-page">

        <div class="row block how-block">
            <div class="block-title">
                <div class="title-text"><?php echo LANG_CELEBRITY_TRAINING_BLOCK_2_TITLE ?></div>
            </div>
            <?php echo LANG_CELEBRITY_TRAINING_BLOCK_2_CONTENT ?>
            <div class='col-md-6 left-img'><img src="<?php echo USER_BASE_URL . "/img/celebrity-training/how-1.jpg" ?>" width='100%'></div>
            <div class='col-md-6  right-img'><img src="<?php echo USER_BASE_URL . "/img/celebrity-training/how-2.jpg" ?>" width='100%'></div>
        </div>

    </div>
    <!-- END HOW DOES PT WORK ? -->

    <div class="white-space-2x"></div>


    <div class="trainers container-page">
        <center><?php echo LANG_CELEBRITY_TRAINING_BLOCK_3_TITLE ?></center>
        <div class="tab-content teacher-detail">
            <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                <li role="presentation" class="active">
                    <a href="#trainer1" aria-controls="trainer1" role="tab" data-toggle="tab">
                        <img class="img-responsive"
                             src="<?php echo USER_BASE_URL ?>/img/celebrity-training/<?php echo LANG_CELEBRITY_TRAINING_MEMBER_1_SMALL_IMG ?>" alt="DJ">
                        <span><?php echo LANG_CELEBRITY_TRAINING_MEMBER_1_NAME ?></span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#trainer2" aria-controls="trainer2" role="tab" data-toggle="tab">
                        <img class="img-responsive"
                             src="<?php echo USER_BASE_URL ?>/img/celebrity-training/<?php echo LANG_CELEBRITY_TRAINING_MEMBER_2_SMALL_IMG ?>" alt="DJ">
                        <span><?php echo LANG_CELEBRITY_TRAINING_MEMBER_2_NAME ?></span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#trainer3" aria-controls="trainer3" role="tab" data-toggle="tab">
                        <img class="img-responsive"
                             src="<?php echo USER_BASE_URL ?>/img/celebrity-training/<?php echo LANG_CELEBRITY_TRAINING_MEMBER_3_SMALL_IMG ?>" alt="DJ">
                        <span><?php echo LANG_CELEBRITY_TRAINING_MEMBER_3_NAME ?></span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#trainer4" aria-controls="trainer4" role="tab" data-toggle="tab">
                        <img class="img-responsive"
                             src="<?php echo USER_BASE_URL ?>/img/celebrity-training/<?php echo LANG_CELEBRITY_TRAINING_MEMBER_4_SMALL_IMG ?>" alt="DJ">
                        <span><?php echo LANG_CELEBRITY_TRAINING_MEMBER_4_NAME ?></span>
                    </a>
                </li>
            </ul>
           
            <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div role="tabpanel" class="tab-pane active" id="trainer1">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                        <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/celebrity-training/<?php echo LANG_CELEBRITY_TRAINING_MEMBER_1_BIG_IMG ?>" alt="DJ">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont">
                        <h3><?php echo LANG_CELEBRITY_TRAINING_MEMBER_1_NAME ?></h3>
                        <h4><?php echo LANG_CELEBRITY_TRAINING_MEMBER_1_JOB ?></h4>
                        <p></p>
                        <?php echo LANG_CELEBRITY_TRAINING_MEMBER_1_DESCIPRTION ?>
                    </div>
                </div>
                <div role="tabpane2" class="tab-pane" id="trainer2">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                        <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/celebrity-training/<?php echo LANG_CELEBRITY_TRAINING_MEMBER_2_BIG_IMG ?>" alt="DJ">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont">
                        <h3><?php echo LANG_CELEBRITY_TRAINING_MEMBER_2_NAME ?></h3>
                        <h4><?php echo LANG_CELEBRITY_TRAINING_MEMBER_2_JOB ?></h4>
                        <p></p>
                        <?php echo LANG_CELEBRITY_TRAINING_MEMBER_2_DESCIPRTION ?>
                    </div>
                </div>
                <div role="tabpane3" class="tab-pane" id="trainer3">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                        <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/celebrity-training/<?php echo LANG_CELEBRITY_TRAINING_MEMBER_3_BIG_IMG ?>" alt="DJ">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont">
                        <h3><?php echo LANG_CELEBRITY_TRAINING_MEMBER_3_NAME ?></h3>
                        <h4><?php echo LANG_CELEBRITY_TRAINING_MEMBER_3_JOB ?></h4>
                        <p></p>
                        <?php echo LANG_CELEBRITY_TRAINING_MEMBER_3_DESCIPRTION ?>
                    </div>
                </div>
                <div role="tabpane4" class="tab-pane" id="trainer4">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                        <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/celebrity-training/<?php echo LANG_CELEBRITY_TRAINING_MEMBER_4_BIG_IMG ?>" alt="DJ">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont">
                        <h3><?php echo LANG_CELEBRITY_TRAINING_MEMBER_4_NAME ?></h3>
                        <h4><?php echo LANG_CELEBRITY_TRAINING_MEMBER_4_JOB ?></h4>
                        <p></p>
                        <?php echo LANG_CELEBRITY_TRAINING_MEMBER_4_DESCIPRTION ?>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <div class="white-space-2x"></div>

    <!-- SUCCESS STORIES -->
    <div class='row container-page' style='display: none;'>

        <div class="row block success-story-block">
            <div class="block-title">
                <div class="title-text">success stories</div>
            </div>
            <div class="col-md-12 box">
                <div class="col-md-2 image"><img src="<?php echo USER_BASE_URL ?>/img/celebrity-training/story-1.png" alt=""></div>
                <div class="col-md-10 text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim eleifend porta. Vestibulum vel mi porta, sagittis odio vitae, faucibus odio. Nullam nulla est, efficitur non nisi ac, lacinia gravida diam. Aenean faucibus sapien sit amet gravida consectetur. Cras accumsan auctor porttitor. Vestibulum ut metus ullamcorper nunc cursus fermentum ac non nisi. Nulla dapibus eleifend pulvinar. Aenean sed malesuada tellus.</div>
            </div>
            <div class="col-md-12 box">
                <div class="col-md-2 image"><img src="<?php echo USER_BASE_URL ?>/img/celebrity-training/story-2.png" alt=""></div>
                <div class="col-md-10 text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim eleifend porta. Vestibulum vel mi porta, sagittis odio vitae, faucibus odio. Nullam nulla est, efficitur non nisi ac, lacinia gravida diam. Aenean faucibus sapien sit amet gravida consectetur. Cras accumsan auctor porttitor. Vestibulum ut metus ullamcorper nunc cursus fermentum ac non nisi. Nulla dapibus eleifend pulvinar. Aenean sed malesuada tellus.</div>
            </div>
            <div class="col-md-12 see-more-btn">
                <a href="#">see more</a>
            </div>
        </div>

    </div>
    <!-- END SUCCESS STORIES -->

    <!-- COPYRIGHT -->
    <div class='row'>
        <div class="col-md-12 text-center">
            <div class='row'>
                <div class="hidden-md col-lg-2 hidden-sm hidden-xs text-center"></div>
                <div class="col-md-12 col-lg-8 col-sm-12 col-xs-12 text-center">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <h2 class="booktitle">book a vip visit today</h2>
                            <h3 class="visit_benefit">
                                <span class="title">SIGN UP FOR A FREE VISIT INCLUDING</span><br/><br/>
                                <strong>- EXCLUSIVE TOUR</strong><br/>
                                <span>(Learn about all features, programs and equipment available)</span><br/><br/>
                                <strong>- PT FITNESS CONSULTATION</strong><br/>
                                <span>(Learn more about your body and how to reach your goals with our fitness experts)</span><br/><br/>
                                <strong>- FULL DAY ACCESS</strong><br/>
                                <span>(One day full access pass to experience our clubs and programs)</span><br/><br/>
                                <span>fill in the form and WE WILL CONTACT YOU WITHIN 24 HOURS</span>
                            </h3>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
                    </div>
                </div>
                <div class="hidden-md col-lg-2 hidden-sm hidden-xs text-center"></div>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT -->





    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/celebrity-trainning.js"></script>