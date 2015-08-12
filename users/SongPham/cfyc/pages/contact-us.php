<?
/**
 * Contact us page
 */
?>
<div class="container-fluid page contact-us-page">
    <?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="top-content row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
          <div class="carousel-inner banner-top" role="listbox"> 

	                <div class="cta">
			            <fieldset>
			                <legend><?php echo LANG_CTA_CONTACT_US_TITLE_lEGEND ?></legend>
			                <hr/>
			               
			                <span><?php echo LANG_CTA_CONTACT_US_TEXT ?></span>
			                <div class="red-btn">
			                <a class="cta" href="<?php echo USER_BASE_URL ?>/vip-members<?php echo getSuffix('lang=' . $LANG) ?>" title=""> <?php echo LANG_CFYC_MEMBERSHIPS_BANNER_CTA ?></a>
			                </div>
			            </fieldset>
					</div>

           </div> 
        </div>
    </div>
    <div class="contact container">
        <div class="col-lg-offset-2 col-md-offset-2 col-md-8 col-lg-8 col-sm-12 col-xs-12">
            <h1 class="tilte"><?php echo LANG_CONTACT_US_CONTACT_US ?></h1>
            <p><?php echo LANG_CONTACT_REGISTER_NOW_SUBTITLE ?></p>
            <div id="form">
	            <?php if ($LANG == 'vn') { ?>
				<script type="text/javascript" src="http://app.getresponse.com/view_webform.js?wid=13233605&amp;u=kKTV"></script>
				<?php } else if ($LANG == 'en') { ?>
				<script type="text/javascript" src="http://app.getresponse.com/view_webform.js?wid=13233705&u=kKTV"></script>
				<?php } ?>
            </div>
            <p><?php echo LANG_CONTACT_US_MORE_INFO ?></p>

            <a href="tel:+84862915999" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" title="Phone">
                <img src="<?php echo USER_BASE_URL ?>/img/contact-us/phone-icon.png" alt="Phone">
                <span>(08) 6291 5999</span>
            </a>
            <a href="mailto:info@cfyc.com.vn" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" title="Mail">
                <img src="<?php echo USER_BASE_URL ?>/img/contact-us/mail-icon.png" alt="Mail">
                <span>info@cfyc.com.vn</span>
            </a>
            <a href="http://cfyc.com.vn" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" title="Website">
                <img src="<?php echo USER_BASE_URL ?>/img/contact-us/web-icon.png" alt="Website">
                <span>cfyc.com.vn</span>
            </a>
            <a href="http://facebook.com/cfycvn" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" title="Facebook" target="_blank">
                <img src="<?php echo USER_BASE_URL ?>/img/contact-us/face-icon.png" alt="Facebook">
                <span>facebook.com/cfycvn</span>
            </a>
        </div>
    </div>
    <?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>
<script src="<?php echo USER_BASE_URL ?>/js/scripts/contact-us.js"></script>