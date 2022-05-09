
<?php
//  Set the database access information as constants:

DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'ecommerce');

//  Majke the connection:
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  or die('Could not connect to the MySQL: database' . mysqli_connect_error());


$a = 4;
$pn = "tournesols";
$p = 500;
$s = 4;
$d = "cvicenie nato";
$i = "C:\Users\Sisi\AppData\Local\Temp\php7D25.tmp";

$q = 'INSERT INTO prints (artist_id, print_name, price, size, description, image_name) VALUES (?, ?, ?, ?, ?, ?)';
$stmt = mysqli_prepare($dbc, $q);
mysqli_stmt_bind_param($stmt, 'isdsss', $a, $pn, $p, $s, $d, $i);
mysqli_stmt_execute($stmt);

//  Check the results...
if (mysqli_stmt_affected_rows($stmt) == 1) {

  //  Print a message:
  echo '<p>The print hs been added.</p>';
}

echo '<p>nejde.</p>';



?>