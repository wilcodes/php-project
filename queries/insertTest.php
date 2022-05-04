<?php
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);

$username = "root";
$servername = "localhost";


// Creating dummy data for test

$itemId = 001;

$itemName = "pencil";

$quantity = 20;

$price = "20.00";



$insertQuery ="
INSERT INTO `supplies`(
    `itemId`,
    `itemName`,
    `quantity`,
    `price`
)
VALUES(
    '$itemId',
    '$itemName',
    '$quantity',
    '$price'
);
";

/*$suppliesQuery = "CREATE TABLE IF NOT EXISTS SUPPLIES(  
     `itemdId` INT PRIMARY KEY,
     `itemName` CHAR(16) NOT NULL, 
     `quantity` INT(16) NOT NULL, 
     `price` decimal(7,2) NOT NULL
     );
     ";
*/

// checking connection
$isConnectAct = mysqli_connect($servername, $username);

// Check connection
if (!$isConnectAct) {
    
    die("Connection failed: " . mysqli_connect_error());

  }else{
    
    echo("<p> Connection established </p>");
      
  };

  //Selecting Database

  function selectDatabase ($database, $connection){

    if(mysqli_select_db($connection, $database)){
                echo('Database Found');
                
    }else{
        exit();
    }

};


//Creating insertSupply function

function insertSupply ($connection, $query, $queryData){

    if(mysqli_query($connection, $query)){

        echo("<p> $queryData: created succesfully </p>");
    }else {
        echo " Error"; 
    };


};


if($isConnectAct){
    selectDatabase("schoolEssentials", $isConnectAct);
    insertSupply($isConnectAct, $insertQuery, 'Supply Record');
};