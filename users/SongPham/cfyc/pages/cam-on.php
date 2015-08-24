<div class="container-fluid page thank-you-page">
<?php include USER_BASE_PATH . '/templates/nav-bar.php'; ?>
    <div class="contentOne row row-centered">
                <div class="col-md-6 col-centered ">
                    <div class="text-box">
                        <h2><?php echo LANG_THANK_YOU_PAGE_TITLE ?></h2>
                        <p><?php echo LANG_THANK_YOU_PAGE_SUBTITLE ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-centered">
                    <div class="video">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ol1nuRXaVcM"  frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p><i><?php echo LANG_THANK_YOU_PAGE_VIDEO_DESC ?></i></p>
                    </div>
                </div>
            </div> <!-- end contentOne -->
<div class="container-page">
            <div class="wrapper">
            <!---CONTENT-ONE-->
            <div class="clearfix"></div>
            <!---CONTENT-FIVE-->
            <div class="contentFive">
                <div class="col-md-12 col">
                    <div class="strike"><h2><?php echo LANG_THANK_YOU_PAGE_SECOND_TITLE ?></h2></div>
                    <hr/>
                </div>
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
           </div> <!-- row -->
       </div> <!-- col -->
    </div>
</div> <!-- end content Five -->
</div> <!-- end wrapper -->
</div><!-- main content cointainer-page -->
     
<?php include USER_BASE_PATH . '/templates/footer-bar.php'; ?>
</div> <!-- ty page -->
<?php include USER_BASE_PATH . '/templates/footer.php'; ?>