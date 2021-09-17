<?php include ("../include/connect.php") ?>


<?php

if($_POST){
 $title = $_POST['title'];
$conn = connectDB();
$sql = "INSERT INTO categories VALUES(NULL, '$title')";
$result = mysqli_query($conn, $sql);
header("location: index.php");
}
?>
