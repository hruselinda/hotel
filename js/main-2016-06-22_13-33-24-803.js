

$(document).ready(function () {

    $("#owl-demo").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 3,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 1],
        stopOnHover:true
    });

    $("#owl-testimonials").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 4000,
        stopOnHover:true,
        singleItem: true,
        transitionStyle : "goDown"

    });

});






