<?php
  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $databaseName = "user_auth";

   
    $conn = new mysqli($serverName, $userName, $password);

    if ($conn->connect_error) {
        // die("Cnnection Failed". $conn->connect_error);
    } else {
        // echo "Connected successfully";
        // echo "Database name: " . $databaseName ."";
    }

    // $database = "DROP DATABASE test2";
    // if ($conn->query($database) === FALSE) {
    //     die("Connection Failed!!". $conn->error);
    // }else{
    //     echo "Connected Successfully";
    // }
    // $conn->close();
?>