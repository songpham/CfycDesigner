$(document).ready(function () {
    // toggles menu
    $("#mobile-navigation-menu-close, #mobile-navigation-menu-toggle").click(function(e) {
        e.preventDefault();
        $("#mobile-navigation-wrapper").toggleClass("active");
    });
    /* Desktop Menu */
    var $desktopNavigation = $('#desktop-navigation');
    $desktopNavigation.find('.desktop-menu a').mouseover( function (e) { /* mouse over */
        e.preventDefault(e);
        var index = $(this).data('index');
        setTimeout(function () {
            $desktopNavigation.find('.collapse:not(:eq(' + index + '))').collapse('hide');
            $desktopNavigation.find('.collapse:eq(' + index + ')').collapse('show');
        }, 500);
    }).mouseout( function (e) { /* mouse over */
        e.preventDefault(e);
        var index = $(this).data('index');
        setTimeout(function () {
            $desktopNavigation.find('.collapse:eq(' + index + ')').collapse('hide');
        }, 500);
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
});