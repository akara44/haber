<?php
session_start();
error_reporting(0);
// unset($_SESSION['username']); // Clear the session variable
session_destroy();
header("Location: index.php"); // Redirect to the login page
exit;