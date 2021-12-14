<?php
   $first_name = $_GET['first_name'];
   $last_name = $_GET['last_name'];
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
    <h2>Welcome</h2>
    <p>First Name: <?php echo $first_name;?></p>
    <p>Last Name: <?php echo $last_name;?></p>
</body>
</html>