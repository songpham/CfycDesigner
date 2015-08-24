var celebritymemberPage = (function () {
    var initModule = function () {
        /**
         * start set up celebrities
         */
        var $containerContent = $('#tab-content'),
            $celebItems = $containerContent.find('.celeb-items'),
            $celebItemLinks = $celebItems.children('a'),
            $celebrityInfoBlock = $('.celebrity-info-block'),
            $celebrityInfoBlockItems = $('.celebrity-info-block').children();
        if ($celebItems.length > 0) {
            var i = 0;
            $celebItems.each(function () {
                var $me = $(this),
                    $tmpLink = $me.children('a').filter('a'),
                    index = i,
                    matchClassName = 'celeb-' + index;
                if ($tmpLink.length > 0) {
                    $tmpLink.attr('href', '.' + matchClassName);
                }
                $tmpLink.on('click', function () {
                    var $link = $(this);
                    $celebItemLinks.removeClass('active');
                    setTimeout(function () {
                        $link.addClass('active');
                        /* animate to the block */
                        animateTo($celebrityInfoBlock);
                    });
                });
                $celebrityInfoBlockItems.eq(index).addClass(matchClassName);
                i++;
            });
        }
        setTimeout(function () {
            var json = GET_VAR,
                obj = JSON.parse(json),
                celeb = obj["celeb"],
                celebIndex = celeb || 0;
            if (celebIndex && isNaN(celebIndex) === true) {
                celebIndex = 0;
            }
            var $tmpLink = $celebItems.find('> *[href=".celeb-' + celebIndex +'"]').addClass('active');
            $celebrityInfoBlock.find('> *:eq(' + celebIndex + ')').addClass('active in');
            /* active item celebrity */
            $tmpLink.closest('.item').addClass('active');
            /* animate to the block */
            if (celeb > -1) {
                animateTo($celebrityInfoBlock);
            }
        });
    };
    return {
        initModule: initModule
    };
}());
$(document).ready(function($) {
    celebritymemberPage.initModule();
});