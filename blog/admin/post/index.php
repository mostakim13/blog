<?php include ("../include/header.php") ?>
<?php include ("../include/connect.php") ?>

<?php

$conn = connectDB();
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
?>


<a href="create.php" class="btn btn-success"> + Add Post</a>
<div class="content">

<h1> Post List</h1>

<table class="table table-bordered">
    <thead>
        <th>#</th>
        <th>Title</th>
        <th>Image</th>
        <th>Date</th>
        <th>Action</th>
    </thead>

    <?php while($row = mysqli_fetch_assoc($result)){ ?>

    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['title']?></td>
        <td> <img src="../<?= $row['image'];?>" width="100" alt=""></td>
        <td><?php echo $row['date']?></td>
        <td>

            <a href="view.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-success">View</a>
            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>

        </td>
    </tr>

    <?php } ?>

</table>

</div>            
                    
            
                    
            
            
<?php include ("../include/footer.php") ?>