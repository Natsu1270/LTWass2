<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'cms');
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
// Check connection
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}
?>