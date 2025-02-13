<?php
require("query.php");
$detailsplace = $detailsbus->dataplace();
$detailscategory=$detailsbus->datacategory();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    include("header.php")
    ?>
    <div class="container-fluid">
        <div class="row justify-content-md-center align-items-center mt-5">
            <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7">
                <p class="display-4 textcolor text-center fw-semibold mb-4">Comfort & Style Over Every Mile</p>
                <p class="lead textcolor text-center mb-5">
                    <span class="col-12 col-sm-10 col-md-8 col-xxl-7 fw-semibold">Book my Bus is the leading go-to website for booking inter-city bus online.</span>
                </p>
            </div>
        </div>
        <div class="bsb-hero-5 bsb-overlay " style="background-image: url('asset/banner\ background.png'); height:250px;"></div>
    </div>
    <div class="container box">
        <form action="../php project/searchbus.php" method="GET">
            <div class="row w-100 bgcolor">
                <select class="form-select w-25 mt-4 me-3" aria-label="Default select example" name="placefrom" required>
                    <option selected>select place</option>
                    <?php
                    foreach ($detailsplace as $loop) {
                        echo '<option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
                    }
                    ?>
                </select>
                <select class="form-select w-25 mt-4 me-3" aria-label="Default select example" name="placeto" required>
                    <option selected>select place</option>
                    <?php
                    foreach ($detailsplace as $loop) {
                        echo '<option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
                    }
                    ?>
                </select>
           
                <select class="form-select w-25 mt-4" aria-label="Default select example" name="bustype" required>
                    <option selected>select Type</option>
                    <?php
                    foreach ($detailscategory as $loop) {
                        echo '<option value="' . $loop["categoryname"] . '">' . $loop["categoryname"] . '</option>';
                    }
                    ?>
                </select>
                <div class="col">
                    <input type="date" class="input" name="date" required />
                </div>
                <div class="col">
                    <button type="submit" class="button" name="searchbutn">Search Buses</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row bodybox">
            <div class="col col-xl-2">
                <div class="box1">
                    <img src="./asset/icon1.png" class="iconimg" />
                </div>
            </div>
            <div class="col col-xl-2">
                <div class="box2">
                    <img src="./asset/icon2.png" class="iconimg" />
                </div>
            </div>
            <div class="col col-xl-2">
                <div class="box3">
                    <img src="./asset/icon 3.png" class="iconimg" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row detailsbody">
            <div class="col col-xl-4">
                <div class="detailsbox">
                    <div class="boxer">
                        <p style="text-align: center; color:#193066; font-weight:500; font-size:18px">Instant refunds on UPL
                            payments</p>
                    </div>
                </div>
            </div>
            <div class="col col-xl-4">
                <div class="detailsbox">
                    <div class="boxer">
                        <p style="text-align: center; color:#193066; font-weight:500; font-size:18px">Hassle free customer care</p>
                    </div>
                </div>
            </div>
            <div class="col col-xl-4">
                <div class="detailsbox">
                    <div class="boxer">
                        <p style="text-align: center; color:#193066; font-weight:500; font-size:18px">Fastest confirmed booking
                            experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" container busdetailsmain p-3">
        <div class="row busdetails">
            <h1 style="font-size:25px; font-weight:600; color:#193066; padding-left:40px;">Bus Ticket Confirmation</h1>
            <div class="c">
                <ul class="detail">
                    <li>M-Ticket:M-Ticket is short for Mobile ticket and is sent as an SMS to your mobile
                        once you book a bus ticket.it is a confirmation of your reservation and serves as a
                        ticket.When you board the bus,show your M-ticket to the bus crew.</li>
                    <li>E-Ticket:E-Ticket stands for Electronic Ticket. The E-Ticket is issued and sent to
                        your email after you make an online bus booking.it is a confirmation of your
                        reservation,and you can show it to the bus staff when you board the bus.</li>
                    <li>Counter Ticket: A counter ticket is a hard copy of your bus ticket which is shown to
                        the bus staff on boarding the bus. These can be bought physically from ticket
                        booths or even on the bus right before your journey.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container faqbooking p-3 mb-5">
        <div class="heading">
            <h1 style="font-size:25px; font-weight:600; color:#193066; padding-left:40px">FAQs Related to Bus Tickets booking</h1>
        </div>
        <div class="detailsfaq">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            How do I book a bus ticket on Book My Bus ?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">To book a ticket, simply visit our website and select your departure and arrival destinations, travel date, and number of passengers.
                            Browse through available buses, select your preferred one, and complete the payment to confirm your booking.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Can I book a return ticket ?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Yes, you can cancel your bus ticket booking. Sign in to see your trips to cancel on redBus website on desktop and on mobile.
                            Enter your ticket number and email id and follow the cancelation procedure. You can also cancel your ticket through the Self Help tool</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button accordion-buttonn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            How can I cancel or modify my booking ?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Yes, you can book return tickets by selecting the round-trip option during the booking process.
                            You'll need to enter your return journey details along with your departure details.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footermain">
        <div class="container footer">
            <div class="row footerdetails">
                <div class="col col-xl-3">
                    <div class="logofooter">BookMyBus</div>
                </div>
                <div class="col col-xl-3">
                    <div class="companydetails">
                        <h3>Company</h3>
                        <ul class="companyfooter">
                            <li>About us</li>
                            <li>Terms & Conditions</li>
                            <li>Privacy</li>
                            <li>Customer Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col col-xl-3">
                    <div class="infofooter">
                        <h3>Informations</h3>
                        <ul>
                            <li>FAQ</li>
                            <li>privacy policy</li>
                            <li>Bus timetable</li>
                            <li>User agreement</li>
                        </ul>
                    </div>
                </div>
                <div class="col col-xl-3">
                    <div class="iconsfooter">
                        <h3>follow as</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>