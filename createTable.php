<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = "root";
$servername = "localhost";

//creating connection
$isConnectAct = @mysqli_connect($servername, $username);

// Check connection

if (!$isConnectAct) {

     die("Connection failed: " . mysqli_connect_error());
     echo ("<p> Connection failed </p>");
} else {

     echo ("<p> Connection established </p>");
};

// defining Query 
$suppliesQuery = "CREATE TABLE IF NOT EXISTS SUPPLIES(  
     `itemId` INT PRIMARY KEY,
     `itemName` CHAR(16) NOT NULL, 
     `quantity` INT(16) NOT NULL, 
     `price` decimal(7,2) NOT NULL
     );
     ";

//Function that selects database
function selectDatabase($database, $connection)
{

     if (mysqli_select_db($connection, $database)) {
          echo ('Database Found');
     } else {
          exit();
     }
};
// create table function

function createTable($connection, $query, $queryData)
{

     if (@mysqli_query($connection, $query)) {

          echo ("<p> $queryData: created succesfully </p>");
     } else {
          echo " Error";
     };
};


//Running functions

selectDatabase("schoolEssentials", $isConnectAct);

createTable($isConnectAct, $suppliesQuery, 'Supplies Table');