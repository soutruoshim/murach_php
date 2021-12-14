<?php
# format number_formt
$nf = number_format(12345);        # 12,345
$nf = number_format(12345, 2);     # 12,345.00
$nf = number_format(12345.674, 2); # 12,345.67
$nf = number_format(12345.675, 2); # 12,345.68
echo $nf;
# date php
$date = date('Y-m-d');
echo $date;
$date = date('m/d/Y');
echo $date;
$date = date('Y');
echo $date;

#check
/*
isset($var)
empty($var)
is_numeric($var) 
*/

