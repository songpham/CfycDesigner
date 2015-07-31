var celebrityTrainning = (function() {
    var initModule = function() {

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        $("body").load(function() {
alert(1)
        });

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            $(".trainer-list-block").children().hide();
            $(".trainer-list-block").children().eq(0).show();
        } else {
            $(window).load(function() {
                // When the page has loaded
                $(".trainer-list-block").children().hide();
                $(".trainer-list-block").children().eq(0).show();
            });
        }

        $(document).ready(function() {




            // ACTIVE SLIDER PLUGIN
            $('.pgwSlider').pgwSlider({
                transitionDuration: 350
            });

            // SLIDER AREA
            $(".banner ul li").click(function(e) {

                e.preventDefault();

                currentIndex = $(this).index();
                currentActiveIndex = $(this).parent().find(".active").index();

                // remove active class and hide active block
                $(this).parent().find(".active").removeClass('active');
                $('.trainer-list-block').children().eq(currentActiveIndex).fadeOut(0);

                // add active class and show next block
                $(this).addClass('active');
                $('.trainer-list-block').children().eq(currentIndex).fadeIn(100);


            });


        });



    };
    return {
        initModule: initModule
    };
}());
celebrityTrainning.initModule();
