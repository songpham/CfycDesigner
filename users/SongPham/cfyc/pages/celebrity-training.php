
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
                        <a class="cta" href="#form" title="Discover Cali Dance"> <?php echo LANG_CELEBRITY_TRAINING_BANNER_TEXT_BUTTON ?></a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <!-- END GALLERY -->

    <div class="white-space-2x"></div>

    <!-- ABOUT CELEBRITY TRANINING -->
    <div class="row container-page">

        <div class="row block about-block row-centered">
                 <div class="strike"><h2><?php echo LANG_CELEBRITY_TRAINING_BLOCK_1_MOBILE_TITLE ?></div>
            <div class="col-md-5 text col-centered">
                <?php echo LANG_CELEBRITY_TRAINING_BLOCK_1_CONTENT ?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-centered">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v7lm-Lg3mG4"></iframe>
                </div>            
            </div>
        </div>

    </div>
    <!-- END ABOUT CELEBRITY TRAINING -->

    <div class="white-space-2x"></div>

    <!-- HOW DOES PT WORK ? -->
    <div class="row container-page">

        <div class="row block how-block row-centered">
                <div class="strike"><h2><?php echo LANG_CELEBRITY_TRAINING_BLOCK_2_TITLE ?></h2></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-centered">
				<?php echo LANG_CELEBRITY_TRAINING_BLOCK_2_CONTENT ?>
            </div>
            <div class='col-md-5 col-centered'><img src="<?php echo USER_BASE_URL . "/img/celebrity-training/how-1.jpg" ?>" width='100%'></div>
            <div class='col-md-5 col-centered'><img src="<?php echo USER_BASE_URL . "/img/celebrity-training/how-2.jpg" ?>" width='100%'></div>
        </div>

    </div>
    <!-- END HOW DOES PT WORK ? -->

    <div class="white-space-2x"></div>

    <!-- MID BANNER -->
    <div class="row mid-banner">
        <div class="caption"><?php echo LANG_CELEBRITY_TRAINING_MID_BANNER_CAPTION ?></div>
    </div>
    <!-- END MID BANNER -->

    <div class="white-space-2x"></div>
    <div class="row container-page">
        <div class="row block">
                 <div class="strike"><h2><?php echo LANG_CELEBRITY_TRAINING_BLOCK_3_TITLE ?></h2></div>
        </div>
    </div>

    <div class="trainers container-page">
        <center>You have the potential, we can help you reach it.</center>
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
	 <div class="clearfix"></div>
	<div class="container-page">
		<div class="col-md-6 col-xs-12">
			<div class="white-space-2x"></div>
			<h2 class="vid_title"><?php echo LANG_CELEBRITY_TRAINING_VIDEO_2_HOANG_MY ?></h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dojjgGvrEvQ"></iframe>
                </div>            
		</div>
		<div class="col-md-6 col-xs-12">
			<div class="white-space-2x"></div>
			<h2 class="vid_title"><?php echo LANG_CELEBRITY_TRAINING_VIDEO_3_HO_VINH_KHOA ?></h2>
             <div class="embed-responsive embed-responsive-16by9">
                 <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nyN60HDEyCQ"></iframe>
             </div>            
		</div>
	</div>


    <div class="white-space-2x"></div>

    <!-- SUCCESS STORIES -->
    <div class='row container-page' style='display: none;'>

        <div class="row block success-story-block">
            <div class="block-title">
                 <div class="strike"><h2>success stories</h2></div>
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
                            <h2 class="booktitle"><?php echo LANG_CELEBRITY_TRAINING_BOTTOM_BOX_TITLE ?></h2>
                            <h3 class="visit_benefit">

                                <?php echo LANG_CELEBRITY_TRAINING_BOTTOM_BENEFITS ?>
	                            </h3>
	                 <div id="signUp_form">
		                <?php if ($LANG == 'vn') { ?>
		                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=15197805&u=kKTV"></script>
		                <?php } else if ($LANG == 'en') { ?>
		                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=15197705&u=kKTV"></script>
		                <?php } ?>
					</div>
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
