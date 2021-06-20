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
  


$one= $_POST['first'];
$two = $_POST['second'];
$three = $_POST['third'];
$four = $_POST['fourth'];
$five = $_POST['fifth'];
$six = $_POST['sixth'];


if(isset($_POST['save'])){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from my_project WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

$my_query = "INSERT INTO maindb (first, second, third, fourth, fifth, sixth) VALUES ('$one', '$two', '$three', '$four', '$five', $six)";    
$result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from on_values WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO on_values (isOn) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['off'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from off_values WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO off_values (isOff) VALUES (0)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}


?>