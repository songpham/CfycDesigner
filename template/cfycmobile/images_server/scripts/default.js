var utils = (function () {
    'use strict';
    var isEmpty,countProperty, hammerOptions, hammerPrevent;
    countProperty = function (obj) {
        var count = 0, k;
        for (k in obj) {
            if (obj.hasOwnProperty(k)) {
                ++count;
            }
        }
        return count;
    };
    isEmpty = function (value, allowEmptyString) {
        return (value === null) || (value === 'null') || (value === undefined) || (value === 'undefined') || (!allowEmptyString ? value === '' : false) || (typeof (value) === 'object' && countProperty(value) === 0) || (value instanceof jQuery && value.length === 0);
    };
    hammerOptions = {
        dragLockToAxis: false,
        dragBlockHorizontal: true,
        dragMinDistance: 1,
        dragLockMinDistance: 1
    };
    hammerPrevent = function (event) {
        /**
         * support dragdown and dragup
         */
        event.preventDefault();
    };
    return {
        isEmpty: isEmpty,
        hammerOptions: hammerOptions,
        hammerPrevent: hammerPrevent
    };
}());
var barItems = (function () {
    'use strict';
    var reCalOffset, initModule, refreshOnResize,
        configMap = {
            speed: 'fast'
        },
        stateMap = {
            $container: null,
            ul: null,
            li: null,
            widthBase: 0,
            stepPx: 10,
            queue: false,
            lastDirection: null,
            isAnimating: false,
            firstLeft: 0
        };
    reCalOffset =  function (distance, direction) {
        var result = 0;
        if (direction === 'left') {
            result = parseInt(stateMap.ul.css('left'), stateMap.stepPx) + stateMap.ul.width() - distance;
        } else {
            result = parseInt(stateMap.ul.css('left'), stateMap.stepPx) + distance - stateMap.$container.width();
        }
        return result;
    };
    refreshOnResize =  function () {
        var ulWidth = 0,
            activeItem = stateMap.ul.find('.active'),
            subParentItem = stateMap.ul.find('.sub-parent'),
            leftVal = 0,
            activedMenu = null;
        stateMap.li.each(function () {
            ulWidth += $(this).outerWidth(true);
        });
        stateMap.ul.width(ulWidth + 1);
        setTimeout(function () {
            /* calculate stateMap.ul menu width */
            stateMap.widthBase = parseInt(stateMap.$container.width() / 2, stateMap.stepPx);
            if (utils.isEmpty(activeItem) === false) {
                activedMenu = activeItem;
            } else if (utils.isEmpty(subParentItem) === false) {
                activedMenu = subParentItem;
            }
            if (utils.isEmpty(activedMenu) === false) {
                leftVal -= activedMenu.position().left; /* move to menu active when refresh */
                if (activedMenu.index() > 0) { /* if not first => move to left by stateMap.stepPx */
                    leftVal -= stateMap.stepPx;
                }
                stateMap.ul.css('left', leftVal);
            }
            var distance = 30;
            stateMap.ul.animate({ left: '+=' + distance + 'px'}, {
                duration: 'normal',
                queue: stateMap.queue,
                always: function () {
                    $(this).animate({ left: '-=' + (distance * 2) + 'px'}, {
                        duration: configMap.speed,
                        queue: stateMap.queue,
                        always: function () {
                            $(this).animate({ left: '+=' + (distance + 1) + 'px'}, {
                                duration: configMap.speed,
                                queue: stateMap.queue
                            });
                        }
                    });
                }
            });
        }, 0);
    };
    initModule =  function ($container) {
        stateMap.$container = $container;
        /**
         * calculate ul menu width
         */
        var int = false,
            div = stateMap.$container.find('div.holder-bar-items'),
            barArrow = stateMap.$container.parent().next().find('.bar-arrow.right');
        stateMap.ul = div.find('ul');
        stateMap.li = stateMap.ul.find('li');
        /**
         * handle orientation change
         */
        refreshOnResize();
        /**
         * fix bug small screen load
         */
        setTimeout(function () {
            refreshOnResize();
        }, 0);
        $(window).resize(refreshOnResize);
        /**
         * handle click on arrow right
         */
        if (utils.isEmpty(barArrow) === false) {
            var distance = stateMap.stepPx * 10,
                callbackTab = function (event) {
                    int = false;
                    if (event.type === 'tap') {
                        int = true;
                    }
                    stateMap.ul.animate({ left: "-=" + distance }, {
                        duration: configMap.speed,
                        queue: stateMap.queue,
                        done: function () {
                            if (reCalOffset(distance, 'left') < 0) {
                                stateMap.ul.animate({ left: '-' + (stateMap.ul.outerWidth() - div.outerWidth()) + 'px' }, {
                                    duration: configMap.speed,
                                    queue: stateMap.queue,
                                    done: function () {
                                        setTimeout(function () {
                                            if (int === false) {
                                                callbackTab(event);
                                            }
                                        }, 500);
                                    }
                                });
                            } else {
                                setTimeout(function () {
                                    if (int === false) {
                                        callbackTab(event);
                                    }
                                }, 500);
                            }
                        }
                    });
                };
            barArrow
                .hammer(utils.hammerOptions)
                .on('hold tap', callbackTab)
                .on('release', function () {
                    int = true;
                });
        }
        /**
         * handle swipe right and left
         */
        div
            .hammer(utils.hammerOptions)
            .on("drag", function (event) {
                event.preventDefault();
            })
            .on("dragstart", function (event) {
                stateMap.firstLeft = parseInt(stateMap.ul.css('left'), 10);
            })
            .on("dragright dragleft", function (event) {
                var direction = event.gesture.direction,
                    distance = event.gesture.distance,
                    duration = event.gesture.deltaTime,
                    leftValue;
                /* if left or right and inside range => accept */
                if (direction === 'left') {
                    distance = -distance;
                }
                leftValue = stateMap.firstLeft + distance;
                stateMap.ul.animate({
                    left: leftValue
                }, {
                    duration: duration / 1000
                });
            })
            .on("dragend", function(event) {
                var direction = event.gesture.direction,
                    distance = event.gesture.distance,
                    duration = event.gesture.deltaTime;
                if (direction === 'left' && reCalOffset(distance, direction) <= stateMap.widthBase) {
                    var div = stateMap.$container.find('div.holder-bar-items');
                    stateMap.ul.animate({ left: '-' + (stateMap.ul.outerWidth() - div.outerWidth()) + 'px' }, {
                        duration: configMap.speed,
                        queue: stateMap.queue
                    });
                } else if (direction === 'right' && reCalOffset(distance, direction) >= -stateMap.widthBase) {
                    stateMap.ul.animate({ left: 0 }, {
                        duration: configMap.speed,
                        queue: stateMap.queue
                    });
                }
            });
    };
    return {
        initModule: initModule
    };
}());
var bannerThumbnail = (function () {
    'use strict';
    var initModule, doFlipCard,
        configMap = {
            flipXClass: 'flippedx',
            flipYClass: 'flippedy'
        },
        stateMap = {
            $container: null,
            flip: null
        };
    doFlipCard = function () {
        var classRandom, imgRandom = Math.floor((Math.random() * (stateMap.flip.length))),  /* random from 1 -> 3 */
            currentFlipCard = stateMap.flip.eq(imgRandom - 1).find(".card");
        if (currentFlipCard.hasClass(configMap.flipXClass)) {
            currentFlipCard.removeClass(configMap.flipXClass);
        } else if (currentFlipCard.hasClass(configMap.flipYClass)) {
            currentFlipCard.removeClass(configMap.flipYClass);
        } else {
            classRandom = Math.floor((Math.random() * (2)) + 1); /* random from 1 -> 2 */
            if (classRandom === 1) {
                currentFlipCard.addClass(configMap.flipXClass);
            } else {
                currentFlipCard.addClass(configMap.flipYClass);
            }
        }
    };
    initModule =  function ($container) {
        stateMap.$container = $container;
        stateMap.flip       = stateMap.$container.find('.flip');
        setInterval(doFlipCard, 4000);
    };
    return {
        initModule: initModule
    };
}());
var bannerCenturyon = (function () {
    'use strict';
    var initModule,
        stateMap = {
            $container: null
        };
    initModule =  function ($container) {
        stateMap.$container = $container;
        var carouselDiv = stateMap.$container.find('.carousel');
        carouselDiv.carousel({
            interval: 4000
        });
        /**
         * handle swipe right and left, tap
         */
        stateMap.$container
            .hammer(utils.hammerOptions)
            .on("dragright dragleft", utils.hammerPrevent)
            .on("dragend", function(event) {
                if (event.gesture.direction === 'right') {
                    carouselDiv.carousel('prev');
                } else if (event.gesture.direction === 'left') {
                    carouselDiv.carousel('next');
                }
            })
            .on("tap", function(event) {
                var idDetail = $(event.target).data('id-detail');
                if (utils.isEmpty(idDetail) === false && utils.isEmpty($('#' + idDetail)) === false) {
                    $('#' + idDetail).modal();
                }
            });
    };
    return {
        initModule: initModule
    };
}());
var barSettings = (function () {
    'use strict';
    var initModule,
        configMap = {
            widthMoving: 80
        },
        stateMap = {
            $container: null,
            isBarSettingShow: false
        };
    initModule =  function ($container) {
        stateMap.$container = $container;
        var outSide = stateMap.$container.find('.outside'),
            canvasNavigation = stateMap.$container.find('.canvas-navigation');
        stateMap.$container.find('.bar-setting').click(function () {
            if (stateMap.isBarSettingShow === true) {
                outSide.animate({ left: 0});
                canvasNavigation.animate({ right: '-' + configMap.widthMoving + '%'});
                stateMap.isBarSettingShow = false;
            } else {
                outSide.animate({ left: '-' + configMap.widthMoving + '%'});
                canvasNavigation.animate({ right: 0});
                stateMap.isBarSettingShow = true;
            }
        });
        canvasNavigation.find('li')
            .hammer(utils.hammerOptions)
            .on("dragright", utils.hammerPrevent)
            .on("tap", function(event) {
                var a = $(event.target).attr('href');
                if (utils.isEmpty(a) === false) {
                    window.location.href = a;
                }
            })
            .on("dragend", function(event) {
                if (event.gesture.direction === 'right') {
                    outSide.animate({ left: 0});
                    canvasNavigation.animate({ right: '-' + configMap.widthMoving + '%'});
                }
            });
    };
    return {
        initModule: initModule
    };
}());
var more = (function () {
    'use strict';
    var onButtonClicked,
        configMap = {};
    onButtonClicked = function ($container, $moreContainer) {
        var moreButton = $moreContainer || $('.more');
        moreButton.click(function () {
            $container.find('.hidden').removeClass('hidden');
            moreButton.hide();
        });
    };
    return {
        onButtonClicked: onButtonClicked
    };
}());
function setCookie (cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie (cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
    }
    return "";
}
$(document).ready(function () {
    barSettings.initModule($('.container-fluid'));
    barItems.initModule($('.bar-items'));
    bannerThumbnail.initModule($('.banner-thumbnail'));
    bannerCenturyon.initModule($('.banner-centuryon'));
    more.onButtonClicked($('.list-trainer'));
    more.onButtonClicked($('.article-other'));
    more.onButtonClicked($('.member'));
    /**
     * support responsive video Youtube
     */
    $("iframe, object, embed").wrapAll( "<div class='video-container' />");
    /**
     * fancybox
     */
    var stringFancyBox = '.fancybox > a';
    if ($(stringFancyBox).fancybox) {
        var fancyBoxOptions = {
            closeBtn: false,
            helpers: {
                buttons: {
                    tpl: '<div id="fancybox-buttons"><ul style="width: 74px"><li><a class="btnToggle" title="Toggle size" href="javascript:;"></a></li><li><a class="btnClose" title="Close" href="javascript:;"></a></li></ul></div>'
                }
            }
        };
        /**
         * support older browsers exception
         */
        if (window.navigator.userAgent.indexOf("HTC_Desire_500 Build/JZO54K") !== -1) {
            fancyBoxOptions.fitToView = false;
        }
        $(stringFancyBox).attr({
            'rel': 'gallery'
        });
        if ($(stringFancyBox).length < 2) {
            fancyBoxOptions.arrows = false;
        }
        $(stringFancyBox).fancybox(fancyBoxOptions);
    }
});