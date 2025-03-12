<?php
require("query.php");
$dd = $category->datacategory();
$hh = $category->dataedit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <title>Document</title>
</head>
<style>
    .popupbox {
        width: 100%;
        position: absolute;
        z-index: 2;
        height: 100vh;
        display: flex;
        background-color: #00000057;
    }

    .inputbox {
        width: 30%;
        height: 200px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        background-color: #ffffff;
    }

    .inputedit {
        border-radius: 5px;

    }

    .btn {
        background-color: #0236b5;
        color: #ffffff;
    }

    #wrapper {
        display: block !important;

    }
</style>

<body>
    <?php
    if (isset($_POST["edit"])) {
        foreach ($hh as $loop) {
            echo '<div class="popupbox">
        <div class="inputbox">
        <form action="query.php" method="post">
        <div class="inputbtn">
        <input type="text" name="editinput" value="' . $loop["categoryname"] . '" class="inputedit mb-2"/>
        </div>
        <div>
        <button type="submit" name="cancel"  style="background:red; color:#ffffff; width:90px; height:30px; border:none; border-radius:3px">cancel</button>
        <button type="submit" name="submit"  value="' . $loop["id"] . '" style="background:green; color:#ffffff; width:90px; height:30px; border:none; border-radius:3px">submit</button>
        </div>
        </form>
        </div>
        </div>';
        }
    };
    ?>
    <div class="container-fluid">
        <div class="row w-100">
            <?php
            include("../component/header.php");

            ?>
            <div id="sidebarbox">

                <?php
                require("../component/sidebar.php");
                ?>

            </div>
            <div id="content-wrapper">
                <div id="wrapper" class="col">
                    <form action="query.php" method="post">
                        <input type="text" placeholder="Add category" name="categoryname" />
                        <button type="submit" style="border:none; background:#0236b5; margin-left: 10px ;color:white; width:70px; height:30px; border-radius:3px; margin-bottom:30px;" name="addct">Add</button>
                    </form>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Buses</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($dd as $loop) {

                                echo
                                '<tr>
                <td>' . $loop["id"] . '</td>
                <td>' . $loop["categoryname"] . '</td>                
                <td>
                <div class="btned" style="display:flex; gap:5px">
                <form action=" " method="post">
                <button type="submit" name="edit" value="' . $loop["id"] . '" style="width:70px; height:30px; border:none; background:none; margin-bottom: 5px; color:#0236b5;"><i class="fa-solid fa-pen-to-square"></i></button>                
                </form>
                <form action="query.php" method="post">
                <button type="submit"  value="' . $loop["id"] . '" name="delete" style="width:70px; height:30px ;border:none; background:none; color:#c40f0f;" ><i class="fa-solid fa-trash"></i></button>
                </form>
                </div>
                </td>
                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>
    <script>
        document.getElementById("content-wrapper").style.transition = "all 1s";
        document.getElementById("content-wrapper").style.marginLeft = "17%";
        document.getElementById("sidebarbox").style.marginLeft = "-1%";
        document.getElementById("content-wrapper").style.width = "84%";
        document.getElementById("content-wrapper").style.float = "right";
    </script>
</body>
</html>