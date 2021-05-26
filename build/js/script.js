"use strict";

var blocks = Array.from(document.querySelectorAll('.section')),
    bodyContainer = document.querySelector('body'),
    headerSection = $('.header-section'),
    mainMenuWrap = $('.main-menu-wrap'),
    menuBurger = $('.tog-nav');

window.addEventListener('scroll', function () {
    if (window.scrollY > 200) {
        headerSection.removeClass('bg');
        mainMenuWrap.removeClass('show');
        menuBurger.removeClass('active');
    }

    blocks.forEach(function (item, index) {
        if (getVisiblePart(item)) {
            if ($(window).width() > 767) {
                bodyContainer.dataset.active = item.dataset.theme;
                return false;
            }
        }
    });
});

function getVisiblePart(element) {
    if (element.getBoundingClientRect().top < 120) {
        return true;
    }
} //MUTE-UNMUTE VIDEO


var video = document.getElementById('intro-video'),
    videUnMute = document.querySelector('.intro-video__unmute'),
    videMute = document.querySelector('.intro-video__mute');


    if (typeof video != 'undefined' && video != null) {
        function triggerEvent(el, type) {
            // IE9+ and other modern browsers
            if ('createEvent' in document) {
                var e = document.createEvent('HTMLEvents');
                e.initEvent(type, false, true);
                el.dispatchEvent(e);
            } else {
                // IE8
                var e = document.createEventObject();
                e.eventType = type;
                el.fireEvent('on' + e.eventType, e);
            }
        }

        triggerEvent(videUnMute, 'click');
    }


    if (typeof video != 'undefined' && video != null) {

        videUnMute.addEventListener('click', function (e) {
            video.muted = !video.muted;
            videUnMute.classList.add('active');
            videMute.classList.remove('active');
        });

        videMute.addEventListener('click', function (e) {
            video.muted = true;
            videMute.classList.add('active');
            videUnMute.classList.remove('active');
        });
    }

//MENU SLIDE TOGGLE


menuBurger.on('click', function () {
    menuBurger.toggleClass('active');

    if ($(window).width() < 767) {
        mainMenuWrap.slideToggle();
    } else {
        mainMenuWrap.toggleClass('show');
        headerSection.toggleClass('bg');
    }
});
$(window).on('resize', function () {
    if ($(window).width() > 767) {
        mainMenuWrap.removeAttr('style');
    } else {
        menuBurger.removeClass('active');
    }
}); // ADD SUBMENU TITLE

var submenu = $('.menu-item-has-children');
submenu.each(function () {
    var ths = $(this),
        submenuList = ths.find('.sub-menu');
    ths.append('<span></span>');
    var submenuArrow = ths.find('span');
    submenuArrow.on('click', function () {
        submenuList.slideToggle();
    });
}); // vital slider

var vitalSlider = $('.vital-slider');

if (vitalSlider.length > 0) {
    vitalSlider.slick({
        arrows: true,
        prevArrow: $('.vital-slider__arrow--prev'),
        nextArrow: $('.vital-slider__arrow--next'),
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 4000,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 425,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }]
    });
} // about tab


var aboutLeadershipTabWrap = $('.about-leadership-section'),
    aboutLeadershipTabTop = aboutLeadershipTabWrap.find('.about-leadership-tab__top'),
    aboutLeadershipTabBottom = aboutLeadershipTabWrap.find('.about-leadership-tab__bottom'),
    aboutLeadershipTabClose = $('.about-leadership-tab__close'); // about tab change active item

aboutLeadershipTabTop.on('click', function () {
    var ths = $(this),
        thisIndex = ths.attr('data-tab-top');
    aboutLeadershipTabTop.removeClass('active');
    ths.addClass('active');
    aboutLeadershipTabBottom.removeClass('active');
    aboutLeadershipTabWrap.find('.about-leadership-tab__bottom[data-tab-bottom=' + thisIndex + ']').addClass('active');

    if(ths.hasClass('about-leadership-tab__top--advisor')){
        $('html').animate({
            'scrollTop': aboutLeadershipTabWrap.find('.about-leadership-tab__bottom[data-tab-bottom=' + thisIndex + ']').offset().top - aboutLeadershipTabBottom.outerHeight() - 50
        }, 200);
    }
}); // about tab close item

aboutLeadershipTabClose.on('click', function () {
    var ths = $(this),
        thsBottomActiveTab = ths.closest('.about-leadership-tab__bottom.active'),
        thsBottomActiveTabIndex = thsBottomActiveTab.attr('data-tab-bottom'),
        thsTopActiveTab = aboutLeadershipTabWrap.find('.about-leadership-tab__top[data-tab-top=' + thsBottomActiveTabIndex + ']');
    thsBottomActiveTab.removeClass('active');
    thsTopActiveTab.removeClass('active');
});

