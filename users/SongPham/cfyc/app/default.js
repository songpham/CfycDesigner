$(document).ready(function () {
    // toggles menu
    $("#mobile-navigation-menu-close, #mobile-navigation-menu-toggle").click(function(e) {
        e.preventDefault();
        $("#mobile-navigation-wrapper").toggleClass("active");
    });
    /* Desktop Menu */
    var $desktopNavigation = $('#desktop-navigation');
    $desktopNavigation.find('.desktop-menu a').hover( function (e) { /* mouse over */
        e.preventDefault(e);
        var index = $(this).data('index');
        $desktopNavigation.find('.collapse:not(:eq(' + index + '))').collapse('hide');
        $desktopNavigation.find('.collapse:eq(' + index + ')').collapse('show');
    }, function (e) { /* mouse out */
        e.preventDefault(e);
        var index = $(this).data('index');
        $desktopNavigation.find('.collapse').collapse('hide');
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
});