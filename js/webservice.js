
// Get reservation from the XML response from GetReservation.php
function getReservation() {
    $.ajax({
        url: 'GetReservation.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            if (data.error) {
                $('#content').load('partials/error.html');
            } else {
                $('#content').load('partials/card.html');
                $(document).ready(function () {
                    var fields = data.fields.field;
                    console.log(fields);
                    fields.forEach(function (field) {
                        if(field.attributes.name === "GuestFirstname") {
                            $("#firstName").val(field.value);
                        } else if (field.attributes.name === "GuestName") {
                            $("#lastName").val(field.value);
                        } else if (field.attributes.name === "GuestArrival") {
                            $("#arrivalDate").html("<h4>" + field.value.substring(0, 10) + "</h4>");
                        } else if (field.attributes.name === "GuestDeparture") {
                            $("#departureDate").html("<h4>" + field.value.substring(0, 10) + "</h4>");
                        } else if (field.attributes.name === "GuestNum") {
                            $("#reservationNumber").html("<h4>" + field.value + "</h4>");
                        }          
                    });
                });
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + '\n' + textStatus + '\n' + errorThrown);
        }
    });
}

// Get Countries for dropdown in check in form
function getCountries() {
    $.ajax({
        url: 'GetCountries.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            var fields = data.rows.row;

            var result = fields.filter(function (item) {
                return item.fields.field;
            }).map(function (item) {
                return item.fields.field;
            });

            result.forEach(function (field) {
                $("#inputCountry").append(new Option(field[1].value, field[0].value));
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert(jqXHR + '\n' + textStatus + '\n' + errorThrown);
        }
    });
}

function updateReservation() {
    $.ajax({
        url: 'UpdateReservation.php',
        type: 'PUT',
        dataType: 'json',
        success: function (data) {
            let response = data.response.attributes.Status;
            if (response != 'OK' || response == '' || !response) {
                // error screen
                console.log("not ok")
            } else if (response == 'UR') {
                console.log("Reservation number is null or NaN");
            } else if (response == 'IR') {
                console.log("Cannot parse XML or incorrect root element or not correctly formatted.");
            }
            else {
                // redirect to confirmation screen
                console.log("all ok");
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert(jqXHR + '\n' + textStatus + '\n' + errorThrown);
        }
    });
}