<?php
require("query.php");
$detailsplace = $detailsbus->dataplace();
$detailscategory=$detailsbus->datacategory();

$placefrom = isset($_GET["placefrom"]) ? $_GET["placefrom"] : "";
$placeto = isset($_GET["placeto"]) ? $_GET["placeto"] : "";
$bustype=isset($_GET["bustype"]) ? $_GET["bustype"] : "";
$date = isset($_GET["date"]) ? $_GET["date"] : "";
$return_date = isset($_GET["return_date"]) ? $_GET["return_date"] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/search.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bus Search</title>
</head>

<body>
    <?php include("header.php"); ?>

    
    <div class="container box">
        <div class="row w-100 h-75 bgcolor">
            <form method="GET" action="">
                <div class="d-flex">
                    <select class="form-select w-25 mt-4 me-3" name="placefrom" required>
                        <option value="">Select Place</option>
                        <?php foreach ($detailsplace as $loop) { ?>
                            <option value="<?= $loop["placename"]; ?>" <?= ($placefrom == $loop["placename"]) ? 'selected' : ''; ?>>
                                <?= $loop["placename"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <select class="form-select w-25 mt-4 me-3" name="placeto" required>
                        <option value="">Select Place</option>
                        <?php foreach ($detailsplace as $loop) { ?>
                            <option value="<?= $loop["placename"]; ?>" <?= ($placeto == $loop["placename"]) ? 'selected' : ''; ?>>
                                <?= $loop["placename"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <select class="form-select w-25 mt-4 me-3" name="bustype" required>
                    <option value="">Select Type</option>
                    <?php foreach ($detailscategory as $loop) { ?>
                        <option value="<?= $loop["categoryname"]; ?>" <?= ($bustype == $loop["categoryname"]) ? 'selected' : ''; ?>>
                            <?= $loop["categoryname"]; ?>
                        </option>
                    <?php } ?>
                </select>
                    <div class="col">
                        <input type="date" class="input" name="date" value="<?= $date; ?>" required />
                    </div>
                  <button type="submit" class="button" name="updatebtn">update</button>
                </div>
            </form>
        </div>
    </div>
    <div class="bsb-hero-5 bsb-overlay" style="background-image: url('asset/banner\ background.png'); height:250px;"></div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../php project/asset/bus image 1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">London Double Decker</h5>
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
