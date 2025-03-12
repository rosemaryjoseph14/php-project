<?php
require("query.php");
$detailsplace = $detailsbus->dataplace();
$detailscategory = $detailsbus->datacategory();
$results = $detailsbus->busfuntion();

$placefrom = isset($_GET["placefrom"]) ? $_GET["placefrom"] : "";
$placeto = isset($_GET["placeto"]) ? $_GET["placeto"] : "";
$bustype = isset($_GET["bustype"]) ? $_GET["bustype"] : "";
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <title>Search bus</title>
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
    <?php

    if ($results) {
        echo '<div class="container mt-5">
                <div class="row gap-3">';
        foreach ($results as $loop) {
            echo '
                        
                        <div class="card" style="width:25%; ">
                        <img src="uploads/' . $loop["images"] . '" style="height: 250px;object-fit: cover;">
                        <div class="card-body">
                        <div class="cardbox d-flex flex-wrap">
                        <span><p class="card-title fw-semibold">' . htmlspecialchars($loop["froms"]) . '</p></span>
                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
                        <span><p class="card-title fw-semibold"> ' . htmlspecialchars($loop["tos"]) . '</p></span
                        <span><p class="card-title mt-3 fw-semibold">Bus Type :  ' . htmlspecialchars($loop["types"]) . '</p></span>
                        </div>
                        </div>
                        </div>
              ';
        }
    } else {
        echo '<div class="container mt-5 text-center">
        <h5>Oops! No buses found.</h5>
        Sorry, no buses are available on this route for the selected date.</div>';
    }
    ?>
    <div style="margin-top: 150px;">
        <?php
        include('footer.php');
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>

</html>