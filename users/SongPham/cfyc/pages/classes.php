<?
/**
 * Classes page
 */
?>
<div class="container-fluid page classes-page">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="top-content row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner banner-top" role="listbox">
                <div class="">
                   
                            <div class="cta">
					            <fieldset>
					                <legend><?php echo LANG_SCHEDULES_TITLE_CTA ?></legend>
					                <hr/>
					                <span>
					                   <?php echo LANG_SCHEDULES_TITLE_CTA_SPAN ?>
					                </span>
					                <div class="red-btn">
					                <a class="cta" href="<?php echo USER_BASE_URL ?>/vip-members" title=""> <?php echo LANG_SCHEDULES_TITLE_CTA_BUTTON ?></a>
					                </div>
					            </fieldset>
							</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <br/>
    <div style="margin:0px;padding:0px;overflow:hidden;height:1000px;">
        <iframe src="<?php echo PROTOCOL ?>://www.cfyc.com.vn/<?php echo $LANG ?>/schedule/?view=iframe" frameborder="0" style="border:none; overflow:hidden; width:100%; height:100%;" allowtransparency="true"></iframe>
    </div>
    <br/>
    <?php /*
    <div class="location container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 firstcol">
                <h2>Choose your location</h2>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="title">
                        <img src="<?php echo USER_BASE_URL ?>/img/classes/marker.png" alt="location">
                        HO CHI MINH CITY
                    </li>
                    <li role="presentation" class="active odd">
                        <a href="#hcm-loc1" aria-controls="hcm-loc1" role="tab" data-toggle="tab">DISTRICT 1</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#hcm-loc2" aria-controls="hcm-loc2" role="tab" data-toggle="tab">DISTRICT 2</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#hcm-loc3" aria-controls="hcm-loc3" role="tab" data-toggle="tab">DISTRICT 4</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#hcm-loc4" aria-controls="hcm-loc4" role="tab" data-toggle="tab">DISTRICT 5</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#hcm-loc5" aria-controls="hcm-loc5" role="tab" data-toggle="tab">DISTRICT 7</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#hcm-loc6" aria-controls="hcm-loc6" role="tab" data-toggle="tab">DISTRICT 11</a>
                    </li>
                    <li role="presentation" class="odd last">
                        <a href="#hcm-loc7" aria-controls="hcm-loc7" role="tab" data-toggle="tab">THU DUC DIST</a>
                    </li>
                    <li role="presentation" class="even last">
                        <a href="#hcm-loc8" aria-controls="hcm-loc8" role="tab" data-toggle="tab">TAN BINH DIST</a>
                    </li>

                    <li class="title">
                        <img src="<?php echo USER_BASE_URL ?>/img/classes/marker.png" alt="location">
                        HA NOI
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#hanoi-loc1" aria-controls="hanoi-loc1" role="tab" data-toggle="tab">DISTRICT 1</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#hanoi-loc2" aria-controls="hanoi-loc2" role="tab" data-toggle="tab">DISTRICT 2</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#hanoi-loc3" aria-controls="hanoi-loc3" role="tab" data-toggle="tab">DISTRICT 4</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#hanoi-loc4" aria-controls="hanoi-loc4" role="tab" data-toggle="tab">DISTRICT 5</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#hanoi-loc5" aria-controls="hanoi-loc5" role="tab" data-toggle="tab">DISTRICT 7</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#hanoi-loc6" aria-controls="hanoi-loc6" role="tab" data-toggle="tab">DISTRICT 11</a>
                    </li>
                    <li role="presentation" class="odd last">
                        <a href="#hanoi-loc7" aria-controls="hanoi-loc7" role="tab" data-toggle="tab">THU DUC DIST</a>
                    </li>
                    <li role="presentation" class="even last">
                        <a href="#hanoi-loc8" aria-controls="hanoi-loc8" role="tab" data-toggle="tab">TAN BINH DIST</a>
                    </li>

                    <li class="title">
                        <img src="<?php echo USER_BASE_URL ?>/img/classes/marker.png" alt="location">
                        DA NANG
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#danang-loc1" aria-controls="danang-loc1" role="tab" data-toggle="tab">DISTRICT 1</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#danang-loc2" aria-controls="danang-loc2" role="tab" data-toggle="tab">DISTRICT 2</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#danang-loc3" aria-controls="danang-loc3" role="tab" data-toggle="tab">DISTRICT 4</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#danang-loc4" aria-controls="danang-loc4" role="tab" data-toggle="tab">DISTRICT 5</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#danang-loc5" aria-controls="danang-loc5" role="tab" data-toggle="tab">DISTRICT 7</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#danang-loc6" aria-controls="danang-loc6" role="tab" data-toggle="tab">DISTRICT 11</a>
                    </li>
                    <li role="presentation" class="odd last">
                        <a href="#danang-loc7" aria-controls="danang-loc7" role="tab" data-toggle="tab">THU DUC DIST</a>
                    </li>
                    <li role="presentation" class="even last">
                        <a href="#danang-loc8" aria-controls="danang-loc8" role="tab" data-toggle="tab">TAN BINH DIST</a>
                    </li>

                    <li class="title">
                        <img src="<?php echo USER_BASE_URL ?>/img/classes/marker.png" alt="location">
                        BINH DUONG
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#danang-loc1" aria-controls="danang-loc1" role="tab" data-toggle="tab">DISTRICT 1</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#danang-loc2" aria-controls="danang-loc2" role="tab" data-toggle="tab">DISTRICT 2</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#danang-loc3" aria-controls="danang-loc3" role="tab" data-toggle="tab">DISTRICT 4</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#danang-loc4" aria-controls="danang-loc4" role="tab" data-toggle="tab">DISTRICT 5</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#danang-loc5" aria-controls="danang-loc5" role="tab" data-toggle="tab">DISTRICT 7</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#danang-loc6" aria-controls="danang-loc6" role="tab" data-toggle="tab">DISTRICT 11</a>
                    </li>
                    <li role="presentation" class="odd last">
                        <a href="#danang-loc7" aria-controls="danang-loc7" role="tab" data-toggle="tab">THU DUC DIST</a>
                    </li>
                    <li role="presentation" class="even last">
                        <a href="#danang-loc8" aria-controls="danang-loc8" role="tab" data-toggle="tab">TAN BINH DIST</a>
                    </li>

                    <li class="title">
                        <img src="<?php echo USER_BASE_URL ?>/img/classes/marker.png" alt="location">
                        BIEN HOA
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#bienhoa-loc1" aria-controls="bienhoa-loc1" role="tab" data-toggle="tab">DISTRICT 1</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#bienhoa-loc2" aria-controls="bienhoa-loc2" role="tab" data-toggle="tab">DISTRICT 2</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#bienhoa-loc3" aria-controls="bienhoa-loc3" role="tab" data-toggle="tab">DISTRICT 4</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#bienhoa-loc4" aria-controls="bienhoa-loc4" role="tab" data-toggle="tab">DISTRICT 5</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#bienhoa-loc5" aria-controls="bienhoa-loc5" role="tab" data-toggle="tab">DISTRICT 7</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#bienhoa-loc6" aria-controls="bienhoa-loc6" role="tab" data-toggle="tab">DISTRICT 11</a>
                    </li>
                    <li role="presentation" class="odd last">
                        <a href="#bienhoa-loc7" aria-controls="bienhoa-loc7" role="tab" data-toggle="tab">THU DUC DIST</a>
                    </li>
                    <li role="presentation" class="even last">
                        <a href="#bienhoa-loc8" aria-controls="bienhoa-loc8" role="tab" data-toggle="tab">TAN BINH DIST</a>
                    </li>

                    <li class="title">
                        <img src="<?php echo USER_BASE_URL ?>/img/classes/marker.png" alt="location">
                        NHA TRANG
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#location1" aria-controls="location1" role="tab" data-toggle="tab">DISTRICT 1</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#location2" aria-controls="location2" role="tab" data-toggle="tab">DISTRICT 2</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#location3" aria-controls="location3" role="tab" data-toggle="tab">DISTRICT 4</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#location4" aria-controls="location4" role="tab" data-toggle="tab">DISTRICT 5</a>
                    </li>
                    <li role="presentation" class="odd">
                        <a href="#location5" aria-controls="location5" role="tab" data-toggle="tab">DISTRICT 7</a>
                    </li>
                    <li role="presentation" class="even">
                        <a href="#location6" aria-controls="location6" role="tab" data-toggle="tab">DISTRICT 11</a>
                    </li>
                    <li role="presentation" class="odd last">
                        <a href="#location7" aria-controls="location7" role="tab" data-toggle="tab">THU DUC DIST</a>
                    </li>
                    <li role="presentation" class="even last">
                        <a href="#location8" aria-controls="location8" role="tab" data-toggle="tab">TAN BINH DIST</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 secondcol">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="hcm-loc1">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-yoga.png" alt="location">
                            <span>YOGA</span>
                            <a href="#" class="btn-view" title="View">View</a>
                            <a href="#" class="btn-download" title="Download">Download</a>
                            <a href="#" class="btn-cta" title="Try a class">Try a class</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-groupx.png" alt="location">
                            <span>GROUP X</span>
                            <a href="#" class="btn-view" title="View">View</a>
                            <a href="#" class="btn-download" title="Download">Download</a>
                            <a href="#" class="btn-cta" title="Try a class">Try a class</a>
                        </div>

                        <div class="space"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 small">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-yogani.png" alt="location">
                            <span>YOGA & I</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 small">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-pt.png" alt="location">
                            <span>PT</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 small">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-kickfit.png" alt="location">
                            <span>KICKFIT</span>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="hcm-loc2">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-yoga.png" alt="location">
                            <span>YOGA</span>
                            <a href="#" class="btn-view" title="View">View</a>
                            <a href="#" class="btn-download" title="Download">Download</a>
                            <a href="#" class="btn-cta" title="Try a class">Try a class</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-groupx.png" alt="location">
                            <span>GROUP X</span>
                            <a href="#" class="btn-view" title="View">View</a>
                            <a href="#" class="btn-download" title="Download">Download</a>
                            <a href="#" class="btn-cta" title="Try a class">Try a class</a>
                        </div>

                        <div class="space"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 small">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-yogani.png" alt="location">
                            <span>YOGA & I</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 small">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-pt.png" alt="location">
                            <span>PT</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 small">
                            <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-kickfit.png" alt="location">
                            <span>KICKFIT</span>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="hcm-loc3">HO CHI MINH DIS 4</div>
                    <div role="tabpanel" class="tab-pane" id="hcm-loc4">HO CHI MINH DIS 5</div>
                </div>
            </div>
        </div>
    </div> */ ?>



<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
