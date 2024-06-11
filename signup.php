  <?php
require 'config.php';

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $createpassword = $_POST["createpassword"];
    $IMAGE = $_FILES['image'];

    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "img/".$img_name;
    move_uploaded_file($img_loc,'img/'.$img_name);

    //insert data

    $duplicate = mysqli_query($conn, "SELECT * FROM project WHERE firstname = '$firstname' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username Or Email Already Taken'); </script>";
    }
    else{
        if($password == $createpassword){
            $query = "INSERT INTO project VALUES('','$firstname','$lastname','$email','$password','$img_des')";
            mysqli_query($conn,$query);
            echo
        "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo
        "<script> alert('Password Does Not Match') </script>";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div id="sitee">
<div id="signup">
    <form action=" " method="post" enctype="multipart/form-data">
    <h2 class="designsign">Sign Up</h2>
</div>
<div id="epc">
    <input type="text" name="firstname" placeholder="First Name" class="em">
    <input type="text" name="lastname" placeholder="Last Name" class="em">
    <input type="email" name="email" placeholder="Email" class="em"> <br>
    <input type="password" name="password" placeholder="Create password" class="em"> <br>
    <input type="password" name="createpassword" placeholder="Confirm password" class="em">
    <input type="file" name="image" class="em">
</div>
<div id="signbutton">
<button type="submit" name="submit" class="signb">Sign Up</button>
</div>
<div id="all-acc">
<p>Already have an account? <a href="./login.php" class="log">Login</a></p>
</form>
</div>

    </div>
</body>
</html>