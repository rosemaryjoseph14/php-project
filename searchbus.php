<?php
require("query.php");

$detailsplace = $detailsbus->dataplace();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/search.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    include("header.php")
    ?>
   <div class="container box ">
        <div class="row  w-100 h-75 bgcolor">
        <select class="form-select w-25 h-50 mt-4 me-3" aria-label="Default select example" name="placefrom" require>
            <option selected>select place</option>
            <?php
            foreach ($detailsplace as $loop) {
                echo '
            <option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
                    }
            ?>
        </select>
        <select class="form-select w-25 h-50 mt-4" aria-label="Default select example" name="placeto" require>
                    <option selected>select place</option>
                    <?php
                    foreach ($detailsplace as $loop) {
                        echo '
                    <option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
                    }
                    ?>
                </select>
            <div class="col">
                <input type="date" class="input" placeholder="Date/Time" />
            </div>
            <div class="col">
                <label class="return">Return (Optional)</label>
                <input type="date" class="inputs" placeholder="Date/Time" />
            </div>
            <div class="col">
                <a href="../php project/searchbus.php"><button type="button" class="button">Update</button></a>
            </div>
        </div>
    </div>
    <div class="bsb-hero-5 bsb-overlay " style="background-image: url('asset/banner\ background.png'); height:250px;"></div>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../php project/asset/bus image 1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">London Double Decker </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../php project/asset/bus image 2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mercedes Benz Bus</h5>
                        <p class="card-text">Seats : 22 Available</p>
                        <p>Price : $ 30 per Adult</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../php project/asset/bus image 3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Scania Touring</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>