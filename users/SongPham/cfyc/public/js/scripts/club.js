var clubPage = (function() {
    var initModule = function() {
        $("#club-list .box").click(function(e) {

            e.preventDefault();

            // remove actived and hide club info
            actived = $(this).parents(".item").find(".active");
            activedClassName = actived.find("a").attr("href");
            actived.removeClass("active");
            $("." + activedClassName).hide(0);


            // add active class and show club info
            $(this).addClass("active");
            clickClassName = $(this).find("a").attr("href");
            $("." + clickClassName).show(0);

            // scroll to the infomation div when click
            $('html, body').animate({
                scrollTop: $("." + clickClassName).offset().top - 70
            }, 700);

        })
    };
    return {
        initModule: initModule
    };
}());
clubPage.initModule();