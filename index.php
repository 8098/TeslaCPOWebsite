<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tesla Certified Pre-Owned Demo</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="/content/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/content/favicon.ico" type="image/x-icon">

    <style type="text/css">
        .nav.navbar-nav.navbar-right li a {
            color: lightgray;
            font-size: smaller;
        }

        .navbar-brand {
            padding: 0px;
        }

        .navbar-brand > img {
            height: 100%;
            padding: 10px;
            width: auto;
        }

        .nav-tabs a{
            color: red;
        }

        .jumbotron {
            background-image: url("/content/p85.png");
            height: 500px;
            background-size: cover;
            background-repeat: no-repeat;
    </style>
</head>

<body>

<!--NAVBAR-->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand"><img src="/content/tesla_logo.png" alt="TESLA"></a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li><a href="#"><strong>MODEL S</strong></a></li>
                <li><a href="#"><strong>MODEL X</strong></a></li>
                <li><a href="#"><strong>MODEL 3</strong></a></li>
                <li><a href="#"><strong>ENERGY</strong></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><strong>CHARGING</strong></a></li>
                <li><a href="#"><strong>UPDATES</strong></a></li>
                <li><a href="#"><strong>SUPPORT</strong></a></li>
                <li><a href="#"><strong>FIND US</strong></a></li>
                <li><a href="#"><strong>SHOP</strong></a></li>
                <li><a href="#"><strong>MY TESLA</strong></a></li>
            </ul>
        </div>

    </div>
</div>
<!--NAVBAR-->

<br>
<br>

<!--JUMBOTRON-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Justin's Tesla</h1>
            </div>
            <div class="bs-component">
                <div class="jumbotron">
                    <H2>Welcome to the Tesla family!</H2>
                    <p>Your Model S is on its way. See below for details.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--JUMBOTRON-->

<!--TABS-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#YourTesla" data-toggle="tab">Your Tesla</a></li>
                <li><a href="#DeliveryProgress" data-toggle="tab">Delivery Progress</a></li>
                <li><a href="#Chat" data-toggle="tab">Chat</a></li>
                <li><a href="#Forms" data-toggle="tab">Forms</a></li>
                <li><a href="#FAQ" data-toggle="tab">FAQ</a></li>
                </li>
            </ul>
        </div>
    </div>

    <!--Tabs-->
    <div id="myTabContent" class="tab-content">

        <!--Your Tesla-->
        <div class="tab-pane fade active in" id="YourTesla">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h2>Your Tesla</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bs-component">
                        <table class="table table-striped table-hover ">
                            <thead>
                            <tr>
                                <th><h3>Vehicle Details</h3></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Model</td>
                                <td>S P85+</td>
                            </tr>
                            <tr>
                                <td>VIN</td>
                                <td>5YJSA1H13EFPXXXXX</td>
                            </tr>
                            <tr>
                                <td>Year</td>
                                <td>2014</td>
                            </tr>
                            <tr>
                                <td>Drive</td>
                                <td>Rear Wheel</td>
                            </tr>
                            <tr>
                                <td>Battery</td>
                                <td>85 kWh</td>
                            </tr>
                            <tr>
                                <td>Range</td>
                                <td>265 miles</td>
                            </tr>
                            <tr>
                                <td>0 - 60 MPH</td>
                                <td>4.2 seconds</td>
                            </tr>
                            <tr>
                                <td>Autopilot Hardware</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Mileage</td>
                                <td>37,000</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>$62,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bs-component">
                        <table class="table table-striped table-hover ">
                            <thead>
                            <tr>
                                <th><h3>Options</h3></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Color</td>
                                <td>Dolphin Grey</td>
                            </tr>
                            <tr>
                                <td>Wheels</td>
                                <td>21" Grey Turbine</td>
                            </tr>
                            <tr>
                                <td>Roof</td>
                                <td>All Glass Panoramic</td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td>Black Performance Leather Seats</td>
                            </tr>
                            <tr>
                                <td>Decor</td>
                                <td>Piano Black</td>
                            </tr>
                            <tr>
                                <td>Headliner</td>
                                <td>White Alcantara</td>
                            </tr>
                            <tr>
                                <td>Free Supercharging</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden=true style="color:green"></td>
                            </tr>
                            <tr>
                                <td>Carbon Fiber Spolier</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden=true style="color:green"></td>
                            </tr>
                            <tr>
                                <td>Red Brake Calipers</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden=true style="color:green"></td>
                            </tr>
                            <tr>
                                <td>Tech Package</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden=true style="color:green"></td>
                            </tr>
                            <tr>
                                <td>Smart Air Suspension</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden=true style="color:green"></td>
                            </tr>
                            <tr>
                                <td>Ultra High Fidelity Sound</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden=true style="color:green"></td>
                            </tr>
                            <tr>
                                <td>Premium Interior Lighting</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden=true style="color:green"></td>
                            </tr>
                            <tr>
                                <td>Subzero Weather Package</td>
                                <td><span class="glyphicon glyphicon-remove" aria-hidden=true style="color:red"></td>
                            </tr>
                            <tr>
                                <td>Executive Rear Seats</td>
                                <td><span class="glyphicon glyphicon-remove" aria-hidden=true style="color:red"></td>
                            </tr>
                            <tr>
                                <td>Rear Facing Seats</td>
                                <td><span class="glyphicon glyphicon-remove" aria-hidden=true style="color:red"></td>
                            </tr>
                            <tr>
                                <td>Dual Chargers</td>
                                <td><span class="glyphicon glyphicon-remove" aria-hidden=true style="color:red"></td>
                            </tr>
                            <tr>
                                <td>Integrated Center Console</td>
                                <td><span class="glyphicon glyphicon-remove" aria-hidden=true style="color:red"></td>
                            </tr>
                            <tr>
                                <td>Performance Plus Package</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden=true style="color:green"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Photos</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/content/exterior1.jpg" target="_blank">
                                        <img src="/content/exterior1.jpg" style="width:100%">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/content/exterior2.jpg" target="_blank">
                                        <img src="/content/exterior2.jpg" style="width:100%">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/content/exterior3.jpg" target="_blank">
                                        <img src="/content/exterior3.jpg" style="width:100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/content/interior1.jpg" target="_blank">
                                        <img src="/content/interior1.jpg" style="width:100%">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/content/interior2.jpg" target="_blank">
                                        <img src="/content/interior2.jpg" style="width:100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Your Tesla-->

        <!--Delivery Progress-->
        <div class="tab-pane fade" id="DeliveryProgress">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Delivery Progress</h2>
                    </div>
                </div>
            </div>
        </div>
        <!--Delivery Progress-->

        <!--Chat-->
        <div class="tab-pane fade" id="Chat">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Chat</h2>
                    </div>
                </div>
            </div>
        </div>
        <!--Chat-->

        <!--Forms-->
        <div class="tab-pane fade" id="Forms">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Forms</h2>
                    </div>
                </div>
            </div>
        </div>
        <!--Forms-->

        <!--FAQ-->
        <div class="tab-pane fade" id="FAQ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>FAQ</h2>
                    </div>
                </div>
            </div>
        </div>
        <!--FAQ-->

    </div>
    <!--Tabs-->

</div>
<!--TABS-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>