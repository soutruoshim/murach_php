<?php
$product_description = filter_input(INPUT_GET, 'product_description');
# NULL if product_description has not been set in the $_GET array

$investment= filter_input(INPUT_POST, 'investment',FILTER_VALIDATE_FLOAT);
# NULL if investment has not been set in the $_POST array
# false if investment has not valid float value

$years= filter_input(INPUT_POST, 'years',FILTER_VALIDATE_INT);
# NULL if years has not been set in the $_POST array
# false if years has not valid integer value