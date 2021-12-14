<?php
   $dsn = 'mysql:host=localhost; dbname=murach_pro';
   $username = "root";
   $password = "";
   try{
       $db = new PDO($dsn, $username, $password);
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully";
   }catch(PDOException $e){
       $error_message = $e->getMessage();
       include("database_error.php");
       exit();
   }
?>