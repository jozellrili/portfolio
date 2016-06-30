<?php

    $fname = "";
    $lname = "";
    $email = "";
    $phone = "";
    $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = test_input($_POST['name']);
    $lname = test_input($_POST['surname']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $message = test_input($_POST['message']);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>