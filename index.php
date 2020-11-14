<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/datepicker/bootstrap-datepicker3.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Online Checkin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" style="margin-left: 8rem">Online Check in</a>
    </nav>
    <div class="container-fluid">
        <div class="home-page-title" style="color: #2b336b;">
            <h1>Check in now</h1>
            <h5 style="color: #9DACC3">Enter your details below to complete the online check for your stay with Intercontinental Hotels</h5>
            <!-- <input type="button" value="Get Reservation" class="btn btn-sm btn-primary" onclick="getReservation();" />
            <input type="button" value="Get Countries" class="btn btn-sm btn-primary" onclick="getCountries();" /> -->
        </div>
        <div id="content"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/webservice.js"></script>
    <script src="js/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.inputmask.js"></script>
    <script src="js/jquery.inputmask.date.extensions.js"></script>
    <script src="js/jquery.inputmask.extensions.js"></script>

    <script>
        $(function() {
            //Datemask dd/mm/yyyy
            $('#inputDob').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            });
            getReservation();
            getCountries();
            //updateReservation();
        });
    </script>
</body>

</html>