

$(document).ready(function () {


// carousels
    $("#owl-demo").owlCarousel({
        autoPlay: 2000,
        items: 3,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 1],
        stopOnHover: true
    });
    $("#owl-testimonials").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 4000,
        stopOnHover: true,
        singleItem: true,
        transitionStyle: "goDown"
    });
    
// language change
    $("#language a").click(function () {
        $("#language a").show();
        $(this).hide();
        $("#current_lang").html($(this).html());
    });
    
    
// reservation tooltip 
    $('[data-toggle="tooltip"]').tooltip();
    
    
//reservationn form datepicker
    $("#from").datepicker({
        numberOfMonths: 1,
        firstDay: 1,
        minDate: "+1D", maxDate: "+4M",
        dateFormat: "d M, y",
        showAnim: "blind",
        onClose: function (selectedDate) {
            $("#to").datepicker("option", "minDate", selectedDate);
        }
    });
    $("#to").datepicker({
        numberOfMonths: 1,
        firstDay: 1,
        dateFormat: "d M, y",
        showAnim: "blind",
        onClose: function (selectedDate) {
            $("#from").datepicker("option", "maxDate", selectedDate);
        }
    });
    
// reservation form number of guests
    $('#guests_btn').click(function () {
        var a = parseInt($('#guests_a').val());
        var b = parseInt($('#guests_b').val());
        $('#guests_c').html(a + b);
        $('#guests_select').hide();
    });
    $('#guests_c').click(function () {
        $('#guests_select').show();
    });
    
//gallery imgs
    $(".fancybox").fancybox({
        helpers: {
            title: {
                type: 'inside',
                position: 'top'
            }
        },
        nextEffect: 'fade',
        prevEffect: 'fade'
    });
    
// gallery tab pills
    $('.pix').click(function () {
        if ($(this).data('rel') == 'all') {
            $('#gallery_pix a').parent().fadeIn('slow');
        } else {
            $('#gallery_pix a').parent().hide();
            $('#gallery_pix a[rel="'+ $(this).data('rel') +'"]').parent().fadeIn('slow');
        }

    });

// contact form validation
    if($('body').find('#demo-form').length > 0){
        $('#demo-form').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        }).on('form:submit', function () {
            return false; // Don't submit form for this demo
        });
    }
});





