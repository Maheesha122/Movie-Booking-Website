<?php
include 'nav_bar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="date_and_time_style.css">
</head>

<body>
    <div class="container">
        <center>
        <form id="dateForm" action="time.php" method="get">

        <?php
     $qry4=mysqli_query($conn,"SELECT * FROM movies WHERE movie_id='".$_GET['id']."'");
     if ($moviename = mysqli_fetch_array($qry4)) {
    ?>
    <h2><?php echo $moviename['title'];?></h2>
    <input type="hidden" name="movie_name" value="<?php echo $moviename['title'];?>">
    <?php
     }
     ?><br>

    <h3>Select Date:</h3><br>
     <?php
     $qry3=mysqli_query($conn,"SELECT DISTINCT movie_date,movie_id FROM showtimes WHERE movie_id='".$_GET['id']."'");
     while ($moviedate = mysqli_fetch_array($qry3)){
        ?>
         <input type="radio" name="selectedDate" value="<?php echo $moviedate['movie_date'];?>" id="<?php echo $moviedate['movie_date'];?>" required><label for="<?php echo $moviedate['movie_date'];?>"><?php echo $moviedate['movie_date'];?></label>
        
        <?php
        }
        ?><br><br><br>

        <button type="submit" class="submit-button">Next </button>
    </form>
</div>    

        <center>
    </div>
</body>

</html>
