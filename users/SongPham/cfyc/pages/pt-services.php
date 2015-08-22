<div class="container-fluid page <?=LANG_PT_PAGE_NAME_PT?>-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php';?>
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?=LANG_PT_BANNER_TEXT_CONTENT_PT?></legend>
                <hr/>
                <span>
                    <?=LANG_PT_BANNER_TEXT_SMALL_PT?>
                </span>
                <div class="red-btn">
                    <a class="cta" href="javascript:animateTo($('.contactform'))" title="<?=LANG_PT_BANNER_TEXT_CTA_PT?>"> <?=LANG_PT_BANNER_TEXT_CTA_PT?></a>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="calidance container">
        <div class="row row-centered">
            <div class="strike"><h2><?=LANG_PT_CALIDANCE_PT?></h2></div>
            <div class="col-md-10 col-xs-12 col-centered">
            	<?php echo LANG_PT_CONTENT_1 ?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-centered">
                <?=LANG_PT_CALIDANCE_CONTENT_PT?>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-centered">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" height="200" src="https://www.youtube.com/embed/EVw2QEnXEko" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="benefits row-centered">
        <div class="strike"><h2><?=LANG_PT_BENEFIT_PT?></h2></div>
      <div class="col-md-10 col-xs-12 col-centered">
        <?=LANG_PT_BENEFIT_CONTENT_PT?>
        <br><br>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_PT_BENEFIT_PT?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/benefit-1.jpg" alt="<?=LANG_PT_BENEFIT_PT?>">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cover">
            <a href="#" title="<?=LANG_PT_BENEFIT_PT?>">
                <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/benefit-2.jpg" alt="<?=LANG_PT_BENEFIT_PT?>">
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="school row">
        <div class="strike"><h2><?=LANG_PT_ENVIRONMENT_PT?></h2></div>
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
                            <img src="<?php echo USER_BASE_URL ?>/img/pt-services/perfect-environment/1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/pt-services/perfect-environment/2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/pt-services/perfect-environment/3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/pt-services/perfect-environment/4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
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
                            <img src="<?php echo USER_BASE_URL ?>/img/pt-services/perfect-environment/m-1.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/pt-services/perfect-environment/m-2.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/pt-services/perfect-environment/m-3.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
                        <div class="item">
                            <img src="<?php echo USER_BASE_URL ?>/img/pt-services/perfect-environment/m-4.jpg"  title="Visit us for a free membership trial today" alt="Visit us for a free membership trial today">
                        </div>
          </div> <!-- inner - mobile -->
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="trainers container">
        <div class="strike"><h2><?=LANG_PT_TRAINER_TITLE_PT?></h2></div>
        <center><?=LANG_PT_TRAINER_SUB_PT?></center>
        <div class="tab-content teacher-detail">
            <div role="tabpanel" class="tab-pane active" id="hcmc">
                <ul class="nav nav-tabs col-lg-2 col-md-2 col-sm-2 col-xs-12" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#<?=LANG_PT_TRAINER1_ID_PT?>" aria-controls="<?=LANG_PT_TRAINER1_ID_PT?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/linhta-icon.png" alt="<?=LANG_PT_TRAINER1_TITLE_PT?>">
                            <span><?=LANG_PT_TRAINER1_TITLE_PT?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_PT_TRAINER2_ID_PT?>" aria-controls="<?=LANG_PT_TRAINER2_ID_PT?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/tieuphuong.png" alt="<?=LANG_PT_TRAINER2_TITLE_PT?>">
                            <span><?=LANG_PT_TRAINER2_TITLE_PT?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_PT_TRAINER3_ID_PT?>" aria-controls="<?=LANG_PT_TRAINER3_ID_PT?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/almorgan.png" alt="<?=LANG_PT_TRAINER3_TITLE_PT?>">
                            <span><?=LANG_PT_TRAINER3_TITLE_PT?></span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#<?=LANG_PT_TRAINER4_ID_PT?>" aria-controls="<?=LANG_PT_TRAINER4_ID_PT?>" role="tab" data-toggle="tab">
                            <img class="img-responsive"
                                 src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/travis.png" alt="<?=LANG_PT_TRAINER4_TITLE_PT?>">
                            <span><?=LANG_PT_TRAINER4_TITLE_PT?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div role="tabpanel" class="tab-pane active" id="<?=LANG_PT_TRAINER1_ID_PT?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/LinhTa.jpg" alt="<?=LANG_PT_TRAINER1_TITLE_PT?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_PT_TRAINER1_CONTENT_PT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_PT_TRAINER2_ID_PT?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/TieuPhuong.jpg" alt="<?=LANG_PT_TRAINER2_TITLE_PT?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_PT_TRAINER2_CONTENT_PT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_PT_TRAINER3_ID_PT?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/Al.jpg" alt="<?=LANG_PT_TRAINER3_TITLE_PT?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_PT_TRAINER3_CONTENT_PT?></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="<?=LANG_PT_TRAINER4_ID_PT?>">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-sx-12" style="text-align: center;">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL?>/img/<?=LANG_PT_PAGE_NAME_PT?>/travis.jpg" alt="<?=LANG_PT_TRAINER4_TITLE_PT?>">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-sx-12 cont"><?=LANG_PT_TRAINER4_CONTENT_PT?></div>
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
                <h2 class="booktitle"><?=LANG_SIGNUP_TITLE_PT?></h2>
                <h3 class="visit_benefit">
                    <?=LANG_SIGNUP_CONTENT_PT?>
                </h3>
                <div id="signUp_form">
	                <?php if ($LANG == 'vn') { ?>
	                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=10803305&amp;u=kKTV"></script>
	                <?php } else if ($LANG == 'en') { ?>
	                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=8705005&amp;u=kKTV"></script>
	                <?php } ?>
				</div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
        </div>
    </div>

    <?php include USER_BASE_PATH . '/templates/footer-bar.php';?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php';?>
