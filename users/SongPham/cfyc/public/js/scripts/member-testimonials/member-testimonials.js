var memberTestimonials = (function() {
    var initModule = function() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            // set delay
        } else {
            $(window).load(function() {
                // When the page has loaded
                $(".story-list").children().eq(0).show();
            });
        }


        $(document).ready(function() {

            // SLIDER
            $("#carousel-example-generic .item .box a").click(function(e) {

                e.preventDefault();

                currentClickHref = $(this).attr('href');
                currentActiveHref = $(this).parents('.carousel-inner').find(".item>.active>a").attr('href'); 

                // remove active class and hide active block
                $(this).parents('.carousel-inner').find(".item>.active").removeClass('active');
                $('.story-list').find('.story-' + currentActiveHref).stop().fadeOut();

                // add active class and show next block
                $(this).parent().addClass("active");
                $('.story-list').find('.story-' + currentClickHref).stop().fadeIn(300);

            });


        });


    };
    return {
        initModule: initModule
    };
}());
memberTestimonials.initModule();