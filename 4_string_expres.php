<?php
   #sing quotes for simple string
   $first_name = 'Bob';
   $last_name = 'Robert';

   #assign null
   $address2 = '';
   $address2 = null;

   #double quotes for insert variable
   $name = "Name : $first_name";
   echo $name;
   $name = "$first_name $last_name";
   echo $name;
   
   #insert spacial charactor
   $last_name = "O`man";
   echo $last_name;

   $last_name = 'she said, "Hi."';
   echo $last_name;

   #join string
   $price = 10.99;
   $price_string = "price : ".$price;
   echo $price_string;

?>