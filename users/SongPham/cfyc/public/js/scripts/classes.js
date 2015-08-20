var classes = (function () {
    var initModule = function () {
        $('.firstcol a[data-toggle="tab"]').on('click',function(){
            animateTo($('.secondcol'));
        });
    };
    return {
        initModule: initModule
    };
}());

$(document).ready(function($) {
    classes.initModule();
});