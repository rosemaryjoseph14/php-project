<?php
require("query.php");

$detailsplace = $detailsbus->dataplace();
$detailscategory = $detailsbus->datacategory();
$bustbldet = $detailsbus->bustable();
$editdata = $detailsbus->dataedit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <title>Document</title>
    <style>
        .popupbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
            justify-content: center;
            align-items: center;
        }
        .popupboxd {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
            justify-content: center;
            align-items: center;
        }
        .inputbox {
            width: 35%;
            margin: auto;
            height: 550px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 70px;
            border-radius: 5px;
            background-color: #ffffff;
            padding: 40px;
        }

        .inputedit {
            border-radius: 5px;
            width: 100%;
            height: 30px;
        }
        .btns {
            width: 80px;
            border-radius: 3px;
            height: 30px;
            background-color: #0236b5;
            margin-bottom: 10px;
            color: #ffffff;
            border: none;
        }
        .close-btn {
            background-color: red;
            color: #ffffff;
            width: 90px;
            height: 30px;
            border: none;
            border-radius: 3px;
            margin-right: 10px;
        }
        .submit-btn {
            background-color: green;
            color: #ffffff;
            width: 90px;
            height: 30px;
            border: none;
            border-radius: 3px;
        }
        .inboxform {
            margin-bottom: 50px;
        }
        .btnsub {
            width: 100px;
            height: 40px;
            border-radius: 5px;
            border: none;
            background-color: green;
            color: white;
            margin-top: 10px;
        }
        .sub {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .img {
            width: 35px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row w-100">
            <?php
            require("../component/sidebar.php");
            ?>
            <div class="col">
                <form action="query.php" method="post">
                    <button type="button" class="btns" onclick="showPopup()">Add</button>
                </form>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Bus</th>
                            <th>Types</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Date</th>
                            <th>images</th>
                            <th>reg-date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($bustbldet as $loop) {
                            echo '<tr>
                           <td>' . $loop["id"] . '</td>
                           <td>' . $loop["bus"] . '</td>
                           <td>' . $loop["types"] . '</td>
                           <td>' . $loop["froms"] . '</td>
                           <td>' . $loop["tos"] . '</td>
                           <td>' . $loop["dates"] . '</td>
                           <td><img src="' . $loop["images"] . '" class="img"/></td>
                           <td>' . $loop["reg_date"] . '</td>
                           <td>
                            <div class="btned" style="display:flex; gap:5px">
                            <form action="" method="post">
                            <button type="submit" name="edeit" value="' . $loop["id"] . '" style="width:70px; height:30px; border:none; background:none; margin-bottom: 5px; color:#0236b5;"><i class="fa-solid fa-pen-to-square"></i></button>                
                            </form>
                            <form action="query.php" method="post">
                            <button type="submit" name="delete" value="' . $loop["id"] . '"  style="width:70px; height:30px ;border:none; background:none; color:#c40f0f;" ><i class="fa-solid fa-trash"></i></button>
                            </form>
                            </div>
                            </td>
                           </tr>';
                        };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="popupbox" id="popupBox">
        <div class="inputbox">
            <form action="query.php" method="post" class="inboxform" enctype="multipart/form-data">
                <div style="text-align:right;" onclick="closePopup()"><i class="fa-solid fa-xmark"></i></div>
                <h4 style="margin-bottom: 30px;">Add Bus Details</h4>
                <label style="color:#838383;">Bus Name</label>
                <input type="text" name=" buss" style="width:100%;border:1px solid #9c97974d; height:36px;border-radius:5px;" />

                <label style="color:#838383;  margin-top:10px;">type bus</label>
                <select class="form-select" aria-label="Default select example" name="bustype" require>
                    <option selected>select type</option>
                    <?php
                    foreach ($detailscategory as $loop) {
                        echo '
                    <option value="' . $loop["categoryname"] . '">' . $loop["categoryname"] . '</option>';
                    }
                    ?>
                </select>
                <label style="color:#838383; margin-top:10px;">From</label>
                <select class="form-select" aria-label="Default select example" name="placefrom" require>
                    <option selected>select place</option>
                    <?php
                    foreach ($detailsplace as $loop) {
                        echo '
                    <option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
                    }
                    ?>
                </select>
                <label style="color:#838383;  margin-top:10px;">To</label>
                <select class="form-select" aria-label="Default select example" name="placeto" require>
                    <option selected>select place</option>
                    <?php
                    foreach ($detailsplace as $loop) {
                        echo '
                    <option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
                    }
                    ?>
                </select>
                <div class="inputdate pt-3">
                    <input type="date" name="dateinput" require style="height: 40px; border:1px solid #ececec; padding:10px;" />
                </div>

                <input type="file" name="imguplod" />
                <div class="sub">
                    <button type="submit" name="submitbtns" class="btnsub">Submit</button>
                </div>
            </form>

        </div>
    </div>
    <?php
    if (isset($_POST["edeit"])) {

        foreach ($editdata as $update) {

            echo '
    <div class="popupboxd" >
        <div class="inputbox">
            <form action="query.php" method="post" class="inboxform">
            <div style="text-align:right;" onclick="closePopupo()"><i class="fa-solid fa-xmark"></i></div>
                <label style="color:#838383;">Bus Names</label>
                <input type="text" name=" buss" style="width:100%;border:1px solid #9c97974d; height:36px;border-radius:5px;" value="' . $update['bus'] . '" />

                <label style="color:#838383;">type bus</label>
                <select class="form-select" aria-label="Default select example" name="bustype" require>
                <option value="' . $update['types'] . '" selected>' . $update["types"] . '</option>';
    ?>
            <?php
            foreach ($detailscategory as $loop) {
                echo '
                    <option value="' . $loop["categoryname"] . '">' . $loop["categoryname"] . '</option>';
            }
            ?>
            <?php
            echo
            ' </select>
                <label style="color:#838383;">From</label>
                <select class="form-select" aria-label="Default select example" name="placefrom" require>
                <option  value="' . $update['froms'] . '"  selected>' . $update['froms'] . '</option>';
            ?>
            <?php
            foreach ($detailsplace as $loop) {
                echo '
                    <option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
            }
            ?>
            <?php echo '
                </select>
                <label style="color:#838383;">To</label>
                <select class="form-select" aria-label="Default select example" name="placeto" require>
                <option  value="' . $update['tos'] . '"  selected> ' . $update['tos'] . ' </option>';
            ?>
            <?php
            foreach ($detailsplace as $loop) {
                echo '
                    <option value="' . $loop["placename"] . '">' . $loop["placename"] . '</option>';
            }
            ?>
    <?php 
    echo ' 
        </select>
        <input type="file" name="imguplod"/> 
        <div class="inputdate pt-3">
        <input type="date" name="dateinput" require />
        </div>
        <div class="sub">
        <button type="submit" name="updatebtn" value="' . $update["id"] . '" class="btnsub">Submit</button>
        </div>
        </form>
        </div>
    </div>';
        };
    }
    ?>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://kit.fontawesome.com/64fc7c3650.js" crossorigin="anonymous"></script>

    <script>
        function showPopup() {
            document.getElementById("popupBox").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("popupBox").style.display = "none";
        }

        function closePopupo() {
            document.querySelector(".popupboxd").style.display = "none";
        }
    </script>
</body>

</html>