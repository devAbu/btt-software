<?php

define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');
define('DB_HOST', 'localhost');
define('DB_NAME', 'btt-software');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect' . mysqli_connect_error());

mysqli_set_charset($dbc, "utf8");

$name = "abu";
$check = $_REQUEST['check'];
$people = $_REQUEST['people'];
$length = $_REQUEST['length'];
$period = $_REQUEST['period'];
$checkyes = $_REQUEST['checkyes'];
$price = $_REQUEST['price'];
$budget = $_REQUEST['budget'];

if ($_REQUEST['task'] == "request") {
    $query = "INSERT INTO tourrequest (`name`, `city`, `length`, `budget`, `people`, `period`, `interpreter`, `price`) VALUES ('$name', '$check', '$length',  '$budget', '$people',  '$period', '$checkyes', '$price')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    }
}
