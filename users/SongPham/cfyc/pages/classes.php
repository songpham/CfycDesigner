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
    <?php include USER_BASE_PATH . '/templates/classes_tmp_' . $LANG . '.php'; ?>
<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/classes.js"></script>