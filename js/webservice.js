function getReservation() {
    $.ajax({
        url: 'GetReservation.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            var fields = data.fields.field;
            var result = fields.filter(function (item) {
                return item.attributes.name === "GuestFirstname" || item.attributes.name === "GuestName";
            });

            result.forEach(function (field) {
                if (field.attributes.name === "GuestFirstname") {
                    $("#firstName").val(field.value);
                } else if (field.attributes.name === "GuestName") {
                    $("#lastName").val(field.value);
                }

            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert(jqXHR + '\n' + textStatus + '\n' + errorThrown);
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