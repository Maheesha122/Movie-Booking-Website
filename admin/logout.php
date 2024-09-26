<?php
include 'database_connection.php';

// delete all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to a index page
header("Location: index.php"); 
exit();
?>