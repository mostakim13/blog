<?php include ("../include/header.php") ?>
<?php include ("../include/connect.php") ?>

<?php

$conn = connectDB();
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
?>


<a href="create.php" class="btn btn-success"> + Add Category</a>
<div class="content">

<h1> Category List</h1>
<table class="table table-bordered">
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
    </thead>

<?php
while($row = mysqli_fetch_assoc($result)){
      $row['id'];
?>
   <tr>
       <td><?php echo $row['id'] ?></td>
       <td><?php echo $row['title'] ?></td>
       <td>
            <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm">Edit</a>
            <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
    
       </td>
   </tr>
<?php }
?>
     
   </table>
   </div>

            
            
                    
            
            
            
            
            
            
<?php include ("../include/footer.php") ?>