<?php include 'conction.php' ?>
<?php

$Id = $_GET["id"];
$query1 = "SELECT * FROM tbl_users_224 where id= ".$Id." and type ="."'M'";


$result1 = mysqli_query($connection, $query1);

if ($result1) {
    $row1 = mysqli_fetch_assoc($result1); //there is only 1 item
    if($row1['type']!='M'){
        
        die("DB query failed.");
    }
}

$query = "SELECT * FROM users_224 ";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result); //there is only 1 item
   
} else die("DB query failed.");
//release returned data
?>



<!DOCTYPE html>
<html>

<head>
    <title>REDHOOD</title>
    <link rel="stylesheet" href="css/styleList.css">
    <link rel="icon" href="images/Red1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/list.js"></script>
    <script src="js/list.json"></script>
</head>

<body id="h2">
    <header>
   
        <a href="homepage.html" id="logo"><img src="images/logo.png"></a>
        <section class="header1">
            <button href="#" class="shira2"><?php  echo '<img src=' . $row1["photo"] .'>' . $row1["name"] ?></button>
            <button href="#" class="bell"><img src="images/messege.png"></button>
            <button href="#" class="bell"><img src="images/bell.png"></button>
            <button href="#" class="bell"><img src="images/down.png"></button>
        </section>

    </header>

    <main >  
        
        <section class="wrapper">
        <ul class="breadcrumbs">
            <li class="breadcrumbs_item">
                <a href="" class="breadcrumbs_link">Home</a>
            </li>
            <li class="breadcrumbs_item">
                <a href="" class="breadcrumbs_link">Walk and talk</a>
            </li>
            <li class="breadcrumbs_item">
                <a href="" class="breadcrumbs_link--active">docunentation</a>
            </li>
        </ul>
        <a class="menu" href="#"></a>

        <section class="sh">
            <button class="shira"><?php  echo '<img src=' . $row1["photo"] .'>' . $row1["name"] ?></button>
            <span class="docu">Documentaion</span>
            <div class="btn-group" role="group">
                <button  type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Filter reports by
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li id="filter"><a class="dropdown-item" href="#" id="by_Bulling">Bulling</a></li>
                    <li id="filter"><a class="dropdown-item" href="#" id="by_Rape">Rape</a></li>
                    <li id="filter"><a class="dropdown-item" href="#" id="by_Sexual">Sexual harassment</a></li>
                    <li id="filter"><a class="dropdown-item" href="#" id="by_Other">Other</a></li>
                    <li id="filter"><a class="dropdown-item" href="#" id="by_noting">See all</a></li>
                </ul>
            </div>
        </section>






        <section class="search">
            
        </section>
        <?php
       
       while ($row = mysqli_fetch_assoc($result)) { //results are in associative array. keys are cols names
            echo '<section class="list">';
            echo($row["photo"] == ''? '':'<img src="'.$row["photo"].'">');
            
            echo '<span >' .$row["name"]. '</span>';
           echo '<span >' .$row["phone"]. '</span>';
           echo '<span class="attack" data-attackid="' .$row["attack"]. '" id="'.$row["attack"] .'">' . '</span>';
           echo '<span >' .$row["date"]. '</span>';
           echo '<a href="objectM.php?id='.$row["idres"].'" class="btnbtn">See report </a>';
           echo '</section>';
       }
       mysqli_free_result($result);
       ?>
        </br>
        <button class="D">
                Download File <img src="images/download.png">
              </button>
        <section class="pages">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </section>
       
    </main>  <section class="menuA">
            <a class="exitMenu " href="# "></a>
            <ul class="menuC">
                <li > <a href="#" ><img src="images/profile.png">Employee Profile</a></li>
                   

                   <li ><a href="#"><img src="images/salary.png">Salary </a></li>
                  


                   <li > <a href="#" ><img src="images/Attendance.png">Attendance</a></li>
                  
                   <li ><a href="#" ><img src="images/sick leave.png">Sick leave</a></li>
                   

                   <li><a href="#"><img src="images/event.png">REDHOOD event's</a></li>
                   

                   <li > <a href="#" ><img src="images/setting.png">Settings</a></li>
                  
            </ul>
        </section></section>
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
  ( function() {
       $("#by_Rape").click(function filter() {
             var list=$(".list");
             var slides = $(".attack");
             var i = 0,j=0;
        list.each(function l(){
            $(list[j]).css({ display: "flex" });
            j++;
        });
                       slides.each( function(){
                        
                        var el= $(this).data("attackid");
                       
                        if(el != 2){
                        
                            $(list[i]).css({display:"none"});
                        }
                            i++;
                      })
                
    })

    $("#by_Bulling").click(function filter2() {
        var list = $(".list");
        var slides = $(".attack");
        var i = 0,j=0;
        list.each(function l4(){
            $(list[j]).css({ display: "flex" });
            j++;
        });
        slides.each(function() {

            var el = $(this).data("attackid");

            if (el != 3) {

                $(list[i]).css({ display: "none" });
            }
            i++;
        })



        })
        $("#by_Sexual").click(function filter2() {
        var list = $(".list");
        var slides = $(".attack");
        var i = 0,j=0;
        list.each(function l3(){
            $(list[j]).css({ display: "flex" });
            j++;
        });
        slides.each(function() {
            var el = $(this).data("attackid");
            if (el != 1) {

                $(list[i]).css({ display: "none" });
            }
            i++;
        }) } )




$("#by_Other").click(function filter2() {
        var list = $(".list");
        var slides = $(".attack");
        var i = 0,j=0;
        list.each(function l2(){
            $(list[j]).css({ display: "flex" });
            j++;
        });
        slides.each(function() {

            var el = $(this).data("attackid");

            if (el != 4) {

                $(list[i]).css({ display: "none" });
            }
            i++;
        })



})
$("#by_noting").click(function filter2() {
        var list = $(".list");
        var slides = $(".attack");
        var i = 0,j=0;
        list.each(function l1(){
            $(list[j]).css({ display: "flex" });
            j++;
        });
        slides.each(function() {

            var el = $(this).data("attackid");

                $(list[i]).css({ display: "flex" });
        
            i++;
        })



})})(jQuery);

</script>
</body>

</html>

   
<?php
//close DB connection
mysqli_close($connection);
?>

