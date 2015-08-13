<div class="container-fluid page home-page">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
<div class="container-fluid">
    <div class="row gallery home-banner-top">
            <img class="hidden-xs" src="img/home/california-wow-banner.jpg"  title="<?=HOME_BANNER_1?>" alt="<?=HOME_BANNER_1?>">
            <img class="hidden-lg hidden-sm hidden-md" src="img/home/california-wow-banner-mobile.jpg"  title="<?=HOME_BANNER_1?>" alt="<?=HOME_BANNER_1?>">
        <div class="cta">
            <fieldset>
                <legend align="center"><?php echo HOME_BANNER_1?></legend>
                <hr/>
                <span>
                    <?php echo HOME_BANNER_2 ?>
                </span>
                <div class="red_btn">
               		 <a class="cta" href="<?php echo USER_BASE_URL ?>/vip-members<?php echo getSuffix('lang=' . $LANG) ?>" title=""> <?php echo HOME_BANNER_3 ?></a>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="row top-content">
        <div class="holder-top-content">
            <div class="col-md-12 text-center">
                <div class="whitespace"></div>
                <div class="strike"><h2><?=LANG_OUR_SERVICES?></h2></div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <?='<p>'.LANG_OUR_SERVICES_SUB.'</p>'?>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="whitespace"></div>
                <div class="row ourservice">
                    <div class="col-md-4 col-sm-4 col-xs-6 service_item">
                    <a href="pt-services<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_PERSONAL_TRAINNER?>" alt="<?=LANG_PERSONAL_TRAINNER?>">
                        <div class="service_img">
                            <img src="img/home/california-wow-our-services-1.jpg" alt="<?=LANG_PERSONAL_TRAINNER?>" title="<?=LANG_PERSONAL_TRAINNER?>">
                        </div>
                        <div class="overlay">
                            <h2 class="service_title">                                
                                <?=LANG_PERSONAL_TRAINNER?>                                
                            </h2>
                       </div>
                       </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 service_item">
                        <a href="yoga-services<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_YOGA?>" alt="<?=LANG_YOGA?>">
                            <div class="service_img">
                                <img src="img/home/california-wow-our-services-2.jpg" alt="<?=LANG_YOGA?>" title="<?=LANG_YOGA?>">
                            </div>
                            <div class="overlay">
                                <h2 class="service_title">                                    
                                    <?=LANG_YOGA?>                                    
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 service_item">
                        <a href="group-fitness-services<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_GROUP_EXERCISE?>" alt="<?=LANG_GROUP_EXERCISE?>">
                            <div class="service_img">
                                <img src="img/home/california-wow-our-services-3.jpg" alt="<?=LANG_GROUP_EXERCISE?>" title="<?=LANG_GROUP_EXERCISE?>">
                            </div>
                            <div class="overlay">
                                <h2 class="service_title">                                
                                    <?=LANG_GROUP_EXERCISE?>                               
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 service_item">
                        <a href="dance-services<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_DANCE?>" alt="<?=LANG_DANCE?>">
                            <div class="service_img">
                                <img src="img/home/california-wow-our-services-4.jpg" alt="<?=LANG_DANCE?>" title="<?=LANG_DANCE?>">
                            </div>
                            <div class="overlay">
                                <h2 class="service_title">                                   
                                    <?=LANG_DANCE?>                                    
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 service_item">
                        <a href="dynamicstretching-services<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_DYNAMIC_SCRETCHING?>" alt="<?=LANG_DYNAMIC_SCRETCHING?>">
                            <div class="service_img">
                                <img src="img/home/california-wow-our-services-5.jpg" alt="<?=LANG_DYNAMIC_SCRETCHING?>" title="<?=LANG_DYNAMIC_SCRETCHING?>">
                            </div>
                            <div class="overlay">
                                <h2 class="service_title">
                                    <?=LANG_DYNAMIC_SCRETCHING?>
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 service_item">
                        <a href="kickfit-mma-services<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_KICKFIT?>" alt="<?=LANG_KICKFIT?>">
                            <div class="service_img">
                                <img src="img/home/california-wow-our-services-6.jpg" alt="<?=LANG_KICKFIT?>" title="<?=LANG_KICKFIT?>">
                            </div>
                            <div class="overlay">
                                <h2 class="service_title">                                
                                    <?=LANG_KICKFIT?>                                
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row seemorebtn">
                    <div class="col-md-12">
                        <a href="pt-services<?php echo getSuffix('lang=' . $LANG) ?>" alt="<?=LANG_SEE_MORE?>" title="<?=LANG_SEE_MORE?>"><?=LANG_SEE_MORE?></a>
                    </div>
                </div>
            </div>
            <div class="whitespace"></div>
            <div class="col-md-12 text-center">
                <div class="strike"><h2><?=LANG_FIND_YOUR_CLUB?></h2></div>
                  <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                         <?='<p>'.LANG_FIND_YOUR_CLUB_SUB.'</p>'?>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="whitespace"></div>
                <div class="row findyourclub">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <img src="img/home/california-wow-find-your-club-10.jpg" alt="<?=LANG_HO_CHI_MINH_CITY?>" title="<?=LANG_HO_CHI_MINH_CITY?>">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <a href="club-hcm<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_HO_CHI_MINH_CITY?>" alt="<?=LANG_HO_CHI_MINH_CITY?>">
                            <img class="hidden-xs" src="img/home/california-wow-find-your-club-1.jpg" alt="<?=LANG_HO_CHI_MINH_CITY?>" title="<?=LANG_HO_CHI_MINH_CITY?>">
                            <img class="hidden-lg hidden-sm hidden-md" src="img/home/california-wow-find-your-club-1_sm.jpg" alt="<?=LANG_HO_CHI_MINH_CITY?>" title="<?=LANG_HO_CHI_MINH_CITY?>">
                            <div class="overlay">
                                <h2 class="service_title">                                    
                                    <?=LANG_HO_CHI_MINH_CITY?>                                    
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 hidden-xs">
                        <img src="img/home/california-wow-find-your-club-2.jpg" alt="<?=LANG_HA_NOI?>" title="<?=LANG_HA_NOI?>">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="club-ha-noi<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_HA_NOI?>" alt="<?=LANG_HA_NOI?>">
                            <img src="img/home/california-wow-find-your-club-3.jpg" alt="<?=LANG_HA_NOI?>" title="<?=LANG_HA_NOI?>">
                            <div class="overlay">
                                <h2 class="service_title">                                    
                                   <?=LANG_HA_NOI?>                                    
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 hidden-xs">
                        <img src="img/home/california-wow-find-your-club-4.jpg" alt="<?=LANG_DA_NANG?>" title="<?=LANG_DA_NANG?>">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="club-da-nang<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_DA_NANG?>" alt="<?=LANG_DA_NANG?>">
                            <img src="img/home/california-wow-find-your-club-5.jpg" alt="<?=LANG_DA_NANG?>" title="<?=LANG_DA_NANG?>">
                            <div class="overlay">
                                <h2 class="service_title">                                
                                   <?=LANG_DA_NANG?>                               
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 hidden-xs">
                        <a href="club-binh-duong<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_BINH_DUONG?>" alt="<?=LANG_BINH_DUONG?>">
                            <img src="img/home/california-wow-find-your-club-6.jpg" alt="<?=LANG_BINH_DUONG?>" title="<?=LANG_BINH_DUONG?>">
                            <div class="overlay">
                                <h2 class="service_title">                                    
                                    <?=LANG_BINH_DUONG?>                                    
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 hidden-xs">
                        <img src="img/home/california-wow-find-your-club-7.jpg" alt="<?=LANG_BINH_DUONG?>" title="<?=LANG_BINH_DUONG?>">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <?php /*will put bien hoa for new coming???*/?>
                        <a href="find-a-club-in-your-city<?php echo getSuffix('lang=' . $LANG) ?>" title="<?=LANG_NEW_COMING?>" alt="<?=LANG_NEW_COMING?>">
                            <img src="img/home/california-wow-find-your-club-8.jpg" alt="<?=LANG_NEW_COMING?>" title="<?=LANG_NEW_COMING?>">
                            <div class="overlay">
                                <h2 class="service_title">                                
                                    <?=LANG_NEW_COMING?>                                
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <img src="img/home/california-wow-find-your-club-9.jpg" alt="<?=LANG_NEW_COMING?>" title="<?=LANG_NEW_COMING?>">
                    </div>
                </div>
                <div class="row seemorebtn">
                    <div class="col-md-12">
                        <a href="find-a-club-in-your-city<?php echo getSuffix('lang=' . $LANG) ?>" alt="<?=LANG_SEE_MORE?>" title="<?=LANG_SEE_MORE?>"><?=LANG_SEE_MORE?></a>
                    </div>
                </div>
            </div>
            <div class="whitespace"></div>
            <div class="col-md-12 text-center">
                <div class="strike"><h2><?=LANG_FIND_YOUR_TRAINER?></h2></div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <?='<p>'.LANG_FIND_YOUR_TRAINER_SUB.'</p>'?>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="whitespace"></div>
                <div class="row find_your_trainner container-page">
                    <div class="col-md-1 hide-sm hidden-xs"></div>
                    <div class="col-md-7 col-sm-6 col-xs-12 text-center trainner_photo">
                       <img id="linhta2" src="img/home/assim_yoga.jpg" alt="<?=LANG_FIND_YOUR_TRAINER?>" title="<?=LANG_FIND_YOUR_TRAINER?>">
                       <img id="linhta" class="active" src="img/home/california-wow-tieu-phuong.jpg" alt="<?=LANG_FIND_YOUR_TRAINER?>" title="<?=LANG_FIND_YOUR_TRAINER?>">
                       <img id="linhta1" src="img/home/california-wow-mint-nguyen.jpg" alt="<?=LANG_FIND_YOUR_TRAINER?>" title="<?=LANG_FIND_YOUR_TRAINER?>">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 trainner_text">
                         <div class="trainner_desc linhta2">
                            <?=LANG_TRAINNER_1?>
                        </div>
                        <div class="trainner_desc active linhta">
                            <?=LANG_TRAINNER_2?>
                        </div>
                        <div class="trainner_desc linhta1">
                            <?=LANG_TRAINNER_3?>
                        </div>
                    </div>
                    <div class="col-md-1 hide-sm hidden-xs"></div>
                </div>
                <div class="row seemorebtn">
                    <div class="col-md-12">
                        <a href="<?php echo USER_BASE_URL ?>/pt-services<?=getSuffix('lang=' . $LANG)?>" alt="<?=LANG_SEE_MORE?>" title="<?=LANG_SEE_MORE?>"><?=LANG_SEE_MORE?></a>
                    </div>
                </div>
            </div>
            <div class="whitespace"></div>
            <div class="col-md-12 text-center">
                <div class="strike"><h2><?=LANG_SUCCESS_STORIES?></h2></div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <?='<p>'.LANG_SUCCESS_STORIES_SUB.'</p>'?>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="whitespace"></div>
                <div class="row success_stories">
                    <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <div class="roundphoto">
                            <img src='img/home/success_n.png' onmouseover="this.src='img/home/success_h.png';" onmouseout="this.src='img/home/success_n.png';" />
                        </div>
                        <?=LANG_SUCCESS_STORIES_DESC?>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                    </div>
                </div>
                <div class="row seemorebtn">
                    <div class="col-md-12">
                        <a href="member-testimonials<?php echo getSuffix('lang=' . $LANG) ?> " alt="<?=LANG_SEE_MORE?>" title="<?=LANG_SEE_MORE?>"><?=LANG_SEE_MORE?></a>
                    </div>
                </div>
            </div>
            <div class="whitespace"></div>
            <div class="col-md-12 text-center">
                <div class="strike"><h2><?=LANG_CELEBRITIES_MEMBERS?></h2></div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <?='<p>'.LANG_CELEBRITIES_MEMBERS_SUB.'</p>'?>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="whitespace"></div>
                <div class="row celebrities">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <div class="col-md-2 hide-sm hide-xs text-center">
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 text-center celeb-items">
                                <a href="celebrity-members<?php echo getSuffix('lang=' . $LANG . '&celeb=' . 0)?>" alt="<?=LANG_CELEB_1?>" title="<?=LANG_CELEB_1?>">
                                    <img src="img/home/california-wow-celeb-member-1.png" alt="<?=LANG_CELEB_1?>" title="<?=LANG_CELEB_1?>">
                                    <p><?=LANG_CELEB_1?><br/><?=LANG_CELEBRITY_MEMBERS_JOB_SINGER?></p>
                                </a>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 text-center celeb-items">
                                <a href="celebrity-members<?php echo getSuffix('lang=' . $LANG . '&celeb=' . 1)?>" alt="<?=LANG_CELEB_2?>" title="<?=LANG_CELEB_2?>">
                                    <img src="img/home/california-wow-celeb-member-5.png" alt="<?=LANG_CELEB_2?>" title="<?=LANG_CELEB_2?>">
                                    <p><?=LANG_CELEB_2?><br/><?=LANG_CELEBRITY_MEMBERS_JOB_MODEL?></p>
                                </a>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 text-center celeb-items">
                                <a href="celebrity-members<?php echo getSuffix('lang=' . $LANG . '&celeb=' . 2)?>" alt="<?=LANG_CELEB_3?>" title="<?=LANG_CELEB_3?>">
                                    <img src="img/home/california-wow-celeb-member-7.png" alt="<?=LANG_CELEB_3?>" title="<?=LANG_CELEB_3?>">
                                    <p><?=LANG_CELEB_3?><br/><?=LANG_CELEBRITY_MEMBERS_JOB_MODEL?></p>
                                </a>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 text-center celeb-items">
                                <a href="celebrity-members<?php echo getSuffix('lang=' . $LANG . '&celeb=' . 3)?>"  alt="<?=LANG_CELEB_4?>" title="<?=LANG_CELEB_4?>">
                                    <img src="img/home/california-wow-celeb-member-10.png" alt="<?=LANG_CELEB_4?>" title="<?=LANG_CELEB_4?>">
                                    <p><?=LANG_CELEB_4?><br/><?=LANG_CELEBRITY_MEMBERS_JOB_ACTOR?></p>
                                </a>
                            </div>
                            <div class="col-md-2 hide-sm hide-xs text-center">
                            </div>
                        </div>
                        <div class="row">
                             <div class="whitespace"></div>
                                <div class="col-md-2 hide-sm hide-xs text-center">
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-6 text-center celeb-items">
                                    <a href="celebrity-members<?php echo getSuffix('lang=' . $LANG . '&celeb=' . 4)?>" alt="<?=LANG_CELEB_5?>" title="<?=LANG_CELEB_5?>">
                                        <img src="img/home/california-wow-celeb-member-2.png" alt="<?=LANG_CELEB_5?>" title="<?=LANG_CELEB_5?>">
                                        <p><?=LANG_CELEB_5?><br/><?=LANG_CELEBRITY_MEMBERS_JOB_MODEL?></p>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-6 text-center celeb-items">
                                    <a href="celebrity-members<?php echo getSuffix('lang=' . $LANG . '&celeb=' . 5)?>" alt="<?=LANG_CELEB_6?>" title="<?=LANG_CELEB_6?>">
                                        <img src="img/home/california-wow-celeb-member-3.png" alt="<?=LANG_CELEB_6?>" title="<?=LANG_CELEB_6?>">
                                        <p><?=LANG_CELEB_6?><br/><?=LANG_CELEBRITY_MEMBERS_JOB_MODEL?> / <?=LANG_CELEBRITY_MEMBERS_JOB_SINGER?></p>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-6 text-center celeb-items">
                                    <a href="celebrity-members<?php echo getSuffix('lang=' . $LANG . '&celeb=' . 6)?>"  alt="<?=LANG_CELEB_7?>" title="<?=LANG_CELEB_7?>">
                                        <img src="img/home/california-wow-celeb-member-11.png" alt="<?=LANG_CELEB_7?>" title="<?=LANG_CELEB_7?>">
                                        <p><?=LANG_CELEB_7?><br/><?=LANG_CELEBRITY_MEMBERS_JOB_ACTOR?></p>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-6 text-center celeb-items">
                                    <a href="celebrity-members<?php echo getSuffix('lang=' . $LANG . '&celeb=' . 7)?>" alt="<?=LANG_CELEB_8?>" title="<?=LANG_CELEB_8?>">
                                        <img src="img/home/california-wow-celeb-member-6.png" alt="<?=LANG_CELEB_8?>" title="<?=LANG_CELEB_8?>">
                                        <p><?=LANG_CELEB_8?><br/><?=LANG_CELEBRITY_MEMBERS_JOB_CHAIRMAN_CEO?></p>
                                    </a>
                                </div>
                                <div class="col-md-2 hide-sm hide-xs text-center">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row seemorebtn">
                    <div class="col-md-12">
                        <a href="celebrity-members<?=getSuffix('lang=' . $LANG)?>" alt="<?=LANG_SEE_MORE?>" title="<?=LANG_SEE_MORE?>"><?=LANG_SEE_MORE?></a>
                    </div>
                </div>
            </div>
            <div class="whitespace"></div>
            <div class="col-md-12 text-center">
                <div class="strike"><h2><?=LANG_FEATURE_STORIES?></h2></div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <?='<p>'.LANG_FEATURE_STORIES_SUB.'</p>'?>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="whitespace"></div>
                <?php
                    function truncate($text, $length) {
                       $length = abs((int)$length);
                       if(strlen($text) > $length) {
                          $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
                       }
                       return($text);
                    }
                ?>
                <div class="row features_stories">
                    <div class="col-md-1 col-sm-1 col-lg-1 hidden-xs">
                    </div>
                    <div class="col-md-10 col-sm-10 col-lg-10 col-xs-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                                <a href="<?=LANG_SUCCESS_STORIES_1_URL?>">
                                    <img src="img/home/nhung-dieu-phai-nu-can-biet-khi-tap-gym-giam-can.jpg" title="<?=LANG_SUCCESS_STORIES_1_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_1_TITLE?>">
                                </a>
                                <h4>
                                    <a href="<?=LANG_SUCCESS_STORIES_1_URL?>" title="<?=LANG_SUCCESS_STORIES_1_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_1_TITLE?>">
                                        <?=truncate(LANG_SUCCESS_STORIES_1_TITLE,35)?>
                                    </a>
                                </h4>
                                <?='<p>'.truncate(LANG_SUCCESS_STORIES_1,150).'</p>'?>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                                <a href="<?=LANG_SUCCESS_STORIES_2_URL?>" title="<?=LANG_SUCCESS_STORIES_2_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_2_TITLE?>">
                                    <img src="img/home/California-Fitness-opens-20-clubs-2015-3.jpg" title="<?=LANG_SUCCESS_STORIES_2_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_2_TITLE?>">
                                </a>
                                <h4>
                                    <a href="<?=LANG_SUCCESS_STORIES_2_URL?>" title="<?=LANG_SUCCESS_STORIES_2_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_2_TITLE?>">
                                        <?=truncate(LANG_SUCCESS_STORIES_2_TITLE,35)?>
                                    </a>
                                </h4>
                                <?='<p>'.truncate(LANG_SUCCESS_STORIES_2,150).'</p>'?>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                                <a href="<?=LANG_SUCCESS_STORIES_3_URL?>" title="<?=LANG_SUCCESS_STORIES_3_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_3_TITLE?>">
                                    <img src="img/home/tap-yoga-giup-dan-ong-khoe-hon.jpg" title="<?=LANG_SUCCESS_STORIES_3_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_3_TITLE?>">
                                </a>
                                <h4>
                                    <a href="<?=LANG_SUCCESS_STORIES_3_URL?>" title="<?=LANG_SUCCESS_STORIES_3_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_3_TITLE?>">
                                        <?=truncate(LANG_SUCCESS_STORIES_3_TITLE,35)?>
                                    </a>
                                </h4>
                                <?='<p>'.truncate(LANG_SUCCESS_STORIES_3,150).'</p>'?>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                                <a href="<?=LANG_SUCCESS_STORIES_4_URL?>" title="<?=LANG_SUCCESS_STORIES_4_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_4_TITLE?>">
                                    <img src="img/home/sau-mui-ho-vinh-khoa-cover.jpg" title="<?=LANG_SUCCESS_STORIES_4_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_4_TITLE?>">
                                </a>
                                <h4>
                                    <a href="<?=LANG_SUCCESS_STORIES_4_URL?>" title="<?=LANG_SUCCESS_STORIES_4_TITLE?>" alt="<?=LANG_SUCCESS_STORIES_4_TITLE?>">
                                        <?=truncate(LANG_SUCCESS_STORIES_4_TITLE,35)?>
                                    </a>
                                </h4>
                                <?='<p>'.truncate(LANG_SUCCESS_STORIES_4,150).'</p>'?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-lg-1 hidden-xs">
                    </div>
                </div>
                <div class="row seemorebtn">
                    <div class="col-md-12">
                        <a href="http://lifestyle.cfyc.com.vn<?=getSuffix('lang=' . $LANG)?>" alt="<?=LANG_SEE_MORE?>" title="<?=LANG_SEE_MORE?>"><?=LANG_SEE_MORE?></a>
                    </div>
                </div>
            </div>
            <div class="whitespace"></div>
            <div class="col-md-12 text-center">
                <div class="strike"><h2><?=LANG_SPECIAL_OFFERS?></h2></div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <?='<p>'.LANG_SPECIAL_OFFERS_SUB.'</p>'?>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="whitespace"></div>
                <div class="row special_offers">
                    <div class="col-md-2 hide-sm text-center">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <a href="<?=LANG_SPECIAL_OFFERS_URL_1?>" title="<?=LANG_SPECIAL_OFFERS?>" alt="<?=LANG_SPECIAL_OFFERS?>">
                            <img src="img/home/california-wow-special-offer-1.jpg" title="<?=LANG_SPECIAL_OFFERS?>" alt="<?=LANG_SPECIAL_OFFERS?>">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <a href="<?=LANG_SPECIAL_OFFERS_URL_2?>" title="<?=LANG_SPECIAL_OFFERS?>" alt="<?=LANG_SPECIAL_OFFERS?>">
                            <img src="img/home/california-wow-special-offer-2.jpg" title="<?=LANG_SPECIAL_OFFERS?>" alt="<?=LANG_SPECIAL_OFFERS?>">
                        </a>
                    </div>
                    <div class="col-md-2 hide-sm text-center">
                    </div>
                </div>
                <div class="row seemorebtn">
                    <div class="col-md-12">
                       <!-- <a href="<?=getSuffix('lang=' . $LANG)?>" alt="<?=LANG_SEE_MORE?>" title="<?=LANG_SEE_MORE?>"><?=LANG_SEE_MORE?></a> -->
                    </div>
                </div>
            </div>
            <div class="whitespace"></div>
        </div>
    </div>
</div>
<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/home.js"></script>