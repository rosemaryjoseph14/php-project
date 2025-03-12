<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php
require("query.php");

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
}
$busnamedetl = $detailsbus->busnames();
$placenamedetl = $detailsbus->placename();
$categorydetl = $detailsbus->categoryname();
$graphdetl = $detailsbus->graphfuntion();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <style>
        #wrapper {
            display: block !important;

        }
    </style>
</head>
<body>
<?php
            include("../component/header.php");

            ?>
    <div class="container-fluid">
        <div class="row w-100">
         
            <div id="sidebarbox">

                <?php
                require("../component/sidebar.php");
                ?>
            </div>
            <div id="content-wrapper">
                <div id="wrapper" class="col">
                    <div id="" class="d-flex flex-column ml-0 ">
                        <div id="content">
                            <div class="container-fluid">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-2">
                                    <h1 class="h3 mb-0 text-gray-900">BUS DETAILS</h1>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-xl-3 col-md-6 mb-4" style="width: 33%;">
                                        <div class="card border-left-primary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <?php
                                                        foreach ($busnamedetl as $loop) {
                                                            echo '
                                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            Total Number of Buses</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"> ' . $loop['count'] . ' </div>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-4" style="width: 33%;">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <?php
                                                        foreach ($placenamedetl as $loop) {
                                                            echo '
                                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1 pl-3">
                                                            placelist
                                                        </div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800 pl-3">' . $loop['count'] . '</div>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-4" style="width: 33%;">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <?php
                                                        foreach ($categorydetl as $loop) {
                                                            echo '
                                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 pl-3">
                                                            Categorys</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800 pl-3">' . $loop['count'] . '</div>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-8 col-lg-7  w-100">
                                        <div class="card shadow mb-4">
                                            <div
                                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">Chart Overview</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="chart-area"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        var options = {
            series: [{
                name: "Desktops",
                data: <?php echo  json_encode($graphdetl) ?>,
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Product Trends by Month',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            }
        };

        var chart = new ApexCharts(document.querySelector(".chart-area"), options);
        chart.render();
    </script>
    <script>
        document.getElementById("content-wrapper").style.transition = "all 1s";
        document.getElementById("content-wrapper").style.marginLeft = "17%";
        document.getElementById("sidebarbox").style.marginLeft = "-1%";
        document.getElementById("content-wrapper").style.width = "84%";
        document.getElementById("content-wrapper").style.float = "right";
    </script>
    <script src="../js/script.js"></script>
</body>

</html>