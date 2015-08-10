var memberTestimonials = (function() {
    var initModule = function() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
             $(".story-list").children().delay(1000).eq(0).show();
        } else {
            $(window).load(function() {
                // When the page has loaded
                $(".story-list").children().eq(0).show();
            });
        }


        $(document).ready(function() {

            // SLIDER
            $("#member-list .item .box").click(function(e) {

                e.preventDefault();

                currentClickHref = $(this).find("a").attr('href');
                currentActiveHref = $(this).parents('.carousel-inner').find(".item>.active>a").attr('href');

                // remove active class and hide active block
                $(this).parents('.carousel-inner').find(".item>.active").removeClass('active');
                $('.story-list').find('.story-' + currentActiveHref).stop().fadeOut();


                // add active class and show next block
                $(this).addClass("active");
                $('.story-list').find('.story-' + currentClickHref).stop().fadeIn(300);
            });
        });


    };
    return {
        initModule: initModule
    };
}());
memberTestimonials.initModule();