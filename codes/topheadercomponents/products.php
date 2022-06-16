<!-- Connect File -->
<?php
SESSION_START();
    include("../connect.php");
    include("../functions.php");

    // $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./style.css">
    <!-- bootstrap css links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div> -->
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </nav>
    <!-- second child -->
    <div class="navbar navbar-expand-lg navbar-light bg-secondary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="#" class="nav-link text-light"> <h3>Welcome <?php echo $user_data['user_name']; ?></h3> </a>
            </li>
        </ul>
    </div>
    <!-- third child -->
    <div class="bg-light">
        <h3 class="text-center">Hidden Store</h3>
        <p class="text-center">Communications is at the heart of e-commerce</p>
    </div>

    <!-- Fourth child -->

    <div class="row">
        <div class="col-md-10">
            <!-- products -->
            <div class="d-flex justify-content-evenly">
                <div class="col-mid-4">
                    <div class="card" style="width:20rem;">
                        <img src="../../resources/4th-plant.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-mid-4">
                <div class="card" style="width: 20rem;" >
                        <img src="../../resources/2nd-plant.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-mid-4">
                <div class="card" style="width:20rem;" >
                        <img src="../../resources/3rd-plant.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>                
            </div>

            <div class="d-flex justify-content-evenly my-3">
                <div class="col-mid-4">
                    <div class="card" style="width:20rem;">
                        <img src="../../resources/4th-plant.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-mid-4">
                <div class="card" style="width: 20rem;" >
                        <img src="../../resources/2nd-plant.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-mid-4">
                <div class="card" style="width:20rem;" >
                        <img src="../../resources/3rd-plant.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>                
            </div>

        </div>
        
        <div class="col-md-2 bg-secondary p-0">
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-tem bg-info">
                    <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                </li>

                <?php

                $select_brands = "Select * from `brands`";
                $result_brands = mysqli_query($con, $select_brands);
                // $row_data = mysqli_fetch_assoc($result_brands);
                // echo $row_data['brand_title']
                while($row_data = mysqli_fetch_assoc($result_brands)){
                    $brand_title = $row_data['brand_title'];
                    $brand_id= $row_data['brand_id']; 
                    echo "<li class='nav-tem'><a href='index.php?brand=$brand_title' class='nav-link text-light'>$brand_title</a>
                </li>";
                }
                

                ?>

                <!-- <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Brand one</a>
                </li>
                <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Brand two</a>
                </li>
                <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Brand three</a>
                </li>
                <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Brand four</a>
                </li>
                <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Brand five</a>
                </li> -->
            </ul>
<!-- CATEGORIES TO BE DISPLAYED -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-tem bg-info">
                    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                </li>
                <?php

                $select_category = "Select * from `categories`";
                $result_category = mysqli_query($con, $select_category);
                // $row_data = mysqli_fetch_assoc($result_brands);
                // echo $row_data['brand_title']
                while($row_data = mysqli_fetch_assoc($result_category)){
                    $category_title = $row_data['category_title'];
                    $category_id= $row_data['category_id']; 
                    echo "<li class='nav-tem'><a href='index.php?category=$category_title' class='nav-link text-light'>$category_title</a>
                </li>";
                }
                

                ?>


                <!-- <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Category1</a>
                </li>
                <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Category2</a>
                </li>
                <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Category3</a>
                </li>
                <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Category4</a>
                </li>
                <li class="nav-tem">
                    <a href="#" class="nav-link text-light">Category5</a>
                </li> -->
            </ul>

        </div>
    </div>

    <!-- Last child -->

    <div class="bg-info p-3 text-center">
        <p>All rights reserved @- Designed by Hassan-2022</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>