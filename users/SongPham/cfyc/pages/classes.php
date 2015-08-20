<?
/**
 * Classes page
 */
?>
<div class="container-fluid page classes-page">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="top-content row">
        <div class="carousel slide">
            <!-- Wrapper for slides -->
            <div class="carousel-inner banner-top">
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
    <div class="clearfix"></div>
    <?php
    // $scheduleData = json_decode(file_get_contents(PROTOCOL . '://' . CFYC_URL . '/' . $LANG . '/schedule/?view=json'), true);
    $scheduleData = json_decode(file_get_contents(PROTOCOL . '://www.cfyc.com.vn/' . $LANG . '/schedule/?view=json'), true);
    if (empty($scheduleData) === FALSE) { ?>
    <div class="location container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 firstcol">
                <h2><?php echo LANG_SCHEDULES_CHOOSE_YOUR_LOCATION ?></h2>
                <ul class="nav nav-tabs" role="tablist">
                    <?php
                    $idClubActive = NULL;
                    foreach ($scheduleData['listCity'] as $kCity => $city) {
                        $countClub = 0;
                        $clubHaveSchedule = array();
                        foreach ($scheduleData['listClub'] as $kClub => $club) {
                            $isNeedCountClub = FALSE;
                            foreach ($scheduleData['listSchedule'] as $kSchedule => $schedule) {
                                if ($club['_id'] == $schedule['id_club']) {
                                    $isNeedCountClub = true;
                                    $clubHaveSchedule[] = $club['_id'];
                                    break;
                                }
                            }
                            if (empty($isNeedCountClub) === FALSE) {
                                if ($club['id_city'] == $city['_id']) $countClub++;
                            }
                        }
                        if ($countClub == 0) continue;
                        $title = $city["name" . $LANGSTR];
                        ?>
                    <li class="title">
                        <img src="<?php echo USER_BASE_URL ?>/img/classes/marker.png" alt="location">
                        <?php echo mb_strtoupper($title, 'UTF-8') ?>
                    </li>
                    <?php if (empty($scheduleData['listClub']) === FALSE) {
                        $i = 0;
                        foreach ($scheduleData['listClub'] as $kClub => $club) { if ($club['id_city'] != $city['_id'] || in_array($club['_id'], $clubHaveSchedule) === FALSE) continue;
                            $clubTitle = $club["name" . $LANGSTR]; ?>
                    <li role="presentation" class="<?php if ($i == 0 && $kCity == 0) { echo 'active'; $idClubActive = $club['_id']; } ?> <?php if ($i % 2 == 0) { echo 'odd'; } else { echo 'even'; } ?> <?php if ($countClub == $i + 1 || ($countClub == $i + 2 && $i % 2 == 0)) { echo 'last'; } ?>">
                        <a href="#club<?php echo $club['_id'] ?>" aria-controls="club<?php echo $club['_id'] ?>" role="tab" data-toggle="tab"><?php echo limitString(mb_strtoupper($clubTitle, 'UTF-8'), 10) ?></a>
                    </li>
                        <?php $i++; }
                    } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 secondcol">
                <div class="tab-content">
                    <?php
                    if (empty($scheduleData['listClub']) === FALSE) {
                        foreach ($scheduleData['listClub'] as $kClub => $club) {
                            $currentSchedule = array();
                            foreach ($scheduleData['listSchedule'] as $kSchedule => $schedule) {
                                if ($club['_id'] == $schedule['id_club']) {
                                    $currentSchedule[] = $schedule;
                                }
                            }
                            if (empty($currentSchedule) === FALSE) {
                            ?>
                    <div role="tabpanel" class="tab-pane <?php if ($idClubActive == $club['_id']) echo 'active'; ?>" id="club<?php echo $club['_id'] ?>">
                        <h1 align="center"><?php echo $club['name' . $LANGSTR] ?></h1><br/><hr/><br/>
                        <?php foreach ($currentSchedule as $itemSchedule) { ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php if (empty($itemSchedule["image"]) === FALSE && empty($itemSchedule['popup1' . $LANGSTR]) === FALSE) { ?>
                                <?php if (in_array($itemSchedule['name' . $LANGSTR], array('YOGA')) === TRUE) { ?>
                                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-yoga.png" alt="location">
                                <span><?php echo $itemSchedule['name' . $LANGSTR] ?></span>
                                <?php } else { ?>
                                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-groupx.png" alt="location">
                                <span><?php echo $itemSchedule['name' . $LANGSTR] ?></span>
                                <?php } ?>
                                <div class="btn-view btn-group">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo LANG_SCHEDULES_VIEW ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo IMAGES_SERVER . $define_folder["image_schedule"] . $itemSchedule["image"] ?>"><?php echo $itemSchedule['popup1' . $LANGSTR] ?></a></li>
                                        <li><a href="<?php echo IMAGES_SERVER . $define_folder["image_schedule"] . $itemSchedule["image_1"] ?>"><?php echo $itemSchedule['popup2' . $LANGSTR] ?></a></li>
                                    </ul>
                                </div>
                                <div class="btn-download btn-group">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo IMAGES_SERVER . $itemSchedule["link_download"] ?>"><?php echo $itemSchedule['popup1' . $LANGSTR] ?></a></li>
                                        <li><a href="<?php echo IMAGES_SERVER . $itemSchedule["link_download_1"] ?>"><?php echo $itemSchedule['popup2' . $LANGSTR] ?></a></li>
                                    </ul>
                                </div>
                                <a href="<?php
                                switch ($itemSchedule['class_id_program']) {
                                    case 2: /* groupx */
                                        echo USER_BASE_URL . '/group-fitness-services' . getSuffix('lang=' . $LANG);
                                        break;
                                    case 4: /* dance */
                                        echo USER_BASE_URL . '/dance-services' . getSuffix('lang=' . $LANG);
                                        break;
                                    case 6: /* yoga */
                                        echo USER_BASE_URL . '/yoga-services' . getSuffix('lang=' . $LANG);
                                        break;
                                    case 8: /* pt */
                                        echo USER_BASE_URL . '/pt-services' . getSuffix('lang=' . $LANG);
                                        break;
                                    case 9: /* kickfit */
                                    case 10: /* mma */
                                        echo USER_BASE_URL . '/kickfit-mma-services' . getSuffix('lang=' . $LANG);
                                        break;
                                    case 11: /* dynamic stretching */
                                        echo USER_BASE_URL . '/dynamicstretching-services' . getSuffix('lang=' . $LANG);
                                        break;
                                    default:
                                        echo 'javascript:void(0)';
                                        break;
                                }
                                ?>" class="btn-cta btn-group" title="<?php echo LANG_DANCE_BANNER_TEXT_CTA ?>"><?php echo LANG_DANCE_BANNER_TEXT_CTA ?></a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <div class="space"></div>
                        <?php foreach ($currentSchedule as $itemSchedule) { ?>
                            <?php if (empty($itemSchedule["image"]) === TRUE || empty($itemSchedule['popup1' . $LANGSTR]) === TRUE) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 small">
                            <?php if ($itemSchedule['class_id_program'] == 6) { /* yoga */ ?>
                            <a href="<?php echo USER_BASE_URL . '/yoga-services' . getSuffix('lang=' . $LANG) ?>">
                                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-yogani.png" alt="<?php echo $itemSchedule['name' . $LANGSTR] ?>">
                                <span><?php echo $itemSchedule['name' . $LANGSTR] ?></span>
                            </a>
                            <?php } else if ($itemSchedule['class_id_program'] == 8) { /* pt-services */ ?>
                            <a href="<?php echo USER_BASE_URL . '/pt-services' . getSuffix('lang=' . $LANG) ?>">
                                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-pt.png" alt="<?php echo $itemSchedule['name' . $LANGSTR] ?>">
                                <span><?php echo $itemSchedule['name' . $LANGSTR] ?></span>
                            </a>
                            <?php } else if ($itemSchedule['class_id_program'] == 9 || $itemSchedule['class_id_program'] == 10) { /* kickfit-mma-services */ ?>
                            <a href="<?php echo USER_BASE_URL . '/kickfit-mma-services' . getSuffix('lang=' . $LANG) ?>">
                                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-kickfit.png" alt="<?php echo $itemSchedule['name' . $LANGSTR] ?>">
                                <span><?php echo $itemSchedule['name' . $LANGSTR] ?></span>
                            </a>
                            <?php } else if ($itemSchedule['class_id_program'] == 2) { /* groupx-services */ ?>
                            <a href="<?php echo USER_BASE_URL . '/group-fitness-services' . getSuffix('lang=' . $LANG) ?>">
                                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-groupx.png" alt="<?php echo $itemSchedule['name' . $LANGSTR] ?>">
                                <span><?php echo $itemSchedule['name' . $LANGSTR] ?></span>
                            </a>
                            <?php } else if ($itemSchedule['class_id_program'] == 4) { /* dance-services */ ?>
                            <a href="<?php echo USER_BASE_URL . '/dance-services' . getSuffix('lang=' . $LANG) ?>">
                                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-kickfit.png" alt="<?php echo $itemSchedule['name' . $LANGSTR] ?>">
                                <span><?php echo $itemSchedule['name' . $LANGSTR] ?></span>
                            </a>
                            <?php } else if ($itemSchedule['class_id_program'] == 11) { /* dynamic stretching */ ?>
                            <a href="<?php echo USER_BASE_URL . '/dynamicstretching-services' . getSuffix('lang=' . $LANG) ?>">
                                <img class="img-responsive" src="<?php echo USER_BASE_URL ?>/img/classes/loc-yogani.png" alt="<?php echo $itemSchedule['name' . $LANGSTR] ?>">
                                <span><?php echo $itemSchedule['name' . $LANGSTR] ?></span>
                            </a>
                            <?php } ?>
                        </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                            <?php }
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/classes.js"></script>