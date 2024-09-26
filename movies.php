<?php
include 'nav_bar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="movies_style.css">
</head>
<body>
   
<br><br><br><br>
<center><h1> Now Showing</h1></center>
<div class="flex_container">
    <?php
    
  $qry1=mysqli_query($conn,"SELECT * FROM movies ");
  while($nm=mysqli_fetch_array($qry1)){
?>
   <div class="movieitemdata">
    <a href="description.php?id=<?php echo $nm['movie_id'];?>"><img width="250" heigth="auto" class="movieimage1" src="<?php echo $nm['image_path'];?>"></a>
    <div class="details">
    <?php echo $nm['title'];?><br>
    <button class="buy">  <a href="<?php echo isset($_SESSION['username']) ? 'date.php?id=' . $nm['movie_id'] : 'login.php'; ?>">Book Tickets</a></button><br>
<br>
<div class="trailer">
<a class="moreinfo" href="description.php?id=<?php echo $nm['movie_id'];?>"> TRAILER & INFO </a>
</div>
      </div>
  </div>
 
      <?php
    }
  ?> 
  </div> 


</body>
</html>