jQuery(document).ready(function ($) {
    $('#home-slide').flexslider({
        animation: "fade",
        controlNav: false,
        slideshow: true,
        slideshowSpeed: 8000,
        animationSpeed: 1500
    });

    // tiny helper function to add breakpoints
    function getGridSize() {
        return (window.innerWidth < 600) ? 2 :
            (window.innerWidth < 900) ? 3 : 4;
    }

    $('.carousel-partner').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 5,
        minItems: getGridSize(), // use function to pull in initial value
        maxItems: getGridSize(), // use function to pull in initial value
        customDirectionNav: $(".custom-navigation a")
    });

    $('#member-slide').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        directionNav: false
    });

    $('#member-carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 75,
        itemMargin: 25,
        asNavFor: '#member-slide',
        directionNav: false,
        start: function(){
            $("#member-carousel").css({"float" : "right"});
        }
    });

    var $window = $(window),
        flexslider = {vars: {}};

    $window.resize(function () {
        var gridSize = getGridSize();
        flexslider.vars.minItems = gridSize;
        flexslider.vars.maxItems = gridSize;
    });
});

