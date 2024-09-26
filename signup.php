<?php
include 'nav_bar.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    
    $userName = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $insertSignUpQuery = "INSERT INTO users (name, email, password) VALUES 
    ('$userName', '$email', '$hashedPassword')";
    

if (mysqli_query($conn, $insertSignUpQuery)) {
    // Query executed successfully
    echo '<script>alert("Sign Up Successful!");</script>';
    header("Location: login.php");
} else {
    // Query execution failed
    echo '<script>alert("Sign up failed! Please try again.");</script>';
    echo "Error: " . mysqli_error($conn);
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - CinemaPlex Booking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">

</head>

<body>
 

<div class="login-container">
        <h2 class="text-center">User Signup</h2>
        <hr style="border-color: #555;">
        <form action="signup.php" method="post">
        <div class="form-group">
                <label for="username">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>

            <div class="form-group">
                <label for="username">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
           
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Signup</button>
            </div>
        </form>
        <div class="text-center mt-2">
            <p>Already have an account? <a href="admin_login.php">Login here</a></p>
        </div>
    </div>

 
</body>

</html>

