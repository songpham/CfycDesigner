<div class="container-fluid page find-a-club-page">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
<div class="row banner-top">
    <a href="javascript:void(0)" title="<?=LANG_BANNER_TITLE?>" alt="<?=LANG_BANNER_TITLE?>">
        <img class="img-responsive hidden-xs" src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/find-a-club-banner.jpg"  title="<?=LANG_BANNER_TITLE?>" alt="<?=LANG_BANNER_TITLE?>">
       <img class="hidden-lg hidden-md hidden-sm" src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/m-find-a-club-banner.jpg" title="<?=LANG_VIP?>" alt="<?=LANG_VIP?>">

    </a>
</div>
<div class="container-page">
	<div class="strike"><h2>Choose you city</h2></div>
    <h4 class="text-center col-sm-10 col-sm-offset-1" style="display:none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro voluptas, consequuntur atque, placeat quibusdam voluptates facilis omnis error dolores sunt totam itaque voluptatum modi odio, et dolor, nisi laborum magnam.</h4>
    <div class="clearfix"></div>
	<div class="row list-city">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
        		<div class="col-sm-4 city">
        		<a href="<?php echo USER_BASE_URL ?>/club-ha-noi<?php echo getSuffix('lang=' . $LANG) ?>">
                    <img src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/hanoi.jpg" class="img-responsive img-circle">
                    <h4>Ha Noi</h4>
        		</a>
        		</div>
        		<div class="col-sm-4 city">
        			<a href="<?php echo USER_BASE_URL ?>/club-hcm<?php echo getSuffix('lang=' . $LANG) ?>">
                    	<img src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/hcmc.jpg" class="img-responsive img-circle">
						<h4>Ho Chi Minh</h4>
        			</a>
        		</div>
        		<div class="col-sm-4 city">
        			<a href="<?php echo USER_BASE_URL ?>/club-da-nang<?php echo getSuffix('lang=' . $LANG) ?>">
                    	<img src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/danang.jpg" class="img-responsive img-circle">
						<h4>Da Nang</h4>
        			</a>
        		</div>
            </div>
        </div>
	</div>
	<div class="row list-city">
		<div class="col-md-10 col-md-offset-1">
           <div class="row">
                <div class="col-sm-4 city">
                	<a href="<?php echo USER_BASE_URL ?>/club-bien-hoa<?php echo getSuffix('lang=' . $LANG) ?>">
						<img src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/bienhoa.jpg" class="img-responsive img-circle">
						<h4>Bien Hoa</h4>
                	</a>
                </div>
                <div class="col-sm-4 city">
                	<a href="<?php echo USER_BASE_URL ?>/club-binh-duong<?php echo getSuffix('lang=' . $LANG) ?>">
                    	<img src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/binhduong.jpg" class="img-responsive img-circle">
						<h4>Binh Duong</h4>
                	</a>
                </div>
                <div class="col-sm-4 city">
                	
                    <img src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/nhatrang.jpg" class="img-responsive img-circle">
                    <h4>Nha Trang<br>Coming Soon</h4>
                </div>
           </div>
       </div>
	</div>

</div>
<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>