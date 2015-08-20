<div class="container-fluid page <?=LANG_KICKFIT_MMA_PAGE_NAME?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?=LANG_KICKFIT_MMA_BANNER_TEXT_CONTENT?></legend>
                <hr/>
                <span>
                    <?=LANG_KICKFIT_MMA_BANNER_TEXT_SMALL?>
                </span>
                <div class="red-btn">
                    <a class="cta" href="javascript:animateTo($('.contactform'))" title="<?=LANG_KICKFIT_MMA_BANNER_TEXT_CTA?>"> <?=LANG_KICKFIT_MMA_BANNER_TEXT_CTA?></a>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row">
            <div class="strike"><h2><?=LANG_KICKFIT_MMA_CALIDANCE?></h2></div>
            <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <?=LANG_KICKFIT_MMA_CALIDANCE_CONTENT?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" height="200" src="<?=LANG_KICKFIT_MMA_YOUTUBE?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="benefits">
        <div class="strike"><h2><?=LANG_KICKFIT_MMA_BENEFIT?></h2></div>
        <?=LANG_KICKFIT_MMA_BENEFIT_CONTENT?>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_KICKFIT_MMA_BENEFIT?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/benefit-1.jpg" alt="<?=LANG_KICKFIT_MMA_BENEFIT?>">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_KICKFIT_MMA_BENEFIT?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/benefit-2.jpg" alt="<?=LANG_KICKFIT_MMA_BENEFIT?>">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="school row">
        <div class="strike"><h2><?=LANG_KICKFIT_MMA_ENVIRONMENT?></h2></div>
        <div id="carousel-example-generic-clubs" class="carousel slide desktop" data-ride="carousel">
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
                            <img src="<?php echo USER_BASE_URL ?>/img/kickfit-mma-services/perfect-environment/1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/kickfit-mma-services/perfect-environment/2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/kickfit-mma-services/perfect-environment/3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/kickfit-mma-services/perfect-environment/4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
           </div>
        </div>
        <div id="carousel-example-generic-clubs-m" class="carousel slide mobile" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic-clubs-m" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic-clubs-m" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic-clubs-m" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic-clubs-m" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
             <div class="carousel-inner" role="listbox">
                  <div class="item active">
                            <img src="<?php echo USER_BASE_URL ?>/img/kickfit-mma-services/perfect-environment/m-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                 </div>
                 <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/kickfit-mma-services/perfect-environment/m-2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                 </div>
                 <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/kickfit-mma-services/perfect-environment/m-3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                 </div>
                  <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/kickfit-mma-services/perfect-environment/m-4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                 </div>

             </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <div class="strike"><h2><?=LANG_KICKFIT_MMA_TRAINER_TITLE?></h2></div>
        <center><?=LANG_KICKFIT_MMA_TRAINER_SUB?></center>
        <div class="tab-content teacher-detail">
            <div role="tabpanel" class="tab-pane active" id="hcmc">
                <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#<?=LANG_KICKFIT_MMA_TRAINER1_ID?>" aria-controls="<?=LANG_KICKFIT_MMA_TRAINER1_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/lee.png" alt="<?=LANG_KICKFIT_MMA_TRAINER1_TITLE?>">
                            <span><?=LANG_KICKFIT_MMA_TRAINER1_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_KICKFIT_MMA_TRAINER2_ID?>" aria-controls="<?=LANG_KICKFIT_MMA_TRAINER2_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/tom.png" alt="<?=LANG_KICKFIT_MMA_TRAINER2_TITLE?>">
                            <span><?=LANG_KICKFIT_MMA_TRAINER2_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_KICKFIT_MMA_TRAINER3_ID?>" aria-controls="<?=LANG_KICKFIT_MMA_TRAINER3_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/will.png" alt="<?=LANG_KICKFIT_MMA_TRAINER3_TITLE?>">
                            <span><?=LANG_KICKFIT_MMA_TRAINER3_TITLE?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_KICKFIT_MMA_TRAINER4_ID?>" aria-controls="<?=LANG_KICKFIT_MMA_TRAINER4_ID?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/rio.png" alt="<?=LANG_KICKFIT_MMA_TRAINER4_TITLE?>">
                            <span><?=LANG_KICKFIT_MMA_TRAINER4_TITLE?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div role="tabpanel" class="tab-pane active" id="<?=LANG_KICKFIT_MMA_TRAINER1_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/lee.jpg" alt="<?=LANG_KICKFIT_MMA_TRAINER1_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_KICKFIT_MMA_TRAINER1_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_KICKFIT_MMA_TRAINER2_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/tom.jpg" alt="<?=LANG_KICKFIT_MMA_TRAINER2_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_KICKFIT_MMA_TRAINER2_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_KICKFIT_MMA_TRAINER3_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/will.jpg" alt="<?=LANG_KICKFIT_MMA_TRAINER3_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_KICKFIT_MMA_TRAINER3_CONTENT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_KICKFIT_MMA_TRAINER4_ID?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/<?=LANG_KICKFIT_MMA_PAGE_NAME?>/rio.jpg" alt="<?=LANG_KICKFIT_MMA_TRAINER4_TITLE?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_KICKFIT_MMA_TRAINER4_CONTENT?></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    <div class="contactform container">
        <div class="row" id="form">
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h2 class="booktitle"><?=LANG_KICKFIT_MMA_SIGNUP_TITLE?></h2>
                <h3 class="visit_benefit">
                    <?=LANG_KICKFIT_MMA_SIGNUP_CONTENT?>
                </h3>
                <div id="signUp_form">
	                <?php if ($LANG == 'vn') { ?>
	                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=10803405&amp;u=kKTV"></script>
	                <?php } else if ($LANG == 'en') { ?>
	                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=8579905&amp;u=kKTV"></script>
	                <?php } ?>
				</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
        </div>
    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
