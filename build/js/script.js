let blocks = Array.from(document.querySelectorAll('.section')),
    bodyContainer = document.querySelector('body'),
    headerSection = $('.header-section')
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
}

//MUTE-UNMUTE VIDEO
let video = document.getElementById('intro-video'),
    videUnMute = document.querySelector('.intro-video__unmute'),
    videMute = document.querySelector('.intro-video__mute');

if (typeof(videUnMute) != 'undefined' && videUnMute != null) {
    videUnMute.addEventListener('click', function(e){
        video.muted = !video.muted;
        videUnMute.classList.add('active');
        videMute.classList.remove('active');
    });
}
if (typeof(videMute) != 'undefined' && videMute != null) {
    videMute.addEventListener('click', function(e){
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
});

// ADD SUBMENU TITLE
let submenu = $('.menu-item-has-children');

submenu.each(function () {

    let ths = $(this),
        submenuArrow = ths.find('span'),
        submenuList = ths.find('.sub-menu');

    submenuArrow.on('click', function () {
        submenuList.slideToggle();
    });

});

// vital slider
const vitalSlider = $('.vital-slider');

if (vitalSlider.length > 0) {
    vitalSlider.slick({
        arrows: true,
        prevArrow: $('.vital-slider__arrow--prev'),
        nextArrow: $('.vital-slider__arrow--next'),
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 425,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
        ]
    });
}

// about tab
const aboutLeadershipTabWrap = $('.about-leadership-section'),
    aboutLeadershipTabTop = aboutLeadershipTabWrap.find('.about-leadership-tab__top'),
    aboutLeadershipTabBottom = aboutLeadershipTabWrap.find('.about-leadership-tab__bottom'),
    aboutLeadershipTabClose = $('.about-leadership-tab__close');

// about tab change active item
aboutLeadershipTabTop.on('click', function () {

    let ths = $(this),
        thisIndex = ths.attr('data-tab-top');

    aboutLeadershipTabTop.removeClass('active');
    ths.addClass('active');

    aboutLeadershipTabBottom.removeClass('active');
    aboutLeadershipTabWrap.find('.about-leadership-tab__bottom[data-tab-bottom=' + thisIndex + ']').addClass('active');

});
// about tab close item
aboutLeadershipTabClose.on('click', function () {

    let ths = $(this),
        thsBottomActiveTab = ths.closest('.about-leadership-tab__bottom.active'),
        thsBottomActiveTabIndex = thsBottomActiveTab.attr('data-tab-bottom'),
        thsTopActiveTab = aboutLeadershipTabWrap.find('.about-leadership-tab__top[data-tab-top=' + thsBottomActiveTabIndex + ']');

    thsBottomActiveTab.removeClass('active');
    thsTopActiveTab.removeClass('active');

});

// leadershipSliders mobile
const leadershipSlider = $('.about-leadership-tab__header');

if (leadershipSlider.length > 0) {
    leadershipSlider.slick({
        arrows: true,
        prevArrow: $('.leadership-slider__arrow--prev'),
        nextArrow: $('.leadership-slider__arrow--next'),
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                }
            }
        ]
    });
}

const teamSlider = $('.about-leadership__team');

if (teamSlider.length > 0) {
    teamSlider.slick({
        arrows: true,
        prevArrow: $('.team-slider__arrow--prev'),
        nextArrow: $('.team-slider__arrow--next'),
        dots: false,
        autoplay: true,
        autoplaySpeed: 3500,
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
}

const advisorsSlider = $('.about-leadership__advisors');

if (advisorsSlider.length > 0) {
    advisorsSlider.slick({
        arrows: true,
        prevArrow: $('.advisors-slider__arrow--prev'),
        nextArrow: $('.advisors-slider__arrow--next'),
        dots: false,
        autoplay: true,
        autoplaySpeed: 3200,
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
}


//Products Page
const productSlider = $('.products-slider');
if (productSlider.length > 0) {
    productSlider.slick({
        arrows: false,
        dots: true,
    });
}



