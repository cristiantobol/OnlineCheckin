//$(document).ready(function () {
    function getReservation() {
        $.ajax({
            url: 'GetReservation.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // data.fields.field.forEach(element => {
                //     console.log(element);
                // });
                //console.log(data.fields.field);

                var fields = data.fields.field;

                var result = fields.filter(function(item) {
                    return item.attributes.name === "GuestFirstname" || item.attributes.name === "GuestName";
                });

                result.forEach(function(field) {
                    if(field.attributes.name === "GuestFirstname") {
                        $("#firstName").val(field.value);
                    } else if (field.attributes.name === "GuestName") {
                        $("#lastName").val(field.value);
                    }

                });

                console.log(result);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(jqXHR + '\n' + textStatus + '\n' + errorThrown);
            }
        });
    }
//});
