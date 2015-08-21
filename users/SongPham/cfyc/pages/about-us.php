<div class="container-fluid page about-us">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="row banner-top">
           <div class="cta">
            <fieldset>
                <legend><?php echo LANG_CFYC_MEMBERSHIPS_BANNER_TITLE?></legend>
                <hr/>
                <span>
                    <?php echo LANG_CFYC_MEMBERSHIPS_BANNER_SUBTEXT ?>
                </span>
                <div class="red-btn">
                <a class="cta" href="<?php echo USER_BASE_URL ?>/vip-members<?php echo getSuffix('lang=' . $LANG) ?>" title=""> <?php echo LANG_CFYC_MEMBERSHIPS_BANNER_CTA ?></a>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="container-page">
        <div class="row quotes-block">
            <div class="col-sm-12">
                <span class="open-quotes">&ldquo;</span><h3><?php echo LANG_ABOUT_US_QUOTE ?></h3><span class="close-quotes">&rdquo;</span>
            </div>
        </div>
        <hr>
    </div><!--end container page-->
    <div class="row randy-quotes hidden-lg hidden-xs">
        <div class="container-page">
            <div class="col-sm-6 quotes">
                <blockquote><?php echo LANG_ABOUT_US_QUOTE ?></blockquote>
            </div>
        </div>
    </div><!--end row-->
    <div class="container-page">
        <div class="row info">
            <div class="col-sm-6">
                <p><?php echo LANG_ABOUT_US_PARAGRAPH1 ?></p>
            </div>
            <div class="col-sm-6">
                <p><?php echo LANG_ABOUT_US_PARAGRAPH2 ?></p>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-xs-6">
                <img src="<?php echo USER_BASE_URL ?>/img/about-us/facilities1.jpg" class="img-responsive"/>
            </div>
            <div class="col-xs-6">
                <img src="<?php echo USER_BASE_URL ?>/img/about-us/facilities2.jpg" class="img-responsive"/>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-xs-6">
                <img src="<?php echo USER_BASE_URL ?>/img/about-us/facilities3.jpg" class="img-responsive"/>
            </div>
            <div class="col-xs-6">
                <img src="<?php echo USER_BASE_URL ?>/img/about-us/facilities4.jpg" class="img-responsive"/>
            </div>

        </div>

                                <div class="row messages booknow row-centered">
                               <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-centered">
                                <h2 class="booktitle"><?=LANG_VIP_RSVP_INCLUDE_12?></h2>
                                <h3 class="visit_benefit">
                                <?=LANG_VIP_RSVP_INCLUDE_13?>
                                </h3>
				                <div id="signUp_form">
					                <?php if ($LANG == 'vn') { ?>
					                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=11843605&amp;u=kKTV"></script>
					                <?php } else if ($LANG == 'en') { ?>
					                <script type="text/javascript" src="https://app.getresponse.com/view_webform.js?wid=9700905&amp;u=kKTV"></script>
					                <?php } ?>
								</div> <!-- form -->

                            </div> <!-- visit benefit -->
                        </div> <!-- cta div -->
                    </div> <!-- book now -->
    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div><!--end container page-->
    <?php include USER_BASE_PATH . '/templates/footer.php'; ?>

<script src="<?php echo USER_BASE_URL ?>/js/scripts/about-us.js"></script>