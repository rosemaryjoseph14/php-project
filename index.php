<?php
require("query.php");
$detailsplace = $detailsbus->dataplace();
$detailscategory = $detailsbus->datacategory();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DetailsBus</title>
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
                    <span class="col-12 col-sm-10 col-md-8 col-xxl-7 fw-semibold">BusMapX is the leading go-to website for booking inter-city bus online.</span>
                </p>
            </div>
        </div>
        <div class="bsb-hero-5 bsb-overlay " style="background-image: url('asset/banner\ background.png'); height:220px;"></div>
    </div>
    <div class="container box">
        <form action="../php project/searchbus.php" method="GET">
            <div class="row bgcolor">
                <select class="form-select mt-4 me-3" aria-label="Default select example" name="placefrom" required>
                    <option selected>select place</option>
                    <?php
                    foreach ($detailsplace as $loop) {
                        echo '<option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
                    }
                    ?>
                </select>
                <select class="form-select mt-4 me-3" aria-label="Default select example" name="placeto" required>
                    <option selected>select place</option>
                    <?php
                    foreach ($detailsplace as $loop) {
                        echo '<option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
                    }
                    ?>
                </select>

                <select class="form-select mt-4" aria-label="Default select example" name="bustype" required>
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
                <div class="col col px-0">
                    <button type="submit" class="button" name="searchbutn">Search Buses</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row bodybox">
            <div class="col">
                <div class="box1">
                    <img src="./asset/icon1.png" class="iconimg" />
                </div>
            </div>
            <div class="col">
                <div class="box2">
                    <img src="./asset/icon2.png" class="iconimg1" />
                </div>
            </div>
            <div class="col">
                <div class="box3">
                    <img src="./asset/icon 3.png" class="iconimg2" />
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
            <div class="conformation">
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
                        Is this service free to use?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Yes, all the information on our website is completely free to access.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        What is this website about?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">This website provides detailed information about buses, including routes, schedules, bus types, and stops. However, we do not offer booking services.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button accordion-buttonn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Are the bus details accurate and up to date?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">We strive to keep our information as accurate as possible, but schedules may change. Always check with the bus operator for the latest updates.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
   include('footer.php');
   ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>
</body>

</html>