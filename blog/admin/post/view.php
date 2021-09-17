

<?php
$id = $_GET['id'];
include ("../include/connect.php");
$con = connectDB();
$sql = "SELECT posts.*, categories.title as categoryTitle
FROM posts JOIN categories ON posts.category_id = categories.id 
WHERE posts.id = '$id'";



$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

include ("../include/header.php") 
?>

<a href="index.php" class="btn btn-success">Back</a>
<div class="content">

<h1>Add New List</h1>

<table class="table">
    <tr>
        <th>Title</th>
        <td><?= $data['title']?></td>
</tr>
        <tr>
        <th>Category</th>
        <td><?= $data['categoryTitle']?></td>
</tr>
        <tr>
        <th>Description</th>
        <td><?= $data['description']?></td>
</tr>
        <tr>
        <th>Image</th>
        <td><img src="../<?= $data['image']?>" alt="" width="100"></td>
</tr>
        <tr>
        <th>Date</th>
        <td><?= $data['date']?></td>
    </tr>
</table>


       
</div>          
            
<?php include ("../include/footer.php") ?>