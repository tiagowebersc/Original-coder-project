$(function() {
    $('#img-helper-text').click( function() {
        $(this).css('display', "none");
    })

    $('.form-submit').submit( function(e) {

        if($('.itemName').val().length < 1 || $('#item-price').val() < 0.2 || $('#item-price').val() > 9999.99 || $('.descriptionArea').val().length < 1 || $('.upload').val().length < 1 ) {
            $("#helper").text("Invalid fields");
            e.preventDefault();
        }
    })

    $('.form-edit-submit').submit( function(e) {

        if($('.itemName').val().length < 1 || $('#item-price').val() < 0.2 || $('#item-price').val() > 9999.99 || $('.descriptionArea').val().length < 1) {
            $("#helper").text("Invalid fields");
            e.preventDefault();
        }
    })
})
