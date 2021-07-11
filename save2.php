<?php include 'conction.php' ?>
<?php
//get data from query string and escape variables for security
$type = mysqli_real_escape_string($connection, $_GET['type']);
$name = mysqli_real_escape_string($connection, $_GET['name']);
$id = mysqli_real_escape_string($connection, $_GET['id']);
$birth = mysqli_real_escape_string($connection, $_GET['birth']);
$gender = mysqli_real_escape_string($connection, $_GET['gender']);
$email = mysqli_real_escape_string($connection, $_GET['email']);
$phone = mysqli_real_escape_string($connection, $_GET['phone']);
$address = mysqli_real_escape_string($connection, $_GET['address']);
$city = mysqli_real_escape_string($connection, $_GET['city']);
$user = mysqli_real_escape_string($connection, $_GET['user']);
$password = mysqli_real_escape_string($connection, $_GET['password']);
$photo = mysqli_real_escape_string($connection, $_GET['photo']);
$state = $_GET["state"];

echo $state;
if ($state == 'insert') {
 
    $query = "INSERT INTO tbl_users_224(type,name,id,birth,gender,email,phone,address,city,user,password,photo) VALUES ('$type','$name','$id','$birth','$gender','$email','$phone','$address','$city','$user','$password','$photo')";
    
}


if ($state == 'edit'){
 
    $query = "UPDATE tbl_users_224 SET type='$type', name='$name',id='$id',birth='$birth',gender='$gender',email='$email',phone='$phone',address='$address',city='$city',user='$user',password='$password',photo='$photo' where id='$id'";
}

$result = mysqli_query($connection,$query);
  $newId=mysqli_insert_id($connection);
    


if (!$result) {
    die("DB query failed.");
}
 header('Location:profile'.$type.'.php?id='.$id );

//close DB connection
mysqli_close($connection);
?>
