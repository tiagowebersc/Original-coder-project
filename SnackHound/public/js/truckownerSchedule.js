$(document).ready (function() {

    $("#saveBtn").click(function(e) {
        e.preventDefault();
        let location = $('#location').val();

        $.ajax({
            url     : `https://api.opencagedata.com/geocode/v1/json?q=${location}&key=d222fd4fc3334f6995d454da5d6c6c8a`,
            type    : 'get',
            success: function (pos) {
                if(pos.results.length !== 0 && $('#fromTime').val() && $('#toTime').val()) {
                    $('#latitude').val(pos.results[0].geometry.lat);
                    $('#longitude').val(pos.results[0].geometry.lng);
                    console.log(pos.results[0].geometry.lat, pos.results[0].geometry.lng);
                    pos.results[0].components['town'] !== undefined ? $('#city').val(pos.results[0].components.town) : $('#city').val(pos.results[0].components.city);
                    if(pos.results[0].components.town || pos.results[0].components.city) {
                        $("#edit-schedule-form").submit();
                    } else {
                        $("#helper").text("Invalid fields");
                    }
                } else {
                    $("#helper").text("Invalid fields");
                }
            },
            error: function (error) {
                $("#helper").text("Unavailable to connect to the server");
            },
        });

    })
})
