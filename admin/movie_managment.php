<?php
include 'admin.php';//database connection and navigation bar
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="managment.css">
</head>
<body>
    
     <center>
    <h2 id="heading"> Now Showing Movies </h2>
    </center>
    <div class="buttons">
        <button><a href="view_movies.php">View</a></button>
        <button><a href="add_movies.php">Add New</a></button>
        <button><a href="select_movie_to_update.php">Update</a></button>
        <button><a href="delete_movies.php">Delete</button>
</div>

</body>
</html>