<?php
    //set default value to variable
    if(!isset($investment)){ $investment = '';}
    if(!isset($interest_rate)){ $interest_rate = '';}
    if(!isset($years)){ $years = '';}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value</title>
     <style>
         label{
             width: 90px;
         }
         </style>
</head>
<body>
    <main>
        <h1>Future Value Calculate</h1>
        <?php if(!empty($error_message)){?>
            <p class="error"><?php echo htmlspecialchars($error_message)?></p>
        <?php } ?>

        <form action="display_result.php" method="post">
            <div id = "data">
                <label> Investment Amount : </label>
                <input type= "text" name="investment" value="<?php echo htmlspecialchars($investment);?>">
                <br>

                <label> Yearly Interest Rate: </label>
                <input type= "text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate);?>">
                <br>
                
                <label> Years: </label>
                <input type= "text" name="years" value="<?php echo htmlspecialchars($years);?>">
            </div>
            <div id = "buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>
        </form>
    </main>
</body>
</html>