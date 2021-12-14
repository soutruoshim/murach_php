<?php
  // get the data from form
  $product_description = filter_input(INPUT_POST, 'product_description');
  $list_price = filter_input(INPUT_POST, 'list_price');
  $discount_percent = filter_input(INPUT_POST, 'discount_percent');
  
  // calculate the discount and discount price
  $discount = $list_price * $discount_percent * .01;
  $discount_price = $list_price - $discount;

  // apply currency formating to the dollar and percent amounts
  $list_price_f = "$" .number_format($list_price, 2);
  $discount_percent_f = $discount_percent. "%";
  $discount_f = "$" .number_format($discount, 2);
  $discount_price_f = "$".number_format($discount_price, 2);
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
        <h1>Product Discount calculate</h1>
        
        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description);?></span>
        <br>
        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f);?></span>
        <br>
        <label>Standart Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f);?></span>
        <br>
        <label>Discount Amount:</label>
        <span><?php echo $discount_f;?></span>
        <br>
        <label>Discount Price:</label>
        <span><?php echo $discount_price_f;?></span>
        <br>

</main>
</body>
</html>