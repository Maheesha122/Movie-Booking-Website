<?php
include 'nav_bar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="process_reservation_style.css">
</head>
<body>
    
<center>
<?php

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

// Include your database connection code here (e.g., $conn = mysqli_connect(...);)

// Check if the form is submitted

    // Get the values from the form
    $selectedMovie = $_GET['selectedMovie'];
    $selectedDate = $_GET['selectedDate'];
    $selectedTime = $_GET['selectedTime'];
    $reservedSeats = $_GET['reservedSeats'];

    // Insert booking details into the 'booking' table
    $insertQuery = "INSERT INTO booking (movie_name, movie_date, movie_time, reserved_seats) 
                    VALUES ('$selectedMovie', '$selectedDate', '$selectedTime', '$reservedSeats')";

    if (mysqli_query($conn, $insertQuery)) {
        $reservationStatus="Your Reservation is Successfull, enjoy!";
    } else {
        echo "Error: " . mysqli_error($conn);
        $reservationStatus="Sorry, Reservation Unsuccessful, " . mysqli_error($conn);
    }

    // Close the database connection (if required)
    // mysqli_close($conn);
} 
?>
<h3><?php echo $reservationStatus;?></h3>
</div>
<?php

?>

</center>
</body>
</html>
