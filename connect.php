<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'online-forum-database';

// Create connection
$conn = new mysqli($server, $username, $password);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
// if(!mysql_select_db($database))
// {
//     exit('Error: could not select the database');
// }
// <!--
// // Check connection
// if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
//  -->

?>
