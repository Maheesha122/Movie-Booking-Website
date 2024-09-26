<?php
include 'nav_bar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="description_style.css">
</head>
<body>
<center>
<div class="wrapper">
    <div class="description">
        <br>
        <?php
        
     $movie=mysqli_query($conn,"SELECT * FROM movies WHERE movie_id='".$_GET['id']."'");
     while ($moviedetails = mysqli_fetch_array($movie)) {
    ?>
        <h1> <?php echo $moviedetails['title'];?></h1><br>
        <p> <?php echo $moviedetails['description'];?></p>
	<hr><br> <br>
	<h3> Genre</h3>
	<h5><?php echo $moviedetails['genre'];?></h5> <br><br>
	<h3> Run Time </h3>
    <h5><?php echo $moviedetails['runtime'];?></h5>

	</div>
	<div class="video">
	<h3> TRAILER</h3> 
	 <iframe width="810" height="412"src="<?php echo $moviedetails['trailer'];?>"frameborder="0" allowfullscreen></iframe>
        </div>
    <?php
     }
   
     ?>
    </div>
 

 </div>
</body>
</html>