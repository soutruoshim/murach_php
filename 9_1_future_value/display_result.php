<?php
  // get data from the form
  $investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
  $interest_rate = filter_input(INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT);
  $years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);

  // validate investment
  if($investment===FALSE){
      $error_message = 'Investment must be a valid number.';
  }else if($investment <= 0){
      $error_message = 'Investment must be greater then zero.';
  }else if($interest_rate === FALSE){
      $error_message = 'Interest rate must be a valid number.';
  }else if($interest_rate <= 0){
      $error_message = 'Interest rate must be greater then zero.';
  }else if($years === FALSE){
    $error_message = 'Years rate must be a valid number.';
  }else if($years <= 0){
    $error_message = 'Years must be greater then zero.';
  }else if($years > 30){
    $error_message = 'Years must be less then 31.';
  }else{
      $error_message = '';
  }

  //if a error message exist , go to the index page
  if($error_message != ''){
      include('index.php');
      //exit();
  }

  // calculate the future value
  $future_value = $investment;
  for($i = 1; $i <= $years; $i++){
      $future_value = $future_value + ($future_value * $interest_rate * .01);
  }

  //apply currency and percent formatting
  $investment_f = '$' .number_format($investment, 2);
  $yearly_rate_f = $interest_rate. '%';
  $future_value_f = '$'. number_format($future_value, 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <main>
        <h1>Future value calculate</h1>
        <label>Investment Amount: </label>
        <span><?php echo $investment_f; ?></span>

        <label>Yearly Interest rate: </label>
        <span><?php echo $yearly_rate_f; ?></span>

        <label>Number of years: </label>
        <span><?php echo $years; ?></span>

        <label>Investment Amount: </label>
        <span><?php echo $future_value_f; ?></span>
    </main>
</body>
</html>
