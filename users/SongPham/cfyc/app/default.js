$(document).ready(function () {
    // toggles menu
    $("#mobile-navigation-menu-close, #mobile-navigation-menu-toggle").click(function(e) {
        e.preventDefault();
        $("#mobile-navigation-wrapper").toggleClass("active");
    });
    /* Desktop Menu */
    var $desktopNavigation = $('#desktop-navigation'),
        isDesktopMenuWorking = false;
    $desktopNavigation.find('.desktop-menu a').click(function (e) {

    	$(this).closest('ul').find('.active').removeClass('active');
    	$(this).addClass('active');
        if (isDesktopMenuWorking === false) {
            var $me = $(this),
                index = $me.data('index');
            if (isNaN(index) === false) {
                e.preventDefault(e);
                    $collapse = $desktopNavigation.find('.collapse:eq(' + index + ')'),
                    $itemCollapse = $desktopNavigation.find('.collapse.in');
                isDesktopMenuWorking = true;
                if ($itemCollapse.length > 0) {
                    if ($collapse.hasClass('in') === false) {
                        setTimeout(function () {
                                $desktopNavigation.find('.collapse:eq(' + index + ')').collapse('show');
                                setTimeout(function () {
                                    isDesktopMenuWorking = false;
                                }, 300);
                        }, 500);
                    } else {
                        setTimeout(function () {
                            isDesktopMenuWorking = false;
                        }, 300);
                    }
                    $desktopNavigation.find('.collapse').collapse('hide');

                } else {
                    $desktopNavigation.find('.collapse:eq(' + index + ')').collapse('show');
                    setTimeout(function () {
                        isDesktopMenuWorking = false;
                    }, 300);
                }
            }
        }
    });
    /* Mobile Menu */
    $('#mobile-navigation-wrapper .list-group-item-success').click(function (e) {
        var $me = $(this),
            $glyphicon = $me.find('.glyphicon'),
            classGlyphiconRightName = 'glyphicon-chevron-right',
            classGlyphiconDownName = 'glyphicon-chevron-down';
        if ($glyphicon.hasClass(classGlyphiconRightName)) {
           $glyphicon
                .removeClass(classGlyphiconRightName)
                .addClass(classGlyphiconDownName);
            $me.next('.collapse').addClass("in");
        } else {
            $glyphicon
                .removeClass(classGlyphiconDownName)
                .addClass(classGlyphiconRightName);
            $me.next('.collapse').removeClass("in");
        }
    });
    /* fix bug when window resizes, the navigation has many spaces */
    var refreshOnResize = function () {
        if (window.innerWidth < '1024') {
            $('.container-fluid.page').css('top', $('.logo').height() - 21 + 'px');
        }else{
            // Ho Hoang Lam add this to make sure when user resize window back to desktop view, content not have any padding, it's have correct position
            $('.container-fluid.page').css('top', '48px');
        }
    };
    refreshOnResize();
    $(window).resize(refreshOnResize);
	$('[data-toggle="tooltip"]').tooltip();

    /*Scroll effect*/
    jQuery('.scroll').on('click', function (e) {
        e.preventDefault();
        var target = this.hash, $target = jQuery(target);
        jQuery('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 700, 'swing', function () {
            window.location.hash = target;
        });
    });
    
  // GOOGLE TAG MANAGER   -------------------------------------------------------------------------\\\ 
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KJ9WBZ');
    // End Google Tag Manager -------------------------------------------------------------------------\\\

//FACEBOOK -------------------------------------------------------------------------\\\
        (function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '1490103637908386']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
//end FB  -------------------------------------------------------------------------\\\


//Unknown
         var lead = {
             transaction : 'TransactionID'  // unique transaction ID
         };


// Scoiomantic  -------------------------------------------------------------------------\\\
         (function(){
             var s   = document.createElement('script');
             var x   = document.getElementsByTagName('script')[0];
             s.type  = 'text/javascript';
             s.async = true;
             s.src   =
     ('https:'==document.location.protocol?'https://':'http://')
                     + 'ap-sonar.sociomantic.com/js/2010-07-01/adpan/cfyc-vn';
             x.parentNode.insertBefore( s, x );
         })();
// end sociomatic  -------------------------------------------------------------------------\\\

});