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

            // GRAYSCALE ALL IMAGE
            grayscale($("#carousel-example-generic .item .box a img"));
            grayscale.reset($("#carousel-example-generic .item .active a img"));


            // SLIDER
            $("#carousel-example-generic .item .box a").click(function(e) {

                e.preventDefault();

                currentClickHref = $(this).attr('href');
                currentActiveHref = $(this).parents('.carousel-inner').find(".item>.active>a").attr('href');

                // remove active class and hide active block
                grayscale($(this).parents('.carousel-inner').find(".item .active a img"));
                $(this).parents('.carousel-inner').find(".item>.active").removeClass('active');
                $('.story-list').find('.story-' + currentActiveHref).stop().fadeOut();


                // add active class and show next block
                grayscale.reset($(this).find('img'));
                $(this).parent().addClass("active");
                $('.story-list').find('.story-' + currentClickHref).stop().fadeIn(300);


            });

            // GRAY SCALE
            $("#carousel-example-generic .item .box a img").hover(function() {
                grayscale.reset($(this));
            }, function() {
                if (!$(this).parent().parent().hasClass('active')) {
                    grayscale($(this));
                }
            });
        });


    };
    return {
        initModule: initModule
    };
}());
memberTestimonials.initModule();