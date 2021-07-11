<?php include 'conction.php'; ?>
<?php include 'config.php'; ?>

<?php

if (!empty($_POST["user"])) {
    $query = "SELECT * FROM tbl_users_224 where user='"
        . $_POST["user"]
        . "' and password ='"
        . $_POST["password"]
        . "'";



    $result = mysqli_query($connection, $query);
    $row    = mysqli_fetch_array($result);

    if (is_array($row)) {
        session_start();
        $_SESSION["user_id"] = $row['id'];
        header('location: profile'.$row['type'].'.php?id='.$row['id']);
    } else {
        $message = 'Invalid username or password !';
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>REDHOOD</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="icon" href="images/Red1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body class="h5">
    <header>
        <a href="homepage.html" id="logo"><img src="images/logo.png"></a>
        <section>
            <ul class="nav-list">
                <li><a href="#">About us</a></li>
                <li><a href="#">How it works</a></li>
                <li> <a href="#">Information</a></li>
                <li><a href="#">Contact us</a></li>
                <li>
                    <form><input type="text" value="search..." class="search" required name="search"></form>
                </li>
            </ul>
        </section>
    </header>
    <main>
        <section class="headline">
            <h1 class="title-h5">Welcome </h1><img src="images/pieps.png">
            <section class="creating">

            </section>
        </section>
        <section class="boxs">
            <form action="#" method="post">

                <input type="text" name="user" value="Username..." class="user"   >
                <input type="text" name="password" value="Password..." class="user" >
                <div class="error-message"><?php if (isset($message)) {
                                 echo $message;
                             } ?></div>
                <input class="login" type="submit" value="log in">

               
               
               
            </form>
            <section >

                <a href="#">Forgot Password?</a>
            </section>
        </section>
    </main>

    <footer>
        <section class="footer">

            <section class="footer-right">

                <button class="chat">chat <img src="images/sms.png"></button>
                <section>FOLLOW US</section>
                <img src="images/facebook.png">

            </section>
            <section>©2021 Redhood US LLC. All Rights Reserved</section>
    </footer>
</body>

</html>
<?php
    //close DB connection
    mysqli_close($connection);
    ?>