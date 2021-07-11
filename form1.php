  <?php include 'conction.php';
    $result = false;
    $state  = "insert";
    $Id = $_POST['id'];
    $Photo=$_POST['photo'];
    $Name=$_POST['name'];
    if (isset($_GET['id'])) {
        $Id = $_GET['id'];
       
        $query     = "SELECT * FROM users_224 where id=" . $Id;

        $result = mysqli_query($connection, $query);

        if ($result) {

            $row  = mysqli_fetch_assoc($result); //there is only 1 with id=X

            $state   = "edit";
        }
    }
    ?>




  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/styleFormA.css">
      <link rel="icon" href="images/Red1.png">
      <!--bootstrap--><script src="js/form.js"></script>    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <!--js-->
      
      <!--google api-->
      <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-1TKLo1HNg4NQrbri2yDfEoNORkMnlfY&callback=initMap">
      </script>

      <title>REDHOOD</title>
  </head>



  <body class="h3">

      <!--Header-->

      <header>
          <a href="homepage.html" class="logo"><img src="images/logo.png"></a>

          <section class="header1">
              <button href="#" class="bell"><img src="images/messege.png"></button>
              <button href="#" class="bell"><img src="images/bell.png"></button>
              <button href="#" class="bell"><img src="images/down.png"></button>
          </section>

      </header>

      <!--Breadcrumbs-->



      <main class="main3">
          <section class="headmain">
              <ul class="breadcrumbs">
                  <li class="breadcrumbs_item">
                      <a href="homepage.html" class="breadcrumbs_link">Home</a>
                  </li>
                  <li class="breadcrumbs_item">
                      <a href="profileU.php" class="breadcrumbs_link">Profile</a>
                  </li>
                  <li class="breadcrumbs_item">
                      <a href="#" class="breadcrumbs_link--active">Here for you</a>
                  </li>
              </ul>

          </section>
          <!--Humburger-->

          <a class="menu" href="#"></a>
          <section class="select-pro-box">
              <section class="select-box">
                  <div class="shira-top">
                      <a href="#" class="shira-pic">
                          <img src="<?php echo ($Photo) ?>"><?php echo ($Name )?>
                      </a>
                  </div>
                  <!--headline-->


              </section>
              <nav class="side">
                  <ul class="walk-group" list-group-flush>

                      <li class="call-status">
                          <section> Call status</section>

                          <button href="#" class="call-on">Call is on<img src="images/callon.png"></button>
                          <button href="#" class="record-button">Record call<img src="images/button.png" class="img-rec"></button>
                          <div class="line"></div>
                      </li>

                      <li class="upcoming-calls">
                          <section> Calls & Chat's</section>
                          <button class="record-button1">Waiting calls &nbsp;&nbsp;<img src="images/3.png"></button>
                          <button class="record-button1">Waiting chat's&nbsp;&nbsp;<img src="images/1.png"></button>

                          <div class="line"></div>
                      </li>

                      <li class="on-call">
                          <section> On call with</section>
                          <div class="anna">
                              App Username: Anna26 <br> Phone number: +972 52738190 &nbsp;&nbsp;<img src="images/anna.png (1).png">
                          </div>
                          <div class="line"></div>

                      </li>
                      <li>
                          <section class="locate"> Locate call</section>
                          <form>
                              <section class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                  <label class="form-check-label" for="flexCheckIndeterminate">
                                      <span class="agree">I agree to share location</label><img src="images/map.png"></span>
                              </section>
                              <section class="col-auto">


                                  <label for="inputPassword2" class="visually-hidden"></label>
                                  <input type="password" class="form-control1" id="inputPassword2" placeholder="Origin Place...">
                                  <img src="images/location.png">
                                  <label for="inputPassword2" class="visually-hidden"></label>
                                  <input type="password" class="form-control2" id="inputPassword2" placeholder="Final Destination...">
                          </form>
          </section>
          </li>
          <!--google api-->

          </ul>
          <section id="map"></section>
          </nav>
          </section>




          <div class="wrapper-h4">
              <h1 class="healine-walk-talk">
                  Walk and Talk - Incoming call
              </h1>

              <section class="options">
                  <section class="option-h">Call in process</section>

                  <section class="progress4">
                      <div class="progress-done4" data-done="55">15%</div>
                  </section>
              </section>
              <section class="options">
                  <section class="option-h">Help Options</section>
                  <section class="opt-btn">
                      <button href="#">SOS<img src="images/police.png"></button>
                      <button href="#">Stand by me<img src="images/court.png"></button>
                      <button href="#">Support team<img src="images/people.png"></button>
                      <button href="#">Here for you<img src="images/man.png"></button>
                  </section>
              </section>

              <section class="form1">
                  <form class="row g-3 needs-validation" method="get" action="save.php">

                      <div class="line-box">
                          <span class="headline-form">Report </span>
                          <div class="form-box">



                              <section class="form">
                                  <div class="form-row">
                                      <div class="col-md-4 mb-3 form-group">
                                          <section for="validationCustom01">Name:</section>
                                          <input type="text" class="form-control" id="validationCustom01" required name="name" value="<?php echo ($state == 'edit' ? $row['name'] : '') ?>">
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
                                          <section for="validationCustom03">Email:</section>
                                          <input type="email" class="form-control" id="validationCustom03" required name="email" value="<?php echo ($state == 'edit' ? $row['email'] : '') ?>">
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
                                          <input type="text" class="form-control" id="validationCustom04" name="phone" minlength="9" maxlength="10" value="<?php echo ($state == 'edit' ? $row['phone'] : '') ?>">
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
                                          <section for="validationCustom08">Age:</section>
                                          <input type="number" class="form-control" id="validationCustom08" required name="age" value="<?php echo ($state == 'edit' ? $row['age'] : '') ?>">
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
                                          <section> Acquaintance:</section>
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="know" value="yes">
                                              <label class="form-check-label" for="flexCheckDefault"> Yes</label>
                                          </div>
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="know" value="no">
                                              <label class="form-check-label" for="flexCheckChecked">No</label>
                                          </div>
                                      </div>
                                      <section id="checkboxError"> choose at least 1</section>
                                  </div>
                                  <div class="form-row">
                                      <div class="col-md-4 mb-3 form-group">
                                          <section>Gender:</section>
                                          <div class="form-check">
                                              <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                                              <label class="form-check-label" for="flexRadioDefault1">
                                                  male
                                              </label>
                                          </div>
                                          <div class="form-check">
                                              <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
                                              <label class="form-check-label" for="flexRadioDefault2">
                                                  female
                                              </label>
                                          </div>
                                      </div>
                                      <section id="checkboxError"> </section>
                                  </div>
                                  <section class="form-row">
                                        <section class="form-row-op"> Type of attack:</section>
                                  

                                     <select class="form-select" aria-label="Default select example" for="validationCustom05" name="attack" data-selected="">
                                         <option selected>Choose...</option>
                                         <option value="1">Sexual harassment</option>
                                         <option value="2">Rape</option>
                                         <option value="3">Bulling </option>
                                         <option value="4">Other </option>

                                     </select>
                                  </section>
                                  <div class="form-row">
                                      <div class="col-md-4 mb-3 form-group">
                                          <section for="validationCustom08">Photo:</section>
                                          <input type="file" class="form-control" id="inputGroupFile02" name="photo" value="<?php echo ($state == 'edit' ? $row['name'] : '') ?>">

                                      </div>
                                  </div>
                                  <div class="input-group mb-3">
                                      <span class="input-group-text" id="inputGroup-sizing-lg">Description of the attack:</span>
                                      <input type="text" class="form-control form-control-lg" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="descript" value="<?php echo ($state == 'edit' ? $row['descript'] : '') ?>">
                                      <div class="valid-feedback">
                                          Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                          invalid !
                                      </div>

                                  </div>

                                  <input type="hidden" name="state" value="<?php echo $state ?>">
                                  <input type="hidden" name="id" value="<?php echo $Id ?>">

                                  <section class="btn-btn">
                                      <button type="submit" class="btn btn-primary"> send</button>
                                  </section>
                              </section>
                  </form>
                  <?php
                    if ($result) {
                        mysqli_free_result($result);
                    }

                    ?>
              </section>




          </div>
          </div>

          </div>
          </div>
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
          <section class="footer">

              <section class="footer-right ">

                  <button class="chat ">chat <img src="images/sms.png "></button>
                  <section>FOLLOW US</section>
                  <img src="images/facebook.png ">

              </section>
              <section>©2021 Redhood US LLC. All Rights Reserved</section>
          </section>
          <div class="mobile">
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
  <script>
      
      window.onload=function init(){
          makeSelected();
      
          openMenu();
          closeMenu();
      };
  </script>

  </html>
  <?php
    //close DB connection
    mysqli_close($connection);
    ?>