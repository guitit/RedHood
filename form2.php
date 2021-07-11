 <?php include 'conction.php'; 
 
   $result=false;
    $state  = "insert";
    if(isset($_GET['id'])){
    $Id = $_GET['id'];
        
    $query     = "SELECT * FROM tbl_users_224 where id=" . $Id;

    $result = mysqli_query($connection, $query);

   
    if ($result) {
        $row  = mysqli_fetch_assoc($result); //there is only 1 with id=X

        $state   = "edit";
    }
}
    //else die("DB query failed.");//i dont want it to fail. i want it to cont.

    ?>


 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">    
     
      <link rel="stylesheet" href="css/styleFormB.css">

     <link rel="icon" href="images/Red1.png">
     <!--bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
     <!--js-->
     <script src="js/form.js"></script>
     <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

     <title>REDHOOD</title>
 </head>

 
 </head>

 <body class="h3">

     <!--Header-->

     <header class="headerh1">
        <a href="homepage.html" id="logo"><img src="images/logo.png"></a>
        <section>
            <ul class="nav-list">
                <li><a href="#">About us</a></li>
                <li><a href="#">How it works</a></li>
                <li> <a href="#">Information</a></li>
                <li><a href="#">Contact us</a></li>

                <form><input type="text" value="search..." class="search" required name="search"></form>

                <a href="http://localhost/redhood/login.php" class="login">log in</a>
            </ul>
        </section>
    </header>
     <!--Breadcrumbs-->


     <!--Humburger-->
     <a class="menu" href="#"></a>
     <main class="main3">
         <section class="headmain">
             <ul class="breadcrumbs">
                 <li class="breadcrumbs_item">
                     <a href="homepage.html" class="breadcrumbs_link">Home</a>
                 </li>

                 <li class="breadcrumbs_item">
                     <a href="" class="breadcrumbs_link--active">New member</a>
                 </li>
             </ul>
             <section class="form2-head">
                 <h1>Registration</h1>
                 <h5>Welcome to REDHOOD family!<br>

                     We're happy you join us, this is the first step of this journey.<br>

                     Help us to create this world a better place.</h5>
             </section>

             <section class="form1">
                 <form class="row g-3 needs-validation"  action="save2.php"method="get">                    <div class="line-box">
                         <section class="headline-form">REDHOOD Registration form <img src="images/Red.png"> </section>
                         <div class="form-box">


                             <section class="form">
                                 <div class="form-row">
                                     <div class="col-md-4 mb-3 form-group">
                                         <label>User type:</label>
                                         <div class="form-check">
                                             <input class="form-check-input"  name="type"value="M" type="radio" id="flexRadioDefault1">
                                             <label class="form-check-label" for="flexRadioDefault1">
                                                 Telephone Recpiects
                                             </label>
                                         </div>
                                         <div class="form-check">
                                             <input class="form-check-input" name="type" value="U" type="radio" id="flexRadioDefault2" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                 Regular user
                                             </label>
                                         </div>
                                     </div><section id="checkboxError"> choose at least 1</section>
                                 </div>
                                 <section class="box-f">
                                     <section class="tit"> Personal details</section>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom01">Name:</section>
                                             <input type="text" class="form-control" id="validationCustom01" required name="name" value="<?php echo($state=='edit'? $row['name']:'')  ?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 invalid !
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom04">Id:</section>
                                             <input type="text" class="form-control" id="validationCustom04" name="id"  maxlength="10" value="<?php echo($state=='edit'? $row['id']:'')  ?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 need 9 or 10 numbers!
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom04">Date of birth:</section>
                                             <input type="text" class="form-control" id="validationCustom04" name="birth" value="<?php echo($state=='edit'? $row['birth']:'')   ?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 need 9 or 10 numbers!
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <label>Gender:</label>
                                             <div class="form-check">
                                                 <input class="form-check-input" type="radio" name="gender"value="male"  id="flexRadioDefault1">
                                                 <label class="form-check-label" for="flexRadioDefault1">
                                                     male
                                                 </label>
                                             </div>
                                             <div class="form-check">
                                                 <input class="form-check-input"type="radio" name="gender" value="female"  id="flexRadioDefault2" checked>
                                                 <label class="form-check-label" for="flexRadioDefault2">
                                                     female
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                                 <section class="box-f">
                                     <section class="tit"> Contact Information </section>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom03">Email:</section>
                                             <input type="email" class="form-control" id="validationCustom03" required name="email" value="<?php echo($state=='edit'? $row['email']:'')   ?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 invalid email!
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom04">Phone:</section>
                                             <input type="text" class="form-control" id="validationCustom04" name="phone" minlength="9" maxlength="10" value="<?php echo($state=='edit'? $row['phone']:'')  ?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 need 9 or 10 numbers!
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom01">Address:</section>
                                             <input type="text" class="form-control" id="validationCustom01" required name="address" value="<?php echo($state=='edit'? $row['address']:'')   ?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 invalid !
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom01">City:</section>
                                             <input type="text" class="form-control" id="validationCustom01" required name="city" value="<?php echo($state=='edit'? $row['city']:'')   ?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 invalid !
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                                 <section class="box-f">
                                     <section class="tit"> User Details </section>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom01">User name:</section>
                                             <input type="text" class="form-control" id="validationCustom01" required name="user" value="<?php echo($state=='edit'? $row['user']:'')   ?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 invalid !
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-row">
                                         <div class="col-md-4 mb-3 form-group">
                                             <section for="validationCustom04">Password:</section>
                                             <input type="text" name="password" class="form-control" id="validationCustom04"  minlength="4" value="<?php echo($state=='edit'? $row['password']:'')?>">
                                             <div class="valid-feedback">
                                                 Looks good!
                                             </div>
                                             <div class="invalid-feedback">
                                                 need 9 or 10 numbers!
                                             </div>
                                         </div>
                                     </div>
                                     <section>
                                         <div class="form-row">
                                             <div class="col-md-4 mb-3 form-group">
                                                 <section for="validationCustom08">Photo:</section>
                                                 <input type="file" class="form-control" id="inputGroupFile02" name="photo" value="<?php echo($state=='edit'? $row['photo']:'https://www.pinclipart.com/picdir/middle/379-3796154_profile-clipart-john-doe-circle-png-download.png')?>">

                                             </div>
                                         </div>
                                     </section>
                                     <div class="form-row"><input type="hidden" name="state" value="<?php echo $state ?>"></div>
                                 </section>


                                 <section class="btn-btn">
                                     <button type="submit" class="btn btn-primary" value="">send</button>
                                 </section>
                             </section>  </div>
             </div>

                 </form>
             </section> 
                    <?php

                    if ($result) {
                        mysqli_free_result($result);
                    }

                    ?>
             



           
            

             <section class="menuA">
                <a class="exitMenu " href="# "></a>
                <ul class="menuC">
                    <li><a href="# ">Home page</a></li>
                    <li><a href="# ">About us</a></li>
                    <li><a href="# ">How it works</a></li>
                    <li><a href="# ">Information</a></li>
                    <li><a href="# ">Contact us</a></li>
                    <li>
                        <a href="# "><img src="images/setting.png"> Settings</a>
                    </li>
                </ul>
            </section>
          

     </main>

     <footer>
         <section class="footer ">
             <section class="footer-right ">

                 <button class="chat ">chat <img src="images/sms.png "></button>
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

 </body>
 <!-- <script>
                 (() => {

                     const forms = document.querySelectorAll('.needs-validation');

                     Array.prototype.slice.call(forms).forEach((form) => {
                         form.addEventListener('submit', (event) => {
                             var checkboxes = document.querySelectorAll("input[type=checkbox]");
                             var checkboxesValid = false;
                             checkboxes.forEach(function(checkbox) {
                                 if (checkbox.checked) {
                                     checkboxesValid = true;
                                 }
                             })
                             if (!form.checkValidity() || !checkboxesValid) {

                                 event.preventDefault();
                                 event.stopPropagation();
                                 if (!checkboxesValid) {
                                     document.getElementById("checkboxError").style.display = "block";
                                 }
                             }
                             form.classList.add('was-validated');
                         }, false);
                     });
                 })();
             </script> -->
 </html>
 <?php
    //close DB connection
    mysqli_close($connection);
    ?>