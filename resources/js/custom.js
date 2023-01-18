$(document).ready(function () {
    $('.slick-carousel').slick({
        centerMode: false,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        rows: 0,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }]
    });
    
    $('#quantity').on('change', function () {
        $('input[name="quantity"]').val($(this).val())
    })

    const alert = new bootstrap.Modal('#alert')
    alert.show();

    setTimeout(function() {
        alert.hide()
    }, 2000);
})