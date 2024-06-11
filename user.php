<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Card</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .profile-card {
      margin-bottom: 20px;
    }
    .profile-pic {
      width: 100%;
      height: auto;
    }
  </style>
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
<img src="./img/disp.png" alt="" style="width: 30px; height: 30px;">    <a href="./display.php" style="color: white; text-decoration: none;">Display Data</a> <hr>
<img src="./img/del.png" alt="" style="width: 30px; height: 30px;">    <a href="./deletedata.php" style="color: white; text-decoration: none;">Delete Data</a> <hr>
<img src="./img/edit.png" alt="" style="width: 30px; height: 30px;">    <a href="./updatedata.php" style="color: white; text-decoration: none;">Update Data</a> <hr>
<img src="./img/mag.png" alt="" style="width: 30px; height: 30px;">    <a href="./search.php" style="color: white; text-decoration: none;">Search Data</a> <hr>
<img src="./img/user.png" alt="" style="width: 30px; height: 30px;">    <a href="./user.php" style="color: white; text-decoration: none;">User Profile</a> <hr>
</div>
<div class="col-sm-9 p-3 bg-light text-muted" align="center">
  <div class="container mt-5">
    <div class="row">

    <?php
    require 'config.php';
    
        $query = "SELECT * FROM project";
        $query_run = mysqli_query($conn,$query);
        $check_faculty = mysqli_num_rows($query_run) >0;

        if($check_faculty)
            {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>





      <div class="col-md-3">
        <div class="card profile-card">
          <img src=" <?php echo $row['Image']; ?>" width="100px" height="100px" class="card-img-top profile-pic" alt="Profile Picture">
          <div class="card-body">
          <p class="card-text">First Name:<h5 class="card-title"> <?php echo $row['firstname']; ?></h5></p>
          <p class="card-text">Email:<h5 class="card-title"><?php echo $row['email']; ?></h5></p>
          </div>
        </div>
      </div>
      <?php

                    
}
}
else
{
echo "No User Found";
}

?>
 

    </div>
  </div>
  </div>
</div>
</body>
</html>
