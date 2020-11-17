 <?php
$servername = "localhost";
$username = "s145742"; 
$password = "tzGBp!#aY9Cq"; 
$dbname = "s145742"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 