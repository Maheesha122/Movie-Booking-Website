<?php
include 'admin.php';//database connection and navigation bar
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view_movies_styles.css">
</head>
<body>
    

<div class="wrapper">
        <table>
        <?php
        $qry1=mysqli_query($conn,"SELECT * FROM movies ");
        while($movie=mysqli_fetch_array($qry1)){
            ?>
            <tr>
                <td><h3><?php echo $movie['movie_id'];?></h3></td>
                <td><h4><a href="description.php?id=<?php echo $movie['movie_id'];?>"><?php echo $movie['title'];?></h4></a></td> 
 
            </tr>
            <?php
        }
        ?> 

            </table>

    </div>
  
  <body>
  </html>