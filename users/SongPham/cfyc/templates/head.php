<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, target-densityDpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="keywords" content=""/>
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="<?php echo USER_BASE_URL ?>/img/favicon.ico">
	<link rel="canonical" href="http://www.cfyc.com.vn/" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.cfyc.com.vn/" />
	<meta property="og:image" content="http://www.cfyc.com.vn/phn_temp/temp1/images/LogoCaliforniaQuare.png" />
	<meta property="og:site_name" content="California Fitness & Yoga" />
    <meta property="fb:app_id" content="460384730738451" />
    <!-- CSS -->
    <link href="<?php echo USER_BASE_URL ?>/css/vendor.min.css" rel="stylesheet">
    <link href="<?php echo USER_BASE_URL ?>/css/bundle.min.css?v=1.0" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    var TEMPLATE_DIRECTORY_URI = '<?php echo USER_BASE_URL ?>';
    </script>
    <script src="<?php echo USER_BASE_URL ?>/js/vendor.min.js"></script>
    <?php
    $realURI = rtrim(preg_replace('/\\?.*/', '', str_replace(strtolower(USER_BASE_URL . '/'), NULL, strtolower($_SERVER['REQUEST_URI']))), '/');
    if(isset($realURI)) { 
		switch($realURI) {
        case 'cam-on':
        ?>
        <!-- Facebook Conversion Code for Webiste lifestyle - thank you page -->
			<script>(function() {
			  var _fbq = window._fbq || (window._fbq = []);
			  if (!_fbq.loaded) {
			    var fbds = document.createElement('script');
			    fbds.async = true;
			    fbds.src = '//connect.facebook.net/en_US/fbds.js';
			    var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(fbds, s);
			    _fbq.loaded = true;
			  }
			})();
			window._fbq = window._fbq || [];
			window._fbq.push(['track', '6036772754880', {'value':'0.00','currency':'USD'}]);
			</script>
			<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6036772754880&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

        
        <?php
            break;
		}
	} 
?></head>