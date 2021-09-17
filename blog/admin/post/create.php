

<?php
include ("../include/connect.php");
$con = connectDB();
$sql = "SELECT * FROM categories";
$result = mysqli_query($con, $sql);

include ("../include/header.php") 
?>

<a href="index.php" class="btn btn-success">Back</a>
<div class="content">

<h1>Add New List</h1>


<form action="store.php" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="Title" class="form-label">Title</label>
    <input type="text" class="form-control"  name="title">
  </div>

  <div class="form-group">
    <label for="Image" class="form-label">Image</label>
    <input type="file" class="form-control"  name="image">
  </div>

  <div class="form-group">
    <label for="Description" class="form-label">Description</label>
    <textarea type="text" class="form-control" rows="10" name="description"></textarea>
  </div>

  <div class="form-group">
    <label for="Date" class="form-label">Date</label>
    <input type="date" class="form-control"  name="date">
  </div>
  
  <div class="form-group">
    <label for="Category">Category</label>
    <select name="category_id" class="form-control">
    <option>Select Category</option>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
          <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
    <?php } ?>
    </select>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

       
</div>          
            
<?php include ("../include/footer.php") ?>