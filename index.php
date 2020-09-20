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
            <input type="button" value="Get Reservation" class="btn btn-sm btn-primary" onclick="getReservation();" />
        </div>
        <div class="card">
            <div class="card-body">
                
                <br>
                <div class="stay-dates-container">
                    <div class="row">
                        <div class="col col-md-4 h-100" style="color: #394460">
                            Arrival Date&nbsp;
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left" fill="#4F5FFF" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                            </svg></div>

                        <div class="col col-md-4" style="color: #394460">
                            Departure Date&nbsp;
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-right" fill="#4F5FFF" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                            </svg></div>
                    </div>
                    <div class="row">
                        <div id="arrivalDate" class="col col-md-4 stay-dates">
                            <h4>Tue, 21 December 2020</h4>
                        </div>
                        <div id="departureDate" class="col col-md-4 stay-dates">
                            <h4>Fri, 24 December 2020</h4>
                        </div>
                    </div>
                </div>
                <hr>
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
                            <input id="confirmationNumber" class="form-control form-control-lg" type="text" name="confirmationNumber" placeholder="Confirmation Number" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputDocumentType">Document Type</label>
                            <select id="inputDocumentType" class="form-control form-control-lg">
                                <option selected>Please Select</option>
                                <option>Passport</option>
                                <option>National ID</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputIdNumber">Document Number</label>
                            <input type="text" class="form-control form-control-lg" id="inputIdNumber">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="street">Address Line 1</label>
                        <input id="address" class="form-control form-control-lg" type="text" name="address" placeholder="Street, number, house number">
                    </div>
                    <div class="form-group">
                        <label for="adress2">Address Line 2 (Optional)</label>
                        <input id="address2" class="form-control form-control-lg" type="text" name="adress2" placeholder="Apartment, studio, floor">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">City</label>
                            <input class="form-control form-control-lg" type="text" name="address" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCountry">Country</label>
                            <select id="inputCountry" class="form-control form-control-lg">
                                <option selected>Please Select</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control form-control-lg">
                                <option selected>Please Select</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPostcode">Postcode (ZIP)</label>
                            <input type="text" class="form-control form-control-lg" id="inputPostcode">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="inputSpecialRequest">Special request</label>
                        <input id="inputSpecialRequest" class="form-control form-control-lg" type="textarea" rows="10" style="height:50px" name="inputSpecialRequest" placeholder="Room with a view, lower floor...">
                    </div>
                    <br>
                    <hr>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="termsAgreement">
                            <label class="form-check-label" for="termsAgreement">
                                I agree to the current <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-lg checkin-button">Check me in</button>
                    <!-- <input data-provide="datepicker"> -->
                </form>
            </div>
        </div>
    </div>


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