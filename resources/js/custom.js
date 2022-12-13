$(document).ready(function () {
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
})