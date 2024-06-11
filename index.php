
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Temp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./index.css">
</head>
<body>

    <div class="row">
        <div class="col-sm-12 p-3 bg-danger text-white">
        <span class="logotext"><img src="./img/web1.png" alt="" style="width: 180px; height: 120px;"></span>
        <?php
        require'config.php';
                $sel = "SELECT * FROM project";
                $query = mysqli_query($conn,$sel);
                $result = mysqli_fetch_assoc($query);
        ?>
        <h6>Welcome <?php echo $result['firstname']; ?></h6>
        <a href="./logout.php"><input type="submit" name="submit" value="logout" style=" float: right; margin-top:-28px;"></a>
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
    <h2>Final Project</h2> <br>
<p>Display Data from Database.</p> <br>

<p>Delete Data From Home Page.</p> <br>

<p>Update Data From Table.</p> <br>

<p>Search Data From Home Page Table.</p> <br>

<p>User Data In Card Form.</p> <br>
</div>
</div>
<div class="row">
<div class="col-sm-12 p-5 bg-dark text-white">
    <p>Thanks For Visiting...</p>
</div></div>
</div>
</body>
</html>