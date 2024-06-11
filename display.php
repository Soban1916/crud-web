<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./index.css">
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



<div class="col-sm-9 p-5 bg-light" align="center">
<table class="table">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Image</th>
    </tr>
  </thead>

</div>
</div>


<?php
include("config.php");

$query = "SELECT * FROM project";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
    while($result = mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['firstname']."</td>
        <td>".$result['lastname']."</td>
        <td>".$result['email']."</td>
        <td>".$result['password']."</td>
        <td><img src='$result[Image]' height='50px' width='50px'></td>
        </tr>";
    }
}
else{
    echo "No Records Found";
}

?>
</table>
</body>
</html>