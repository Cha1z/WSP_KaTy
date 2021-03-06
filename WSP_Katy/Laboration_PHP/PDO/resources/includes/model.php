<?php

$host = 'localhost';
$dbname = 'blogg';
$user = 'Admin';
$password = 'Dåligtlösen';

$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);


$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";


$pdo = new PDO($dsn, $user, $password, $attr);


$sql= 'SELECT p.ID, p.Slug, p.Headline, CONCAT(u.) AS Name, p.Creation_time, p.Text FROM Posts JOIN Users ON U.ID = P.Users_ID';

if ($pdo) {
  $model = array();



  foreach($pdo->query('SELECT * FROM Posts') as $row) {
  $model += Array(
      $row['ID'] => array(
        'slug' => $row['Slug'],
        'title' => $row['Headline'],
        'author' => $row['Name'],
        'date' => $row['Creation_time'],
        'text' => $row['Text']
        )

      );

    }

} else {
print_r($pdo->errorinfo());
}


?>
