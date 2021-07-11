<?php include 'conction.php';
$Id = mysqli_real_escape_string($connection, $_GET['id']);
$query = "DELETE FROM tbl_users_224 where id=$Id";
$result = mysqli_query($connection, $query);

if (!$result) {
    echo "failed";
    die("DB query failed.");
}
?>
<script>
alert("this profile is remove");
</script>
<?php
header('Location:homepage.html' );

//close DB connection
mysqli_close($connection);
?>