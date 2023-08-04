<!-- Regular Expression : https://www.w3schools.com/php/php_regex.asp -->
<?php
// TEST RegEx
// $str= "Fsoft Academy";
// $pattern = "#academy#i";
// if (preg_match($pattern,$str)){
//     echo "matched";
// }
// else{
//     echo "not match";
// }


// Email Validate
// $email1 = "academy@fsoft.com.vn";
// $email2 = "unknown#email@example.com";

// function validateEmail($email){
//     $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,7}$/";
//     if (preg_match($pattern,$email)){
//         echo "$email is a valid email eddress", "<br/>";
//     }
//     else
//         echo "$email is NOT a valid email address" , "<br/>";
// }

// validateEmail($email1);
// validateEmail($email2);
?>


<!--Data Base Connect :  -->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
?>