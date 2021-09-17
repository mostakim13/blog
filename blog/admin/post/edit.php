

<?php
include ("../include/connect.php");
$con = connectDB();

$id = $_GET['id'];
$sql = "SELECT posts.*, categories.title as categoryTitle
FROM posts JOIN categories ON posts.category_id = categories.id 
WHERE posts.id = '$id'";



$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM categories";
$result = mysqli_query($con, $sql);

include ("../include/header.php") 
?>

<a href="index.php" class="btn btn-success">Back</a>
<div class="content">

<h1>Update Post</h1>


<form action="update.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="Title" class="form-label">Title</label>
    <input type="text" class="form-control"  name="title" value="<?php echo $data['title'] ?>">
  </div>

  <div class="form-group">
    <label for="Image" class="form-label">Image</label>
    <input type="file" class="form-control"  name="image">
    <img src="../<?php echo $data['image'] ?>" alt="" width="100px">
  </div>

  <div class="form-group">
    <label for="Description" class="form-label">Description</label>
    <textarea type="text" class="form-control" rows="10" name="description" ><?php echo $data['description'] ?></textarea>
  </div>

  <div class="form-group">
    <label for="Date" class="form-label">Date</label>
    <input type="date" class="form-control"  name="date" value="<?php echo $data['date'] ?>">
  </div>
  
  <div class="form-group">
    <label for="Category">Category</label>
    <select name="category_id" class="form-control">
    <option>Select Category</option>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <?php if($data['category_id'] == $row['id'] ){ ?>
          <option value="<?= $row['id'] ?>" selected><?= $row['title'] ?></option>
          <?php }
          else{ ?>
            <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
          <?php } ?>




    <?php } ?>
    </select>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

       
</div>          
            
<?php include ("../include/footer.php") ?>