//$(document).ready(function () {
    function getReservation() {
        $.ajax({
            url: 'GetReservation.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                //createReservationTable(data);

                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(jqXHR + '\n' + textStatus + '\n' + errorThrown);
            }
        });
    }
//});
