<?php
session_start();
if (isset($_SESSION['login'])) {
    header("location:dashbord/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/login.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container ">
        <div class="row mainbody ">
            <div class=" col login h-75 col-xl-4 mx-auto p-4">
                <p style="text-align: center; font-weight:600; font-family:Segoe Print; font-size:larger; margin-top:25px;">BookMyBus</p>
                <h4 style="font-weight:500; text-align:center; color:#193066; margin-bottom:40px; margin-top:35px;">LOGIN</h4>
                <div>
                <!-- <div class="col">
                    <label class="w-100 pb-2 text-dark-emphasis">Name :</label>
                    <input type="text" class="input " />
                </div> -->
                    <form action="query.php" method="post">
                        <div class="col ">
                            <label class="w-100 pb-2 text-dark-emphasis">E-mail :</label>
                            <input type="email" class="input" name="email" />
                        </div>
                        <div class="col ">
                            <label class="pb-2 text-dark-emphasis">password :</label>
                            <input type="password" class="input" name="password" />
                        </div>
                </div>
                <div class="buttonmain mx-auto text-center">
                    <button type="submit" class=" clickbutton" name="loginbutton">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>

                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>