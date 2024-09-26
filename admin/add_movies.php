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

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission

    // Retrieve form data
    $movieID = $_POST['movie_id'];
    $movieName = mysqli_real_escape_string($conn, $_POST['movie_name']);
    $movieDescription = mysqli_real_escape_string($conn, $_POST['movie_description']);
    $releaseDate = mysqli_real_escape_string($conn, $_POST['release_date']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $runTime = mysqli_real_escape_string($conn, $_POST['runtime']);
    $trailerURL = mysqli_real_escape_string($conn, $_POST['trailer_url']);

   
        
    // Handle image upload
    if (isset($_FILES['movie_image'])) {
        $imageFileName = $_FILES['movie_image']['name'];
        $imageTempName = $_FILES['movie_image']['tmp_name'];
        $imageDestination = "uploads/" . $imageFileName;

        if (move_uploaded_file($imageTempName, $imageDestination)) {
            // Image uploaded successfully, proceed with the query
            $movieImage = mysqli_real_escape_string($conn, $imageDestination);

       

            $insertMovieQuery = "INSERT INTO movies (movie_id, title, description, release_date, genre, runtime, image_path, trailer )
             VALUES ('$movieID', '$movieName', '$movieDescription', '$releaseDate', '$genre', '$runTime','$movieImage', '$trailerURL')";}

            // Execute the query
            if (mysqli_query($conn, $insertMovieQuery)) {
                echo "<script>alert('Movie record inserted successfully.');</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";

            }
        } else {
            echo "<script>alert('Error uploading the image.');</script>";
        }
    }
   


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="description_style.css">
</head>
<body>
<div class="wrapper">
    <form method="post" id="add_movie" enctype="multipart/form-data">
        <div class="add_movie_details">
        
            <table>
                <tr>
                    <td><label for="movie_id">Movie ID</label></td>
                    <td><input type="text" name="movie_id" size="50" required></td>
                </tr>
                <tr>
                    <td><label for="movie_name">Movie Name</label></td>
                    <td><input type="text" name="movie_name" size="50" required></td>
                </tr>
                <tr>
                    <td><label for="movie_image">Movie Image</label></td>
                    <td>
                <input type="file" name="movie_image">   </td>
                </tr>
                <tr>
                    <td><label for="movie_description">Movie Description</label></td>
                    <td><textarea name="movie_description" rows="3" cols="47" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="release_date">Release Date</label></td>
                    <td><input type="text" name="release_date" size="50" required></td>
                </tr>
                <tr>
                    <td><label for="genre">Genre</label></td>
                    <td><input type="text" name="genre" size="50" required></td>
                </tr>
                <tr>
                    <td><label for="runtime">Run time</label></td>
                    <td><input type="text" name="runtime" size="50" required></td>
                </tr>
                <tr >
                    <td><label for="trailer_url">Trailer URL</label></td>
                    <td>
                        <input type="text" name="trailer_url" size="50">
                    </td>
                </tr>
               

            </table>
            <br>
       
        <input type="submit" class="add_movies" value="Submit">
        
    </form>
</div>
</div>

</body>
</html>















