<?php
session_start();
ob_start();

try{
    $db = new PDO("mysql:host=localhost;dbname=todolist;charset=utf8","root","");
  
}catch(PDOException $e){
    echo $e->getMessage();
}

?>