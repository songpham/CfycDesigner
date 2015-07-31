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
        e.preventDefault(e);
        if (isDesktopMenuWorking === false) {
            var index = $(this).data('index'),
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
            $('.container-fluid.page').css('top', $('.logo').height() + 'px');
        }
    };
    refreshOnResize();
    $(window).resize(refreshOnResize);
	$('[data-toggle="tooltip"]').tooltip();
});