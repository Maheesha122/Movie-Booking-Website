<?php
    session_start();
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "cinemaplex"; 

    $conn = new mysqli($servername, $username, $password, $database);

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinemaPlex Administrator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

</head>
<style>
    .login-container {
        text-align: center;
        margin-top:50px;
    }

    .form-group {
        margin: 0 auto;
        max-width: 300px; 
    }

    .form-control {
        width: 100%; /
    }

    .btn {
        margin-top: 10px; 
    }
</style>


<body>

    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <hr>
        <br>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" name="index">Login</button>
            </div>
        </form>
    </div>

<?php
    
if(isset($_POST['index'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");
    $row=mysqli_fetch_array($select);

    if ($row && password_verify($password, $row['password'])) {
        // Password is correct
        $_SESSION["username"] = $row['username'];
    }
    else{
        echo '<script>';
        echo 'alert("Invalid Username or Password!");';
        echo '</script>';
    }

    if (isset($_SESSION["username"])){
        header("Location:admin.php");
    }
}

?>

</body>

</html>
