<?php
   # if statement
   if(empty($first_name)){
       $message = "You must enter your first name";
   }

   # if else statement
   if(empty($investment)){
       $message = 'Investment is a required field.';
   }else if(!is_numeric($investment)){
       $message = "Investment mus be a valid number";
   }else if($investment <= 0){
       $message = "Investment mus be greater than zero";
   }else {
       $message = "Investement is valid";
   }

   # if statement compound coditional expression
   if(empty($investment) || !is_numeric($investment) || $investment <= 0){
       $message = "Investment must be a valid number greater than zero.";
   }

  # a nested if statement
   if(empty($months) || !is_numeric($months) || $months <= 0){
       $message = "Please Enter a number of months greater than zero.";
   }else{
       $years = $month / 12;
       if($years > 1){
             $message = "A long-term investment";
       }else{
             $message = "A short-term investment";
       }
   }

   #Loop
   #while loop
   $counter = 1;
   while($counter <= 5) {
    $message = $message .$counter. '|';
    $counter++;
   }
   echo $message;
   // $message = 1|2|3|4|5|

   #for loop
   for($counter = 1; $counter <= 5; $counter++){
      $message = $message .$counter. '|';
   }

   #while calculate investment
   $investment = 1000;
   $interest_rate = .1;
   $years = 5;
   $furture_value = $investment;

   $i = 1;
   while($i <= $years){
       $furture_value = ($furture_value + ($furture_value * $interest_rate));
       $i++;
   }
   echo $furture_value;

   #for calculate investment
   for($i = 1; $i<= $years; $i++){
     $furture_value = ($furture_value + ($furture_value * $interest_rate));
   }
?>