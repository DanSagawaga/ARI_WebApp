<html>
 <body>
<?php

$_SESSION['post-data'] = $_POST;

//$firstname = $_SESSION['post-data']['firstname'];
//$lastname = $_SESSION['post-data']['lastname'];
//$email = $_SESSION['post-data']['email'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Test_DB";


// define variables and set to empty values
$firstname = $lastname = $email =  "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstname = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
  }

  if (empty($_POST["lastname"])) {
    $lastname = "last name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["email"])) {
    $email = "Email is required";
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