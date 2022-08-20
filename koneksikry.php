<?php
define('host','localhost');
define('user','root'); 
define('password',''); 
define('database','uts_02898');
 
$conn=mysqli_connect(host,user,password,database); 
if (!$conn) {
  echo mysqli_connect_error(); 
  exit(); 
}
?>