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


// define variables and set to empty values
$firstNameErr = $emailErr = $lastNameErr = "";
$firstName = $lastName = $emailErr  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstNameErr = "First Name is required";
  } else {
    $firstName = test_input($_POST["firstname"]);
  }

  if (empty($_POST["lastname"])) {
    $lastNameErr = "Email is required";
  } else {
    $lastName = test_input($_POST["lastname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




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
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
 </body>
</html>

<!--

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
}

	
//print_r($_POST);

	echo "The data inputed is: <br>";
echo $email, ' ';
echo $firstname. ' ';
echo $email, ' ';
echo "<br>";


-->