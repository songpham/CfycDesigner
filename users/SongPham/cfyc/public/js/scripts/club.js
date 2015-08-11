var clubPage = (function() {
    var initModule = function() {


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

        })

        $(".club-list-mobile a").click(function(e) {
            e.preventDefault();

            // display club selected
            $(this).parents(".club-list-mobile").find("button").html($(this).text() + ' <span class="caret"></span>');

            // hide previous clubb and display club selected
            $(".quan").hide(0);
            clickClassName = $(this).attr("href");
            $("." + clickClassName).show(0);

        });
    };
    return {
        initModule: initModule
    };
}());
clubPage.initModule();