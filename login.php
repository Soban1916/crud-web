
<?php
require 'config.php';
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM project WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        else{
            echo
        "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User Not Registered'); </script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    
        <div id="site">
        <div id="login">
            <form action=" " method="post">
        <h2>Login</h2>
        </div>
        <div id="ep">
            <input type="email" name="email" placeholder="Email" style="padding: 10px; width: 300px; border-radius: 3px; border: 1px solid;" > <br>
            <input type="password" name="password" placeholder="Password" style="padding: 10px; width: 300px; margin-top: 8px; border-radius: 3px; border: 1px solid;">
        </div>
        <div id="forgot">
        <a href="#" class="forget">Forgot password?</a>
        </div>
        <div id="log">
        <button type="submit" name="submit" class="lo">Login</button>
        </div>
        <div id="dont-acc">
        <p>Don't have an account? <a href="./signup.php" class="si">Sign up</a></p>
        </form>
        </div>
        </div>
</body>
</html>