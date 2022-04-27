<?php
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);

$username = "root";
$servername = "localhost";


$isConnectAct = @mysqli_connect($servername, $username);
$schoolQuery = "CREATE DATABASE schoolEssentials";

// Create database function 

  function createDatabase($connection, $query) {

    if(@mysqli_query($connection, $query)){

        echo("<p> School Essentials Database: created succesfully </p>");
    }else {
        echo " Error";
    };

    mysqli_close($connection);

  };

  //Checking the connection and creating Database

  if (!$isConnectAct) {
    
    die("Connection failed: " . mysqli_connect_error());
    echo("<p> Connection failed </p>");
    
  }else{
      echo("<p> Connection established </p>");
      createDatabase($isConnectAct, $schoolQuery);
      
  };