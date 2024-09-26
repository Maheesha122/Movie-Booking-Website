<?php
include 'admin.php';//database connection and navigation bar

$showtimeID = $_GET['id'];
$selectQuery1 = "SELECT * FROM showtimes WHERE show_time_id = $showtimeID";
$result1 = mysqli_query($conn, $selectQuery1);
if ($result1 && $row = mysqli_fetch_assoc($result1)) {
    // take the datafrom database
    $movieID = $row['movie_id'];
    $movieName = $row['movie_name'];
    $startTime = $row['start_time'];
    $movieDate = $row['movie_date'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $movieID = $_POST['movie_id'];
    $movieName = mysqli_real_escape_string($conn, $_POST['movie_name']);
    $startTime = mysqli_real_escape_string($conn, $_POST['start_time']);
    $movieDate = mysqli_real_escape_string($conn, $_POST['movie_date']);
    
    $updateShowTimeQuery = "UPDATE showtimes 
        SET  movie_id = $movieID, 
            movie_name = '$movieName', 
            start_time = '$startTime', 
            movie_date = '$movieDate'
        WHERE show_time_id = $showtimeID";
    mysqli_query($conn, $updateShowTimeQuery);

    if (mysqli_query($conn, $updateShowTimeQuery)) {
        // Query executed successfully
        echo '<script>alert("Showtime record updated successfully.");</script>';
    } else {
        // Query execution failed
        echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
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
<div class="movie_details">
    <form method="post" id="update_showtimes">
        <table>

            <tr>
                <td><label for="movie_id">Movie ID</label></td>
                <td><input type="text" name="movie_id" size="50" value="<?php echo $movieID; ?>" required></td>
            </tr>
            <td>
                <label for="movie_name">Movie Name</label></td>
                    <td><input type="text" name="movie_name" size="50" value="<?php echo $movieName; ?>" required></td>
                </tr>
            <tr>
                <td><label for="start_time">Start Time</label></td>
                <td><input type="text" name="start_time" size="50" value="<?php echo $startTime; ?>" required></td>
            </tr>
            <tr>
                <td><label for="movie_date">Movie Date</label></td>
                <td><input type="date" name="movie_date" size="50" value="<?php echo $movieDate; ?>" required></td>
            </tr>
        </table>
        <br><br><br>
        <input type="submit" name="submit" class="submit" value="Submit">
    </form>
</div>
</body>
</html>
