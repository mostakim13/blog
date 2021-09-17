<?php
if(isset($_GET['id'])){
   include ("../include/connect.php");


$id = $_GET['id'];
$conn = connectDB();
$sql = "DELETE FROM categories WHERE id = $id";
$result = mysqli_query($conn, $sql);
header("location: index.php");
}

?>