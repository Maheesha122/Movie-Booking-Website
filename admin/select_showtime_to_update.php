<?php
include 'admin.php';//database connection and navigation bar

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="description_style.css">

</head>
<body>

<div class="movie_details">
        <h2> Select Show Time ID to Update <h2>
            <div class="show_time_links">
            <br><br>
        <table>
        <tr>
        <?php
        $showtimes=mysqli_query($conn,"SELECT show_time_id FROM showtimes ");
       
        while($showtime=mysqli_fetch_array($showtimes)){
            ?>
           
                <td><a href="update_showtimes.php?id=<?php echo $showtime['show_time_id'];?>"><?php echo $showtime['show_time_id'];?></td>
         
                <?php
               
            }
        
        ?> 
           
          
           </tr>
            </table>
    </div>
        </div>


    
</body>
</html>