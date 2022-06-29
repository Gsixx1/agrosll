<?php
include '../connect.php';
$select = "SELECT * FROM customers";
$select_q = mysqli_query($con, $select);
$data = mysqli_num_rows($select_q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Customers</title>
</head>

<body>
    <div class="container mt-3 text-center">
        <div class="my-2">
            <h1 class="text-secondary py-2">Customers</h1>
        </div>
        <table class="table table-striped table-hover">
            <tr class="text-center h5" >
                <th>Customer Name</th>
                <th>Business Title</th>
                <!-- <th>Customer Photo</th> -->
                <!-- <th>Operation</th> -->
                <th>Delete pad</th>
            </tr>
            <?php
            if ($data) {
                while ($row = mysqli_fetch_array($select_q)) {
            ?>
            
                    <tr>
                        <td><?php echo $row['customer_name'] ?></td>
                        <td><?php echo $row['business_name'] ?></td>
                        <!-- <td class="text-center" ><img src="images/<?php echo $row['customer_image'] ?>" alt="" width="120px"></td> -->
                        <!-- <td class="text-center" ><button type="button" class="btn btn-secondary"><a class="text-light text-decoration-none" href="edit.php? id= <?php echo $row['id'] ?>--><!--">Edit</a></button></td> -->
                        <td class="text-center" ><button type="button" class="btn btn-danger"><a class="text-light text-decoration-none" onclick="return confirm('Are you sure you want to delete?')" href="delete.php? id=<?php echo $row['id'] ?>">Delete</a></button></td>
                    </tr>
            <?php
                }
            } else {
                echo "Nothing is in the database";
            };
            ?>
        </table>
        <div class="my-2 text-center">
        <button type="button" class="btn btn-success"><a class="text-decoration-none text-light" href="indexcrud.php">Index Crud page</a></button>        
        </div>
    </div>
</body>

</html>