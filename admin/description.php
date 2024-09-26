<?php
include 'admin.php';//database connection and navigation bar
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="description_style.css">
</head>
<body>
    <div class="movie_details">
<table>

<?php
$qry1=mysqli_query($conn,"SELECT * FROM movies WHERE movie_id='".$_GET['id']."'");
        while($movie=mysqli_fetch_array($qry1)){
        ?>
        <tr><th>Movie Name</th><td><?php echo $movie['title'];?></td></tr>
        <tr><th>Description</th><td><?php echo $movie['description'];?></td>
        <tr><th>Release_date</th><td><?php echo $movie['release_date'];?></td>
        <tr><th>Genre</th><td><?php echo $movie['genre'];?></td>
        <tr><th>Runtime</th><td><?php echo $movie['runtime'];?></td>
        <tr><th>Image</th><td><?php echo $movie['image_path'];?></td>
        <tr><th>Trailer</th><td><?php echo $movie['trailer'];?></td>
        </tr>
        <?php
        }
        ?>
    </div>
    </table>
    </body>
    </html>