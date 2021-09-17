<?php include ("../include/connect.php") ?>

<?php include ("../include/header.php") ?>

<?php

$conn = connectDB();
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
?>


<a href="index.php" class="btn btn-success"> Back </a>
<div class="content">
    <h2>Add new category list</h2>
    <form method="POST" action="store.php">
        <div class="form-group">
          <label for="Title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>

            
            
                    
            
            
            
            
            
            
<?php include ("../include/footer.php") ?>