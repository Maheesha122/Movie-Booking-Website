<?php
include 'nav_bar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="date_and_time_style.css">

    

<div class="container"> 
   <center> <h1>Select Time</h1>

   <form id="timeForm" action="seats.php" method="get">

             <?php
    $qry5 = mysqli_query($conn, "SELECT DISTINCT start_time FROM showtimes WHERE ( movie_date='".$_GET['selectedDate']."') ");
    while ($moviedate = mysqli_fetch_array($qry5)){
        ?>
         <input type="radio" name="selectedTime" value="<?php echo $moviedate['start_time'];?>" id="<?php echo $moviedate['start_time'];?>" required><label for="<?php echo $moviedate['start_time'];?>"><?php echo $moviedate['start_time'];?></label>
        <br>
        <?php
        }

        
        ?>
        <input type="hidden" name="movie_name" value="<?php echo $_GET['movie_name'];?>" required>
        <input type="hidden" name="selectedDate" value="<?php echo $_GET['selectedDate'];?>" required><br><br>


        <button type="submit" class="submit-button">Next </button>
    </form>
    </center>
</div>
</head>
<body>