<?php
     include "config.php";
     $id="";
     $firstname="";
     $lastname="";
     $email="";
   
     $error="";
     $success="";
   
     if($_SERVER["REQUEST_METHOD"]=='GET'){
       if(!isset($_GET['id'])){
         header("location:updatedata.php");
         exit;
       }
       $id = $_GET['id'];
       $sql = "SELECT * FROM project WHERE id=$id";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();
       while(!$row){
         header("location:update.php");
         exit;
       }
       $firstname=$row["firstname"];
       $lastname=$row["lastname"];
       $email=$row["email"];
       
   
     }
     else{
       $id = $_POST["id"];
       $firstname=$_POST["firstname"];
       $lastname=$_POST["lastname"];
       $email=$_POST["email"];
   
       $sql = "UPDATE project SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id='$id'";
       $result = $conn->query($sql);
       
     }
?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit Data</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Edit Data</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center"> Edit Your Data</h1>
 </div><br>
    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> First Name: </label>
 <input type="text" name="firstname" value="<?php echo $firstname; ?>" class="form-control"> <br>

 <label> Last Name: </label>
 <input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit">Update</button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="#"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>