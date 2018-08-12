jQuery(document).ready(function ($) {
    $('.flexslider-slide').flexslider({
        animation: "slide",
        controlNav: false
    });

    // tiny helper function to add breakpoints
    function getGridSize() {
        return (window.innerWidth < 600) ? 2 :
            (window.innerWidth < 900) ? 3 : 6;
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

    var $window = $(window),
        flexslider = {vars: {}};

    $window.resize(function () {
        var gridSize = getGridSize();
        flexslider.vars.minItems = gridSize;
        flexslider.vars.maxItems = gridSize;
    });
});

