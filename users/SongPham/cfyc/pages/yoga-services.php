<div class="container-fluid page <?=LANG_YOGA_PAGE_NAME?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?=LANG_YOGA_BANNER_TEXT_CONTENT?></legend>
                <hr/>
                <span>
                    <?=LANG_YOGA_BANNER_TEXT_SMALL?>
                </span>
                <div class="red-btn">
                    <a class="cta" href="javascript:animateTo($('.contactform'))" title="<?=LANG_YOGA_BANNER_TEXT_CTA?>"> <?=LANG_YOGA_BANNER_TEXT_CTA?></a>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row">
            <div class="strike"><h2><?=LANG_YOGA_CALIDANCE?></h2></div>
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <?=LANG_YOGA_CALIDANCE_CONTENT?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" height="200" src="<?=LANG_YOGA_YOUTUBE?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="benefits">
        <div class="strike"><h2><?=LANG_YOGA_BENEFIT?></h2></div>
        <?=LANG_YOGA_BENEFIT_CONTENT?>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_YOGA_BENEFIT?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/benefit1.jpg" alt="<?=LANG_YOGA_BENEFIT?>">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_YOGA_BENEFIT?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/benefit2.jpg" alt="<?=LANG_YOGA_BENEFIT?>">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="discover row">
        <div class="strike"><h2><?=LANG_YOGA_DISCOVER?></h2></div>
        <!-- Nav tabs -->
        <div class="dropdown visible-xs">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose A Class
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li role="presentation">
                    <a href="#<?=LANG_YOGA_DISCOVER_TAB1_ID?>" aria-controls="<?=LANG_YOGA_DISCOVER_TAB1_ID?>" role="tab" data-toggle="tab"><?=LANG_YOGA_DISCOVER_TAB1_TITLE?></a>
                </li>
                <li role="presentation">
                    <a href="#<?=LANG_YOGA_DISCOVER_TAB2_ID?>" aria-controls="<?=LANG_YOGA_DISCOVER_TAB2_ID?>" role="tab" data-toggle="tab"><?=LANG_YOGA_DISCOVER_TAB2_TITLE?></a>
                </li>
                <li role="presentation">
                    <a href="#<?=LANG_YOGA_DISCOVER_TAB3_ID?>" aria-controls="<?=LANG_YOGA_DISCOVER_TAB3_ID?>" role="tab" data-toggle="tab"><?=LANG_YOGA_DISCOVER_TAB3_TITLE?></a>
                </li>
                <li role="presentation">
                    <a href="#<?=LANG_YOGA_DISCOVER_TAB4_ID?>" aria-controls="<?=LANG_YOGA_DISCOVER_TAB4_ID?>" role="tab" data-toggle="tab"><?=LANG_YOGA_DISCOVER_TAB4_TITLE?></a>
                </li>
            </ul>
        </div>

        <ul class="nav nav-tabs hidden-xs" role="tablist">
            <li role="presentation" class="active">
                <a href="#<?=LANG_YOGA_DISCOVER_TAB1_ID?>" aria-controls="<?=LANG_YOGA_DISCOVER_TAB1_ID?>" role="tab" data-toggle="tab"><?=LANG_YOGA_DISCOVER_TAB1_TITLE?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_YOGA_DISCOVER_TAB2_ID?>" aria-controls="<?=LANG_YOGA_DISCOVER_TAB2_ID?>" role="tab" data-toggle="tab"><?=LANG_YOGA_DISCOVER_TAB2_TITLE?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_YOGA_DISCOVER_TAB3_ID?>" aria-controls="<?=LANG_YOGA_DISCOVER_TAB3_ID?>" role="tab" data-toggle="tab"><?=LANG_YOGA_DISCOVER_TAB3_TITLE?></a>
            </li>
            <li role="presentation">
                <a href="#<?=LANG_YOGA_DISCOVER_TAB4_ID?>" aria-controls="<?=LANG_YOGA_DISCOVER_TAB4_ID?>" role="tab" data-toggle="tab"><?=LANG_YOGA_DISCOVER_TAB4_TITLE?></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="<?=LANG_YOGA_DISCOVER_TAB1_ID?>">
                <div class="container"><?=LANG_YOGA_DISCOVER_TAB1_CONTENT?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_YOGA_DISCOVER_TAB2_ID?>">
                <div class="container"><?=LANG_YOGA_DISCOVER_TAB2_CONTENT?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_YOGA_DISCOVER_TAB3_ID?>">
                <div class="container"><?=LANG_YOGA_DISCOVER_TAB3_CONTENT?></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="<?=LANG_YOGA_DISCOVER_TAB4_ID?>">
                <div class="container"><?=LANG_YOGA_DISCOVER_TAB4_CONTENT?></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="school row">
        <div class="strike"><h2><?=LANG_YOGA_ENVIRONMENT?></h2></div>
        <div id="carousel-example-generic-clubs" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic-clubs" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic-clubs" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic-clubs" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic-clubs" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/school.jpg" alt="<?=LANG_YOGA_ENVIRONMENT?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/school.jpg" alt="<?=LANG_YOGA_ENVIRONMENT?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/school.jpg" alt="<?=LANG_YOGA_ENVIRONMENT?>">
                </div>
                <div class="item">
                    <img src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/school.jpg" alt="<?=LANG_YOGA_ENVIRONMENT?>">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <div class="strike"><h2><?=LANG_YOGA_TRAINER_TITLE?></h2></div>
        <center><?=LANG_YOGA_TRAINER_SUB?></center>
        <div class="tab-content teacher-detail">
            <div role="tabpanel" class="tab-pane active" id="hcmc">
                <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#<?=LANG_YOGA_TRAINER1_ID?>" aria-controls="<?=LANG_YOGA_TRAINER1_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive img-circle"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/trainer-avatar-4.png" alt="<?=LANG_YOGA_TRAINER1_TITLE?>">
                            <span><?=LANG_YOGA_TRAINER1_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_YOGA_TRAINER2_ID?>" aria-controls="<?=LANG_YOGA_TRAINER2_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive img-circle"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/trainer-avatar-3.png" alt="<?=LANG_YOGA_TRAINER2_TITLE?>">
                            <span><?=LANG_YOGA_TRAINER2_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_YOGA_TRAINER3_ID?>" aria-controls="<?=LANG_YOGA_TRAINER3_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive img-circle"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/trainer-avatar-2.png" alt="<?=LANG_YOGA_TRAINER3_TITLE?>">
                            <span><?=LANG_YOGA_TRAINER3_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_YOGA_TRAINER4_ID?>" aria-controls="<?=LANG_YOGA_TRAINER4_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive img-circle"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/trainer-avatar-1.png" alt="<?=LANG_YOGA_TRAINER4_TITLE?>">
                            <span><?=LANG_YOGA_TRAINER4_TITLE?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div role="tabpanel" class="tab-pane active" id="<?=LANG_YOGA_TRAINER1_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/trainer-1.jpg" alt="<?=LANG_YOGA_TRAINER1_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_YOGA_TRAINER1_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_YOGA_TRAINER2_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/sriram.jpg" alt="<?=LANG_YOGA_TRAINER2_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_YOGA_TRAINER2_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_YOGA_TRAINER3_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/virat.jpg" alt="<?=LANG_YOGA_TRAINER3_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_YOGA_TRAINER3_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_YOGA_TRAINER4_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/aj.jpg" alt="<?=LANG_YOGA_TRAINER4_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_YOGA_TRAINER4_CONTENT?></div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
    <div class="yogi container">
        <div class="strike"><h2><?php echo LANG_YOGA_YOGI_TITLE ?></h2></div>
        <div class="text-box">
        	<p><?php echo LANG_YOGA_YOGI_CONTENT ?></p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12 firstcol">
            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/yogi-1.jpg" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12 secondcol">
            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/yogi-2.jpg" alt="">
            <br>
            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_YOGA_PAGE_NAME?>/yogi-3.jpg" alt="">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="contactform container">
        <div class="row" id="form">
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h2 class="booktitle"><?=LANG_YOGA_SIGNUP_TITLE?></h2>
                <h3 class="visit_benefit">
                    <?=LANG_YOGA_SIGNUP_CONTENT?>
                </h3>
                 <div id="signUp_form">
	                <?php if ($LANG == 'vn') { ?>
	                <script type="text/javascript" src="http://app.getresponse.com/view_webform.js?wid=10803505&u=kKTV"></script>
	                <?php } else if ($LANG == 'en') { ?>
	                <script type="text/javascript" src="http://app.getresponse.com/view_webform.js?wid=8730505&u=kKTV"></script>
	                <?php } ?>
				</div>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
        </div>
    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
