<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="serch.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search Data</title>
</head>
<body>

<div class="row">
        <div class="col-sm-12 p-3 bg-danger text-white">
        <span class="logotext"><img src="./img/web1.png" alt="" style="width: 180px; height: 120px;"></span>
        <a href="./logout.php"><input type="submit" name="submit" value="logout" style=" float: right; margin-top:45px; margin-right: 20px; "></a>
        </div>
    </div>

    <div class="row">
<div  class="col-sm-3 p-5 bg-info text-white" >
<img src="./img/disp.png" alt="" style="width: 30px; height: 30px;">      <a href="./display.php" style="color: white; text-decoration: none;">Display Data</a> <hr>
<img src="./img/del.png" alt="" style="width: 30px; height: 30px;">       <a href="./deletedata.php" style="color: white; text-decoration: none;">Delete Data</a> <hr>
<img src="./img/edit.png" alt="" style="width: 30px; height: 30px;">      <a href="./updatedata.php" style="color: white; text-decoration: none;">Update Data</a> <hr>
<img src="./img/mag.png" alt="" style="width: 30px; height: 30px;">       <a href="./search.php" style="color: white; text-decoration: none;">Search Data</a> <hr>
<img src="./img/user.png" alt="" style="width: 30px; height: 30px;">      <a href="./user.php" style="color: white; text-decoration: none;">User Profile</a> <hr>
</div>

<div class="col-sm-9 p-3 bg-light text-muted" align="center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search Your Data Here</h4> 
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                            </div>
</div>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","final");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM project WHERE CONCAT(firstname,lastname,email) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['firstname']; ?></td>
                                                    <td><?= $items['lastname']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>