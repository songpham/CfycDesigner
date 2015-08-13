var celebrityTrainning = (function() {
    var initModule = function() {


        $(".red-btn a").click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(".booktitle").offset().top - 70
            }, 700);
        });

    };
    return {
        initModule: initModule
    };
}());
celebrityTrainning.initModule();
