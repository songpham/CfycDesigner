<div class="container-fluid page services-page">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div id="banner" class="row banner-top">
        <div class="cta">
            <fieldset>
                <legend><?php echo LANG_SERVICES_HOME_BANNER_TITLE?></legend>
                <hr/>
                <span>
                    <?php echo LANG_SERVICES_HOME_BANNER_SUBTEXT ?>
                </span>
                <div class="red-btn">
                <a class="cta" href="<?php echo USER_BASE_URL ?>/vip-members<?php echo getSuffix('lang=' . $LANG) ?>" title=""> <?php echo LANG_SERVICES_HOME_BANNER_CTA ?></a>
                </div>
            </fieldset>
        </div>
    </div>
	<div class="container-page section1 row">
		<div class="strike"><h2><?php echo LANG_SERVICES_HOME_MAIN_TITLE ?></h2></div>
		<div class="text-box">
			<?php echo LANG_SERVICES_HOME_MAIN_INTRO ?>
		</div>
	
	
	</div> <!-- section 1 -->
	<div class="container-page section2 row-centered">
		<div class="strike"><h2><?php echo LANG_SERVICES_HOME_GROUP_TITLE ?> </h2></div>
		<div class="col-md-4 col-xs-12 col-centered">
			<img src="<?php echo USER_BASE_URL ?>/img/home/california-wow-our-services-2.jpg" alt="<?=LANG_YOGA?>" title="<?=LANG_YOGA?>">
			<div class="title">
			<h2><?=LANG_YOGA?></h2>
			<p><?php echo LANG_SERVICES_HOME_GROUP_YOGA ?></p>
			</div>		
		</div>
		<div class="col-md-4 col-xs-12 col-centered">
			<img src="<?php echo USER_BASE_URL ?>/img/home/california-wow-our-services-3.jpg" alt="<?=LANG_GROUP_EXERCISE?>" title="<?=LANG_GROUP_EXERCISE?>">
			<div class="title">
			<h2><?=LANG_GROUP_EXERCISE?></h2>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 col-centered">
			<img src="<?php echo USER_BASE_URL ?>/img/home/california-wow-our-services-4.jpg" alt="<?=LANG_DANCE?>" title="<?=LANG_DANCE?>">
			<div class="title">
			<h2><?=LANG_DANCE?></h2>
			</div>
		</div>
		<div class="whitespace"></div>

	</div> <!-- section 2 -->
	<div class="container-page section3">
		<div class="strike"><h2><?php echo LANG_SERVICES_HOME_PT_TITLE ?></h2></div>

			<div class="col-md-4 col-xs-12 col-centered">
			     <img src="<?php echo USER_BASE_URL ?>/img/home/california-wow-our-services-1.jpg" alt="<?=LANG_PERSONAL_TRAINNER?>" title="<?=LANG_PERSONAL_TRAINNER?>">
				<div class="title">
				<h2><?=LANG_PERSONAL_TRAINNER ?></h2>
				<p><?php echo LANG_SERVICES_HOME_GROUP_TITLE ?></p>
			</div>		
		</div>
		<div class="col-md-4 col-xs-12 col-centered">
            <img src="<?php echo USER_BASE_URL ?>/img/home/california-wow-our-services-5.jpg" alt="<?=LANG_DYNAMIC_STRETCHING?>" title="<?=LANG_DYNAMIC_STRETCHING?>">
			<div class="title">
			<h2><?=LANG_DYNAMIC_STRETCHING?></h2>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 col-centered">
			<img src="<?php echo USER_BASE_URL ?>/img/home/california-wow-our-services-6.jpg" alt="<?=LANG_KICKFIT?>" title="<?=LANG_KICKFIT?>">

			<div class="title">
			<h2><?=LANG_KICKFIT?></h2>
			</div>
		</div>
	<div class="whitespace"></div>
	</div> <!-- section 3 -->
		<div class="container-page section4">
	
	
	</div> <!-- section 4 -->
		<div class="container-page section5">
	
	
	</div> <!-- section 5 -->
<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>