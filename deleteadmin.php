<?php
@session_start();
if (!isset($_SESSION["admin_email"])) {
    header("location:deleteadmin.php");
    
    

}

$db = "myproject";
$servername="localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email=$_REQUEST["email"];

$select = "DELETE FROM  `admin` where email='$email'";

$result = $conn->query($select);

header("location:showadmins.php");
?>