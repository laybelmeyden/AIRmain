$(document).ready(function() {
    function explode() {
        $('.toast').css('display', 'none');
    }
    setTimeout(explode, 3000); // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('.materialboxed').materialbox();
});
$(".button-collapse").sideNav();
$(".dropdown-button").dropdown();



$(document).ready(function() {
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();

});
$(document).ready(function() {
    $('.carousel').carousel({
        padding: 50,
        dist: 0

    });

});
$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
    var $frame = $('#basic');
    var $slidee = $frame.children('ul').eq(0);
    var $wrap = $frame.parent();
    var $frame1 = $('#basic1');
    var $slidee = $frame1.children('ul').eq(0);
    var $wrap1 = $frame1.parent();

    // Call Sly on frame
    $frame.sly({
        horizontal: 1,
        itemNav: 'basic',
        smart: 1,
        activateOn: 'click',
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        startAt: 0,
        scrollBar: $wrap.find('.scrollbar'),
        scrollBy: 1,
        pagesBar: $wrap.find('.pages'),
        activatePageOn: 'click',
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,
    });
    $frame1.sly({
        horizontal: 1,
        itemNav: 'basic',
        smart: 1,
        activateOn: 'click',
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        startAt: 0,
        scrollBar: $wrap1.find('.scrollbar1'),
        scrollBy: 1,
        pagesBar: $wrap1.find('.pages'),
        activatePageOn: 'click',
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,
    });
});

$(document).ready(function() {
    Materialize.updateTextFields();
});

$('.owl-carousel').owlCarousel({
    items: 4,
    loop: false,
    center: true,
    margin: 10,
    URLhashListener: true,
    autoplayHoverPause: true,
    startPosition: 'URLHash'
});
var swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
$(document).ready(function() {
    $('.carousel').carousel({ dist: 0, padding: 100, shift: 100 });

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    (function() {
        var $frame = $('#basic2');
        var $wrap = $frame.parent();

        // Call Sly on frame

        $frame.sly({
            horizontal: 1,
            itemNav: 'centered',
            smart: 1,
            activateOn: 'null',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,
            startAt: 0,
            scrollBar: $wrap.find('.scrollbar'),
            scrollBy: 0,
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,
            scrollSource: 0,

            // Buttons
            prev: $wrap.find('.prev'),
            next: $wrap.find('.next'),

        });

    }());



});




$(document).ready(function() {
    $('.carousel').carousel({ dist: 0, padding: 100, shift: 100 });

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    (function() {
        var $frame = $('#basic4');
        var $wrap = $frame.parent();

        // Call Sly on frame

        $frame.sly({
            horizontal: 1,
            itemNav: 'centered',
            smart: 1,
            activateOn: 'null',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,
            startAt: 0,
            scrollBar: $wrap.find('.scrollbar'),
            scrollBy: 0,
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,
            scrollSource: 0,

            // Buttons
            prev: $wrap.find('.prev'),
            next: $wrap.find('.next'),

        });

    }());



});