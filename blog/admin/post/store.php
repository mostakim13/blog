<?php
$rand = rand(1111, 999999);

$image = 'uploads/' . $rand . $_FILES['image']['name'];
$upload = '../uploads/' . $rand . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $upload);

$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$category_id = $_POST['category_id'];

include ("../include/connect.php");
$con = connectDB();
$sql = "INSERT INTO posts VALUES (NULL, '$category_id', '$title', '$image', '$description',  '$date')";
mysqli_query($con, $sql);
header("location: index.php");