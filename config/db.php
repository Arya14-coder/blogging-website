<?php
$host = "localhost:3307";  // Change if using a remote database
$username = "root";   // Default username for XAMPP/MAMP/LAMP
$password = "";       // Default is empty in XAMPP
$database = "blog_db"; // The database name you created
$conn="";

$conn=mysqli_connect($host,$username,$password,$database);

if($conn){
    echo "Connected to database";
}
else{
    echo "Connection failed";
}
?>
