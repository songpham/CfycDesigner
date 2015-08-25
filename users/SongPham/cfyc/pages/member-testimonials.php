<div class="container-fluid page member-testimonials-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>

    <!-- TOP BANNER -->
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?php echo LANG_MEMBER_TESTIMONIALS_BANNER_TITLE ?></legend>
                <hr/>

                 <div class="embed-responsive embed-responsive-4by3">
                     <iframe class="embed-responsive-item" height="200" src="https://www.youtube.com/embed/EVw2QEnXEko?rel=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>
                </div>
                <span>
                    <?php echo LANG_MEMBER_TESTIMONIALS_BANNER_SUB_TITLE ?>
                </span>
                <div class="red-btn">
                    <div class="red-btn-inline">
                        <a class="cta" href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('vip-members' . getSuffix('lang=' . $LANG)) ?>" title="Discover Cali Dance"> <?php echo LANG_MEMBER_TESTIMONIALS_BANNER_TEXT_BUTTON ?></a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <!-- END TOP BANNER -->

    <div class="white-space-2x"></div>

    <!-- SLIDER -->
    <div class="row">
        <div id="member-list" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="col-md-1 hide-sm hide-xs text-center">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4 text-center box active">
                        <a href='1'><img src="<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_1 ?>" alt=''></a>
                        <p><?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_1_CAPTION ?></p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4 text-center box">
                        <a href='2'><img src="<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_2 ?>" alt=''></a>
                        <p><?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_2_CAPTION ?></p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4 text-center box">
                        <a href='3'><img src="<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_3 ?>" alt=''></a>
                        <p><?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_3_CAPTION ?></p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4 text-center box">
                        <a href='4'><img src="<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_4 ?>" alt=''></a>
                        <p><?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_4_CAPTION ?></p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4 text-center box">
                        <a href='5'><img src="<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_5 ?>" alt=''></a>
                        <p><?php echo LANG_MEMBER_TESTIMONIALS_CIRCLE_IMAGE_5_CAPTION ?></p>
                    </div>
                    <div class="col-md-1 hide-sm hide-xs text-center">
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#member-list" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#member-list" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="white-space"></div>


    <!-- STORY LIST -->
    <div class='story-list'>

        <!-- STORY -->
        <div class="row story story-1">

            <!-- IMAGE -->
            <div class="image">
                <div class='img-wrapper'>
                    <img src='<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_STORY_1_IMAGE ?>'/>
                    <div class='before'>
                        <?php echo LANG_MEMBER_TESTIMONIALS_STORY_1_BEFORE ?></div>
                    <div class='after'>
                        <?php echo LANG_MEMBER_TESTIMONIALS_STORY_1_AFTER ?></div>
                </div>
            </div>
            <!-- END IMAGE -->

            <div class="white-space"></div>

            <!-- TEXT -->
            <div class="container-page text">
                <h3><?php echo LANG_MEMBER_TESTIMONIALS_STORY_1_TITLE ?></h3>
                <?php echo LANG_MEMBER_TESTIMONIALS_STORY_1_CONTENT ?>
            </div>
            <!-- END TEXT -->

        </div>
        <!-- END STORY -->

        <!-- STORY -->
        <div class="row story story-2">

            <!-- IMAGE -->
            <div class="image">
                <div class='img-wrapper'>
                    <img src='<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_STORY_2_IMAGE ?>'/>
                    <div class='before'>
                        <?php echo LANG_MEMBER_TESTIMONIALS_STORY_2_BEFORE ?>
                    </div>
                    <div class='after'>
                        <?php echo LANG_MEMBER_TESTIMONIALS_STORY_2_AFTER ?>
                    </div>
                </div>
            </div>
            <!-- END IMAGE -->

            <div class="white-space"></div>

            <!-- TEXT -->
            <div class="container-page text">
                <h3><?php echo LANG_MEMBER_TESTIMONIALS_STORY_2_TITLE ?></h3>
                <?php echo LANG_MEMBER_TESTIMONIALS_STORY_2_CONTENT ?>
            </div>
            <!-- END TEXT -->

        </div>
        <!-- END STORY -->

        <!-- STORY -->
        <div class="row story story-3">

            <!-- IMAGE -->
            <div class="image">
                <div class='img-wrapper'>
                    <img src='<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_STORY_3_IMAGE ?>'/>
                    <div class='before'>
                       <?php echo LANG_MEMBER_TESTIMONIALS_STORY_3_BEFORE ?>
                    </div>
                    <div class='after'>
                        <?php echo LANG_MEMBER_TESTIMONIALS_STORY_3_AFTER ?>
                    </div>
                </div>
            </div>
            <!-- END IMAGE -->

            <div class="white-space"></div>

            <!-- TEXT -->
            <div class="container-page text">
                <h3><?php echo LANG_MEMBER_TESTIMONIALS_STORY_3_TITLE ?></h3>
                <?php echo LANG_MEMBER_TESTIMONIALS_STORY_3_CONTENT ?>
            </div>
            <!-- END TEXT -->

        </div>
        <!-- END STORY -->
        <!-- STORY 4 -->
        <div class="row story story-4">

            <!-- IMAGE -->
            <div class="image">
                <div class='img-wrapper'>
                    <img src='<?php echo USER_BASE_URL ?>/img/member-testimonials/<?php echo LANG_MEMBER_TESTIMONIALS_STORY_4_IMAGE ?>'/>
                </div>
            </div>
            <!-- END IMAGE -->

            <div class="white-space"></div>

            <!-- TEXT -->
            <div class="container-page text">
                <h3><?php echo LANG_MEMBER_TESTIMONIALS_STORY_4_TITLE ?></h3>
                <?php echo LANG_MEMBER_TESTIMONIALS_STORY_4_CONTENT ?>
            </div>
            <!-- END TEXT -->

        </div>
        <!-- END STORY 4 -->
        <!-- story 5 -->
        <div class="row story story-5">

            <!-- IMAGE -->
            <div class="image">
                <div class='img-wrapper'>
                    <?php echo LANG_MEMBER_TESTIMONIALS_STORY_5_IMAGE ?>
                </div>
            </div>
            <!-- END IMAGE -->

            <div class="white-space"></div>

            <!-- TEXT -->
            <div class="container-page text">
                <h3><?php echo LANG_MEMBER_TESTIMONIALS_STORY_5_TITLE ?></h3>
                <?php echo LANG_MEMBER_TESTIMONIALS_STORY_5_CONTENT ?>
            </div>
            <!-- END TEXT -->

        </div>

    </div>
    <!-- END STORY LIST -->

    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/member-testimonials.js"></script>