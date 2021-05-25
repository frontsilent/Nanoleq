function initVitalShirtsAnimation() {
    function checkDistanceState() {
        var headerDistance = $('#header').offset().top;
        if($('#vital-desc').length) {
            var blockDistance = $('#vital-desc').offset().top;
            var distanceBetween = blockDistance - headerDistance;
            if (distanceBetween < 400 && !$('.vital-desc__img--1, .vital-desc__img--2, .vital-desc__img--3, .vital-desc__img--4, .vital-desc__img--5').hasClass('animate')) {
                $('.vital-desc__img--1, .vital-desc__img--2, .vital-desc__img--3, .vital-desc__img--4, .vital-desc__img--5').addClass('animate');
            }
        }
    }
    checkDistanceState();
    $(window).scroll(checkDistanceState);
}

function initProductAnimation() {
    function checkDistanceState() {
        var headerDistance = $('#header').offset().top;
        if($('.activity-performance-section').length) {
            $('.activity-performance-section').each(function () {
                var blockDistance = $(this).offset().top;
                var distanceBetween = blockDistance - headerDistance;
                if (distanceBetween < 400 && !$(this).find('.activity-performance__item, .activity-performance__part--image').hasClass('animate')) {
                    $(this).find('.activity-performance__item, .activity-performance__part--image').addClass('animate');
                }
            });
        }
    }
    checkDistanceState();
    $(window).scroll(checkDistanceState);
}

function initProductTableAnimation() {
    function checkDistanceState() {
        var headerDistance = $('#header').offset().top;
        if($('.activity-metrics-section').length) {
            var blockDistance = $('.activity-metrics-section').offset().top;
            var distanceBetween = blockDistance - headerDistance;
            if (distanceBetween < 700 && !$('.activity-metrics__part').hasClass('animate')) {
                $('.activity-metrics__part').addClass('animate');
            }
        }
    }
    checkDistanceState();
    $(window).scroll(checkDistanceState);
}

$(document).ready(function() {
    initVitalShirtsAnimation();
    initProductAnimation();
    initProductTableAnimation();
})