<!DOCTYPE HTML>
<html>

<head>
  <title>ARI Registration Form</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">ARI<span class="logo_colour"> Registration</span></a></h1>
          <h2>American River International</h2>

        </div>
      </div>
      
    </div>
    <div id="site_content">
      
      <div id="content">





<?php
ob_start();
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $genderErr = $addressErr = "";
$firstname =  $lastname = $email = $gender = $comment = $address = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["firstname"])) {
     $firstnameErr = "First name is required";
   } else {
     $firstname = test_input($_POST["firstname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
       $firstnameErr = "Only letters and white space allowed";
     }
   }
  
   if (empty($_POST["lastname"])) {
     $lastnameErr = "Last name is required";
   } else {
     $lastname = test_input($_POST["lastname"]);
     // check if e-mail address is well-formed
     if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
       $lastnameErr = "Only letters and white space allowed";
     }
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }
    
   if (empty($_POST["address"])) {
     $address = "";
   } else {
     $website = test_input($_POST["address"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
       $lastnameErr = "Only letters and white space allowed";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<center>

<h1 color = "#025587"> Welcome, Please Enter All required fields </h1>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align = "center">
   <p> First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>">
   <span class="error">* <?php echo $firstnameErr;?></span>
   <br><br>
   Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>">
   <span class="error">* <?php echo $lastnameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Address: <input type="text" name="address" value="<?php echo $address;?>">
   <span class="error"><?php echo $addressErr;?></span>
   <br><br>

   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>
</center>

<?php

$isValid = true;

if($firstnameErr != ""){
  $isValid = false;
}
if($lastnameErr != ""){
  $isValid = false;
}
if($emailErr != ""){
  $isValid = false;
}
if($websiteErr != ""){
  $isValid = false;
}
if($genderErr != ""){
  $isValid = false;
}

if($isValid and isset($_POST['submit'])){

include 'action.php';
echo '<script type="text/javascript">
           window.location = "http://localhost:8888/photoID.html"
      </script>';  

}

?>






      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
       &copy; <a href="http://http://www.americanriverintl.com/">2016 American River International</a>
    </div>
  </div>
</body>
</html>
