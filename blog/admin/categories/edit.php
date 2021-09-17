

<?php
if(isset($_GET['id'])){
include ("../include/connect.php");
$id = $_GET['id'];
$conn = connectDB();
$sql = "SELECT * FROM categories WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
}
?>
<?php include ("../include/header.php") ?>

<a href="index.php" class="btn btn-success"> Back </a>
<div class="content">
    <h2>Edit category</h2>
    <form method="POST" action="update.php?id=<?php echo $row['id']?>">
        <div class="form-group">
          <label for="Title" class="form-label" >Title</label>
          <input type="text" class="form-control" value="<?php echo $row['title'] ?>" name="title" placeholder="Title">
        </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>
