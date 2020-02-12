<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 define("site_url","https://pssoftgroup.com/demo/duda/");
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pssofg3s_duda');
define('DB_PASSWORD', 'duda@123');
define('DB_NAME', 'pssofg3s_duda');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>