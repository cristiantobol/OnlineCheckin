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
    <h1>Welcome to Online CheckIn</h1>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="firstName">First Name</label>
                        <input id="firstName" class="form-control form-control-lg" type="text" name="firstName" placeholder="First Name" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lastName">Last Name (Family Name)</label>
                        <input id="lastName" class="form-control form-control-lg" type="text" name="lastName" placeholder="Last Name" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="confirmationNumber">Confirmation Number</label>
                        <input id="confirmationNumber" class="form-control form-control-lg" type="text" name="confirmationNumber" placeholder="Confirmation Number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="street">Street</label>
                    <input id="address" class="form-control form-control-lg" type="text" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="adress2">Address 2</label>
                    <input id="address2" class="form-control form-control-lg" type="text" name="adress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input class="form-control form-control-lg" type="text" name="address" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCountry">Country</label>
                        <select id="inputCountry" class="form-control form-control-lg">
                            <option selected>Please Select</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPostcode">Postcode (ZIP)</label>
                        <input type="text" class="form-control form-control-lg" id="inputPostcode">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="termsAgreement">
                        <label class="form-check-label" for="termsAgreement">
                            I read terms and conditions
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="offersSubscriptionAgreement">
                        <label class="form-check-label" for="offersSubscriptionAgreement">
                            I want to receive offers and emails
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">CHECK ME IN</button>
                <input data-provide="datepicker">
            </form>

        </div>
    </div>

    <input type="button" value="Get Reservation" class="btn btn-sm btn-primary" onclick="getReservation();" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/webservice.js"></script>
    <script src="js/datepicker/bootstrap-datepicker.min.js"></script>

    <script>
        $('.datepicker').datepicker({
            autoclose: true,
        });
    </script>
</body>

</html>