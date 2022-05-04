CREATE DATABASE SCHOOL-ESSENTIALS;

CREATE TABLE IF NOT EXISTS SUPPLIES(  
     `itemdId` INT PRIMARY KEY,
     `itemName` CHAR(16) NOT NULL, 
     `quantity` INT(16) NOT NULL, 
     `price` decimal(7,2) NOT NULL
     );";


INSERT INTO `SUPPLIES`(
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
