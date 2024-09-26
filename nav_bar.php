<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Plex</title>
    <link rel="stylesheet" type="text/css" href="nav_bar_style.css">
</head>
<body>
    <?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "cinemaplex"; 

    $conn = new mysqli($servername, $username, $password, $database);

    session_start();

    ?>
    <nav class="navbar">
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <a href="index.php" class="logo">
            CinemaPlex <span></span>
        </a>
        
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a  href="advertise.php">Advertise</a></li>
            <li><a  href="contact.php">Contact Us</a></li>
            <?php if (isset($_SESSION["username"])){ ?>
                <li><a id="sign_out" href="logout.php">Log Out</a></li>
            <?php } 
            else { ?>
                <li><a id="sign_in" href="login.php">Log In</a></li>
            <?php } ?> 
            <li><a id="sign_up" href="signup.php">Sign Up</a></li>
        </ul>
    </nav>
</body>
</html>