var leadershipSliderMob = $('.about-leadership-tab__header--mob');

if (leadershipSliderMob.length > 0) {
    leadershipSliderMob.slick({
        arrows: true,
        prevArrow: $('.leadership-slider__arrow--prev'),
        nextArrow: $('.leadership-slider__arrow--next'),
        dots: false,
        responsive: [{
            breakpoint: 9999,
            settings: "unslick"
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true
            }
        }, {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true
            }
        }]
    });
}

var teamSlider = $('.about-leadership__team');

if (teamSlider.length > 0) {
    teamSlider.slick({
        arrows: true,
        prevArrow: $('.team-slider__arrow--prev'),
        nextArrow: $('.team-slider__arrow--next'),
        dots: false,
        responsive: [{
            breakpoint: 9999,
            settings: "unslick"
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
}

var advisorsSlider = $('.about-leadership__advisors');

if (advisorsSlider.length > 0) {
    advisorsSlider.slick({
        arrows: true,
        prevArrow: $('.advisors-slider__arrow--prev'),
        nextArrow: $('.advisors-slider__arrow--next'),
        dots: false,
        responsive: [{
            breakpoint: 9999,
            settings: "unslick"
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
} // teamSLiderChange


function teamSLiderChange(sliderName) {
    sliderName.on("beforeChange", function () {
        $('.about-leadership-tab__bottom').removeClass('active');
    });
}

teamSLiderChange(teamSlider);
teamSLiderChange(leadershipSliderMob);
teamSLiderChange(advisorsSlider); //Products Page

var productSlider = $('.products-slider');

if (productSlider.length > 0) {
    productSlider.slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000
    });
} // searchForm


if ($('#searchform').length) {
    $(document).on('submit', '#searchform', function (e) {
        e.preventDefault();
        var $form = $('#searchform');
        var formdata = $form.serializeArray();
        $.ajax({
            url: $form.attr('action'),
            data: formdata,
            method: 'POST',
            success: function success(res) {
                $('form').trigger("reset");
                $('#blog-list').html(res);
            }
        });
    });
} //Show Product Details


$(document).on('click', '#product-show-details', function (e) {
    e.preventDefault();
    $('#details-description').addClass('expanded');
}); //Order Nanoleq Content.

$(document).on('click', '#contact-order-nanoleq', function (e) {
    window.location.replace('/order');
});
function initVitalShirtsAnimation() {
    function checkDistanceState() {
        var width = $(window).width();
        var headerDistance = $('#header').offset().top;
        var blockDistance = $('#vital-desc').offset().top;
        var distanceBetween = blockDistance - headerDistance;
        if(distanceBetween < 400 && !$('.vital-desc__img--1, .vital-desc__img--2, .vital-desc__img--3, .vital-desc__img--4, .vital-desc__img--5').hasClass('animate')) {
            $('.vital-desc__img--1, .vital-desc__img--2, .vital-desc__img--3, .vital-desc__img--4, .vital-desc__img--5').addClass('animate');
        }
    }
    checkDistanceState();
    $(window).scroll(checkDistanceState);
}

function initProductAnimation() {
    function checkDistanceState() {
        var width = $(window).width();
        var headerDistance = $('#header').offset().top;
        $('.activity-performance-section').each(function() {
            var blockDistance = $(this).offset().top;
            var distanceBetween = blockDistance - headerDistance;
            if(distanceBetween < 400 && !$(this).find('.activity-performance__item, .activity-performance__part--image').hasClass('animate')) {
                $(this).find('.activity-performance__item, .activity-performance__part--image').addClass('animate');
            }
        })
    }
    checkDistanceState();
    $(window).scroll(checkDistanceState);
}

function initProductTableAnimation() {
    function checkDistanceState() {
        var width = $(window).width();
        var headerDistance = $('#header').offset().top;
        var blockDistance = $('.activity-metrics-section').offset().top;
        var distanceBetween = blockDistance - headerDistance;
        if(distanceBetween < 700 && !$('.activity-metrics__part').hasClass('animate')) {
            $('.activity-metrics__part').addClass('animate');
        }
    }
    checkDistanceState();
    $(window).scroll(checkDistanceState);
}

$(document).ready(function() {
    if($('#vital-desc').length) {
        initVitalShirtsAnimation();
    }
    if($('.activity-performance-section').length) {
        initProductAnimation();
    }
    if($('.activity-metrics-section')) {
        initProductTableAnimation();
    }
})