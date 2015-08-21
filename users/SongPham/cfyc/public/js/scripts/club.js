var clubPage = (function() {
    var setUpSource, initModule;
    setUpSource = function (clickClassName) {
        var districtActiveClassName = clickClassName || $('.club-list .active').children('a').attr('href'),
            quanClassName = 'quan',
            screenClassName, $imgs,
            getScreenClassName = function () {
                if (window.innerWidth > '768') { /* desktop */
                    screenClassName = 'desktop';
                } else { /* mobile */
                    screenClassName = 'mobile';
                }
            }
            setSource = function (parentClassName) {
                $imgs = $(parentClassName).find('.carousel.slide.' + screenClassName).find('img:not([src])');
                $imgs.each(function () {
                    var $me = $(this);
                    $me.attr('src', $me.data('src'));
                });
            };
        getScreenClassName();
        setSource('.' + quanClassName + ((districtActiveClassName && ('.' + districtActiveClassName)) || ''));
    };
    initModule = function() {
        setUpSource();
        $(".club-list a").click(function(e) {
            e.preventDefault();
            // remove actived and hide club info
            actived = $(this).parents(".nav").find("li.active");
            activedClassName = actived.find("a").attr("href");
            actived.removeClass("active");
            $("." + activedClassName).hide();
            // add active class and show club info
            $(this).parent().addClass("active");
            clickClassName = $(this).attr("href");
            $("." + clickClassName).show();
            setUpSource(clickClassName);
        })
        $(".club-list-mobile a").click(function(e) {
            e.preventDefault();
            // display club selected
            $(this).parents(".club-list-mobile").find("button").html($(this).text() + ' <span class="caret"></span>');
            // hide previous clubb and display club selected
            $(".quan").hide(0);
            clickClassName = $(this).attr("href");
            $("." + clickClassName).show(0);
            setUpSource(clickClassName);
        });
    };
    return {
        initModule: initModule
    };
}());
clubPage.initModule();