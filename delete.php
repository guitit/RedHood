<?php include 'conction.php'; 
$Id =mysqli_real_escape_string($connection, $_GET['idres']);
$query = "DELETE FROM users_224 where idres=".$Id; 
$result = mysqli_query($connection,$query);
  if (!$result) { 
      die("DB query failed.");  }
    ?>
<script>
alert("this profile is remove");
</script>
<?php
header('Location:homepage.html' );

//close DB connection
mysqli_close($connection);
?>