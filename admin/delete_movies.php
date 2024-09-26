<?php
include 'admin.php';//database connection and navigation bar


if (isset($_GET['id'])) {
    $movieID = $_GET['id'];

    // Check if the user has confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] === "yes") {
        // Create a DELETE query
      
        $deleteMovieQuery = "DELETE FROM movies WHERE movie_id = '$movieID'";

        // Execute the query
        if (mysqli_query($conn, $deleteMovieQuery)) {
            echo "<script>alert('Movie record with ID $movieID has been deleted successfully.');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
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
<div class="delete_movies">
    <table>
        <?php

        $qry1 = mysqli_query($conn, "SELECT * FROM movies");
        while ($movie = mysqli_fetch_array($qry1)) {
            ?>
            <tr>
                <td><?php echo $movie['movie_id']; ?></td>
                <td><?php echo $movie['title']; ?></td>
                <td>
                    <button onclick="confirmDelete('<?php echo $movie['movie_id']; ?>')">Delete</button>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<script>
    function confirmDelete(movieID) {
        
        var confirmDelete = confirm("Are you sure you want to delete the movie?");
        if (confirmDelete) {
            window.location.href = "delete_movies.php?id=" + movieID + "&confirm=yes";
        }
    }
</script>

</body>
</html>
