<?php
// define variables and set to empty values
$name = $password "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["uname"]);
  $password = test_input($_POST["psw"]);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
