<?php
include 'database_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    
    <div class="headings">
        <div class="wrapper">
        <h1>Admin Panel</h1> 
        <a href="logout.php"> Log Out</a>
        </div>
        <div class="links">
       
        <a class="btn btn-primary" href="bookings.php" target="user">Bookings</a>
        <a class="btn btn-primary" href="movie_managment.php" target="user">Movie Management</a>
        <a class="btn btn-primary" href="showtime_managment.php" target="user">ShowTime Management</a>
        <a class="btn btn-primary" href="users.php" target="user">Registered Users</a>
       
    </div>
    </div>
</body>
</html>