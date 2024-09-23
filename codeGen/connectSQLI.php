 <?php
$username = "bauk_user";
$password = "bauk_pwd_##@@";
$dbname=$v_db ;
$hostname = "localhost";

$con=mysqli_connect($hostname,$username,$password,$v_db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
