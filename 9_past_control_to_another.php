<?php

include 'index.php'; // parenthesis are optional 
include ('index.php'); // index.php in the current directory

require('index.php');

exit;
exit();
exit("Unable to connection"); //display message to browser


if($is_valid){
    include('process_data.php');
    exit();
}

include('view/header.php'); //navigate down one directory
include('./error.php'); // in the current directory
include('../error.php'); // navigaate up one directory
include('../../error.php'); // navigaate up two directory
