$(document).ready(function () {
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList' ]
        } )
        .catch( error => {
            console.error( error );
        } );

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
    
    $('.input-spinner').inputSpinner({
        template:
            '<div class="input-group ${groupClass}">' +
            '<button style="min-width: ${buttonsWidth};" class="btn btn-decrement btn-outline-light" type="button">${decrementButton}</button>' +
            '<input type="text" inputmode="decimal" style="text-align: ${textAlign};" class="form-control">' +
            '<button style="min-width: ${buttonsWidth};" class="btn btn-increment btn-outline-light" type="button">${incrementButton}</button>' +
            '</div>'
    })

    $('#quantity').on('change', function () {
        $('input[name="quantity"]').val($(this).val())
    })

    const alert = new bootstrap.Modal('#alert')
    alert.show();

    setTimeout(function() {
        alert.hide()
    }, 2000);
})