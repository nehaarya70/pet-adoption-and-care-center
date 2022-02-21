<?php
@session_start();
if (!isset($_SESSION["admin_email"])) {
    header("location:deletepet.php");
    
    

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
$id=$_REQUEST["id"];

$select = "DELETE FROM  `pet` where id='$id'";

$result = $conn->query($select);

header("location:showpets.php");
?>