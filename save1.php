<?php include 'conction.php' ;

//get data from query string and escape variables for security
$Id =mysqli_real_escape_string($connection, $_GET['id']);
$response = mysqli_real_escape_string($connection, $_GET['response']);

$query = "UPDATE users_224  SET response='$response'  where idres=$Id";


$result = mysqli_query($connection,$query);
  $newId=mysqli_insert_id($connection);

  

if (!$result) {
    echo "failed";
    die("DB query failed.");
}
header('Location:objectM.php?id='.$Id );


    //close DB connection
    mysqli_close($connection);
    ?>