<?php include 'conction.php' ;
// session_start();

// <?php
// get data from DB
$Id = $_GET["id"];
$query = "SELECT * FROM users_224 where idres=" . $Id;
// echo $query;
$result = mysqli_query($connection, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result); //there is only 1 item with id=X
} else die("DB query failed.");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styleObject.css">
        <link rel="icon" href="images/Red1.png">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!--js-->
        <script src="js/object.js"></script>
        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Bellota+Text:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&display=swap" rel="stylesheet">
        <!--google api-->
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-1TKLo1HNg4NQrbri2yDfEoNORkMnlfY&callback=initMap">
        </script>

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
        <ul class="breadcrumbs">
        <li class="breadcrumbs_item">
            <a href="homepage.html" class="breadcrumbs_link">Home</a>
        </li>
        <li class="breadcrumbs_item">
            <a href="#" class="breadcrumbs_link">Profile</a>
        </li>
        <li class="breadcrumbs_item">
            <a href="#" class="breadcrumbs_link">Here for you</a>
        </li>
        <li class="breadcrumbs_item">
            <a href="#" class="breadcrumbs_link--active">Report</a>
        </li>
    </ul>
            <section  class="edit-delete">
        <a href="#" class="edit" id="edit"><img src="images/edit.png"></a > <a href="delete.php?idres=<?php echo($row['idres'])?>" class="edit"  id="delete"><img src="images/delete.png"></a>
          </section>  
          <section class="wrapper">
                <section class="status">
                    
                    <h1>Report</h1>
                    <h3>
                        Status: done <img src="images/check.png">
                    </h3>
                    <h5> Report conclusion
                    </h5>
                </section>
                <section class="headobj">
                    <section class="noa">
                    <?php echo '<span>' . $row["name"] .'<br>Age: ' .$row["age"].  '</span><br>';?>
                    <?php echo '<span>' . $row["email"] .'<br>' .$row["phone"].  '</span>';?>
                    </section>
                    <section class="loc">
                        <span class="loca"> Israel<img src="images/map.png">
              <br>
         <section id="map"></section>
                </span>
                    </section>
                </section>
                <div class="desc">
                    <h4><b>The Description of attack</b></h4>
                 <?php echo  '<span>' . $row["descript"] .'</span>' ?>
                </div>
                <div class="listen">
                    <button>
                Listen to recording

                </button>
                    <a href="#"><img src="images/Mic.png"></a>
                    <a href="#"><img src="images/Replay.png"></a>
                    <a href="#"> <img src="images/Skip.png"></a>
                    <a href="#"> <img src="images/Volume.png"></a>
                </div>

                <div class="desc">
                    <h4><b>
                REDHOOD response
               </b> </h4><form action="save1.php">
                    <span id="desc"><?php echo(($row['response'])? $row['response']:'Thank you for helping us create a better world! our recpiects will answer to you soon as possible.') ;?>
            </b></span>
            <input type=hidden  name='id' value='<?php echo($row['idres'])?>'></span></form>
                </div>
            </section>
        </main>
        <footer>
    <section class="footer ">
        <section class="footer-right ">
            <button class="chat ">chat  <img src="images/sms.png " ></button>
            <section>FOLLOW US</section>
            <img src="images/facebook.png ">
        </section>
        <section>©2021 Redhood US LLC. All Rights Reserved</section>
    </section>
    <div class="mobile ">
        <section>
            <a href="# "><img src="images/Home.png "></a>
        </section>
        <section>
            <a href="# "><img src="images/Account.png "></a>
        </section>
        <section>
            <a href="# "><img src="images/Call.png "></a>
        </section>
        <section>
            <a href="# "><img src="images/Search.png "></a>
        </section>
    </div>
</footer>
        <script>
            window.onload(
            edit())
        </script>
    </body>

    </html>
    <?php
//close DB connection
mysqli_close($connection);
?>