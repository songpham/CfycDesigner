var homePage = (function () {
    var initModule = function () {
        $('.trainner_photo img').on('click',function(){
            var trainner_name = $(this).attr('id');
            $('.trainner_photo img,.trainner_text div').removeClass('active');
            $(this).addClass('active');
            $('.'+trainner_name).addClass('active');
            var trainner_text = $('.trainner_text');
            animateTo(trainner_text);
        });
    };
    return {
        initModule: initModule
    };
}());

$(document).ready(function($) {
    homePage.initModule();
});