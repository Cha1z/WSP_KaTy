<?php
$server = "localhost";
$user = "admin";
$pass = "dåligtlösen";

/* Create connection */
$conn = new mysqli($server, $user, $pass);

/* Check connection */
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);

}

else {
    echo "Connection success";

}

?>
