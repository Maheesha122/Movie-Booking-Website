<?php
$connection = mysqli_connect('localhost', 'root', '', 'cinemaplex');

include 'nav_bar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">

</head>

<body>
     <div class="login-container">
        <h2 class="text-center">Login</h2>
        <hr>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    
</body>
<?php 
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $select = mysqli_query($conn, "SELECT * FROM users WHERE name='$username'");
    $row = mysqli_fetch_array($select);

    if ($row && password_verify($password, $row['password'])) {
        // Password is correct
        $_SESSION["username"] = $row['name'];
        header("Location: index.php");
    } else {
        echo '<script>';
        echo 'alert("Invalid Username or Password!");';
        echo '</script>';
    }
}

?>
</html>
