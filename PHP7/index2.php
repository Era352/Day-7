<?php
//$host = 'localhost';
//$user = 'root';
//$pass = '';

//try{
    //attempt tp create a new PDO object and connecting to to a mysql databse

    //the connection string is cotructed using the variables

   // $conn = new PDO ("mysql:host=$host; $user; $pass");
    //If the connection is succesful 
    //echo "Connected";
//} catch(Exception $e){
    //echo "Not Connected";
//}


$host = 'localhost';
$user = 'root';
$pass = '';

//Conection in database using PDO

try{
    $conn = new PDO("mysql:host=$host", $user, $pass);

    $sql = "CREATE DATABASE test";

    $conn -> exec($sql);

    echo "Database is created!";
}catch (Exception $e){
    echo "Database not created, something went wrong!";
} 
?>