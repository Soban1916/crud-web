<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Data</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./img/web1.png" alt="" style="width: 180px; height: 120px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
<div  class="col-sm-3 p-5 bg-info text-white" >
<img src="./img/disp.png" alt="" style="width: 30px; height: 30px;">      <a href="./display.php" style="color: white; text-decoration: none;">Display Data</a> <hr>
<img src="./img/del.png" alt="" style="width: 30px; height: 30px;">       <a href="./deletedata.php" style="color: white; text-decoration: none;">Delete Data</a> <hr>
<img src="./img/edit.png" alt="" style="width: 30px; height: 30px;">      <a href="./updatedata.php" style="color: white; text-decoration: none;">Update Data</a> <hr>
<img src="./img/mag.png" alt="" style="width: 30px; height: 30px;">       <a href="./search.php" style="color: white; text-decoration: none;">Search Data</a> <hr>
<img src="./img/user.png" alt="" style="width: 30px; height: 30px;">      <a href="./user.php" style="color: white; text-decoration: none;">User Profile</a> <hr>
</div>

<div class="col-sm-9 p-3 bg-light text-muted" align="center">
<div class="container my-4">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>  
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Operation</th>
    </tr>
  </thead>
  <tbody>
  </div>
</div>
    <?php
            include"config.php";
            $sql = "SELECT * FROM project";
            $result = $conn->query($sql);
            if(!$result){
                die("Invalid Query");
            }
            while($row=$result->fetch_assoc()){
                echo"
    <tr>
      <th>$row[id]</th>
      <td>$row[firstname]</td>
      <td>$row[lastname]</td>
      <td>$row[email]</td>
      <td> 
                    <a class='btn btn-success' href='update.php?id=$row[id]'>Edit</a>
      </td>
    </tr>
    ";
}
    ?>
  </tbody>
</table>
</div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

  </body>
</html>