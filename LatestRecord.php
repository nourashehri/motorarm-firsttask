<?php

  //set connection variables 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'my_project';
  $db_port = 1234;
  
//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$sql = mysqli_query($connection, "SELECT * FROM my_project ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);


$sql2 = mysqli_query($connection, "SELECT * FROM on_values ORDER BY id DESC LIMIT 1");

$print_data2 = mysqli_fetch_row($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM off_values ORDER BY id DESC LIMIT 1");

$print_data3 = mysqli_fetch_row($sql3);

echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";

echo "SAVED BUTTON";
echo"<br>";

echo "id = ".$print_data[0];
echo "<br>";
echo "first =  ".$print_data[1];
echo "<br>";
echo "second =  ".$print_data[2];
echo "<br>";
echo "third =  ".$print_data[3];
echo "<br>";
echo "fourth =  ".$print_data[4];
echo "<br>";
echo "fifth =  ".$print_data[5];
echo "<br>";
echo "sixth =  ".$print_data[6];
echo"<br>";
echo"<br>";




echo"ON BUTTON";
echo "<hr>";
echo "id =  ".$print_data2[0];
echo"<br>";
echo "isOn =  ".$print_data2[1];
echo "<br>";
echo "<br>";


echo"OFF BUTTON";
echo"<hr>";
echo "id =  ".$print_data3[0];
echo"<br>";
echo "isOff =  ".$print_data3[1];
echo "<br>";
echo "<br>";




?>