<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

// include database 

$servername = "localhost";
$username = "developertest";
$password = "HL@2021test";
$dbname = "hla";

//

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//table users - id (int), name (varchar 255), email (varchar 255), token (MD5 varchar 255), created (datetime), branch_name (varchar 255)
$user = INSERT INTO users(id,name,email,token,created,branch_name) VALUES (1818,'fila akriz','filaakriz@gmail.com','2fec392304a5c23ac138da22847f9b7c',now(),'filaakriz');
//table locations - id, user_id (int), district (varchar 255), state (varchar 255),country (varchar 255), branch_name (varchar 255)
$location = INSERT INTO locations(id,user_id,district,state,country,branch_name) VALUES (18,08,'seri kembangan','selangor','malaysia','filaakriz');



if ($conn->query($user) === TRUE && $conn->query($location) === TRUE ) {
  $last_id = $conn->insert_id;
  //get location_id and token value
  echo $location_id;
  echo $token;
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
