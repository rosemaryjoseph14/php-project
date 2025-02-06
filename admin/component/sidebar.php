<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/sidebar.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    require("header.php");
    ?>
    <div class="col col-xl-2" style="padding: 0px;">
        <div>
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion position-absolute " style="transition:all 0.5s;" id="menuToggle">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fa-solid fa-bus"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">BookmyBus</div>
                </a>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <a href="../dashbord/" style="color: white;  margin-left:20px;"> <span>Dashboard</span></a>
                    </a>
                </li>
                <div class="sidebar-heading ml-3 mt-3">Interface</div>

                <a href="../category" style="color: white;  margin-left:20px; margin-top:10px; margin-bottom:10px;">Category</a>
                <a href="../placelist" style="color: white; margin-left:20px;  margin-top:10px; margin-bottom:10px;">placelist</a>
                <a href="../busdetails" style="color: white; margin-left:20px;  margin-top:10px; margin-bottom:10px;">busdetails</a>
                <div class="text-center d-none d-md-inline">
                </div>
            </ul>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>