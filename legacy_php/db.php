<?php

/**
 * Database Configuration
 */
$db_host = 'localhost';
$db_user = 'dulanga';
$db_pass = '1234';
$db_name = 'pizza_shop';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name)
    or exit('Could not connect to database: '.mysqli_connect_error());
