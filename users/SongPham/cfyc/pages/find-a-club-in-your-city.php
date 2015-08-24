<div class="container-fluid page find-a-club-page">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
<div class="row banner-top">

</div>
<div class="container-page">
    <div class="strike"><h2><?php echo LANG_PAGE_CHOOSE_CITY_TITLE ?></h2></div>
    <div class="clearfix"></div>
    <div class="row list-city">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-sm-4 city">
                <a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-ha-noi' . getSuffix('lang=' . $LANG)) ?>">
                    <img src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/hanoi.jpg" class="img-responsive img-circle">
                    <h4>Ha Noi</h4>
                </a>
                </div>
                <div class="col-sm-4 city">
                    <a href="<?php echo USER_BASE_URL ?>/<?php echo createUrl('club-hcm' . getSuffix('lang=' . $LANG)) ?>">
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
				<a href="<?php echo USER_BASE_URL ?>/club-nha-trang<?php echo getSuffix('lang=' . $LANG) ?>">
                    <img src="<?php echo USER_BASE_URL ?>/img/find-a-club-in-your-city/nhatrang.jpg" class="img-responsive img-circle">
                    <h4>Nha Trang</h4>
				</a>
                </div>
           </div>
       </div>
    </div>

</div>
<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div>
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>