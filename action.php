<html>
 <body>
<?php
$_SESSION['post-data'] = $_POST;

//$firstname = $_SESSION['post-data']['firstname'];
//$lastname = $_SESSION['post-data']['lastname'];
//$email = $_SESSION['post-data']['email'];

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "TestDB2";

// Create connection

//$conn = mysql_connect("localhost", "root");
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO Test_Table (User_Id,First_Name, Last_Name, Email)
VALUES ('DEFAULT', '$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
 </body>
</html>