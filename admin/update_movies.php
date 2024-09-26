<?php
include 'admin.php'; // database connection and navigation bar

$movieID = $_GET['id'];

$selectQuery1 = "SELECT * FROM movies WHERE movie_id = '$movieID'";
$result1 = mysqli_query($conn, $selectQuery1);
if ($result1 && $row = mysqli_fetch_assoc($result1)) {
    $movieName = $row['title'];
    $movieDescription = $row['description'];
    $releaseDate = $row['release_date'];
    $genre = $row['genre'];
    $runTime = $row['runtime'];
    $trailerURL = $row['trailer'];
    $imagePath = $row['image_path'];
}

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

    $updateMovieQuery = "UPDATE movies 
    SET title = '$movieName', 
        description = '$movieDescription', 
        release_date = '$releaseDate', 
        genre = '$genre', 
        runtime = '$runTime', 
        trailer = '$trailerURL'
    WHERE movie_id = '$movieID'";
    mysqli_query($conn, $updateMovieQuery);

    if (isset($_FILES['movie_image'])) {
        $imageFileName = $_FILES['movie_image']['name'];
        $imageTempName = $_FILES['movie_image']['tmp_name'];
        $imageDestination = "uploads/" . $imageFileName;


        if (move_uploaded_file($imageTempName, $imageDestination)) {
            $movieImage = mysqli_real_escape_string($conn, $imageDestination);

            $updateImageQuery = "UPDATE movies
            SET image_path='$movieImage'
            WHERE movie_id='$movieID'";
            mysqli_query($conn, $updateImageQuery);
        }
    }

    echo "<script>alert('Movie Updated Successfully!');</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="description_style.css">
</head>
<body>
<div class="wrapper">
    <form method="post" id="update_movie" enctype="multipart/form-data">
        <div class="movie_details">
            <table>
                <tr>
                    <td><label for="movie_id">Movie ID</label></td>
                    <td><input type="text" name="movie_id" size="50" value="<?php echo $movieID; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="movie_name">Movie Name</label></td>
                    <td><input type="text" name="movie_name" size="50" value="<?php echo $movieName; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="movie_image">Movie Image</label></td>
                    <td>
                        <input type="file" name="movie_image">
                    </td>
                </tr>
                <tr>
                    <td><label for="movie_description">Movie Description</label></td>
                    <td><textarea name="movie_description" rows="3" cols="47" required><?php echo $movieDescription; ?></textarea></td>
                </tr>
                <tr>
                    <td><label for="release_date">Release Date</label></td>
                    <td><input type="text" name="release_date" size="50" value="<?php echo $releaseDate; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="genre">Genre</label></td>
                    <td><input type="text" name="genre" size="50" value="<?php echo $genre; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="runtime">Run time</label></td>
                    <td><input type="text" name="runtime" size="50" value="<?php echo $runTime; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="trailer_url">Trailer URL</label></td>
                    <td>
                        <input type="text" name="trailer_url" size="50" value="<?php echo $trailerURL; ?>" required>
                    </td>
                </tr>
            </table>
        <input type="submit" class="update_movies" value="Submit">
        </div>
    </form>
</div>
</body>
</html>
