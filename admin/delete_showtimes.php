<?php
include 'admin.php';//database connection and navigation bar

if (isset($_GET['id'])) {
    $ShowTimeID = $_GET['id'];

    // Check if the user has confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] === "yes") {
        // Create a DELETE query
        $deleteShowTimeQuery = "DELETE FROM showtimes WHERE show_time_id = $ShowTimeID";
        // Execute the query
        if (mysqli_query($conn, $deleteShowTimeQuery)) {
            echo '<script>alert("Show Time record with ID ' . $ShowTimeID . ' has been deleted successfully.");</script>';
        } else {
            echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
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
<div class="movie_details">
    <table>
    <tr>
            <th>Show Time ID</th>
            <th>Movie ID</th>
            <th>Movie Name</th>
            <th>Start Time</th>
            <th>Movie Date</th>
            <th>Delete</th>
</tr>

</div>
        <?php
        $qry1 = mysqli_query($conn, "SELECT * FROM showtimes");
        while ($showtime = mysqli_fetch_array($qry1)) {
            ?>
            <tr>
                <td><?php echo $showtime['show_time_id']; ?></td>
                <td><?php echo $showtime['movie_id']; ?></td>
                <td><?php echo $showtime['movie_name']; ?></td>
                <td><?php echo $showtime['start_time']; ?></td>
                <td><?php echo $showtime['movie_date']; ?></td>
                <td>
                    <button onclick="confirmDelete(<?php echo $showtime['show_time_id']; ?>)">Delete</button>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<script>
    function confirmDelete(ShowTimeID) {
        var confirmDelete = confirm("Are you sure you want to delete the Show Time?");
        if (confirmDelete) {
            window.location.href = "delete_showtimes.php?id=" + ShowTimeID + "&confirm=yes";
        }
    }
</script>

</body>
</html>
