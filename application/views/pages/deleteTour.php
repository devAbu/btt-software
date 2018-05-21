<?php

define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');
define('DB_HOST', 'localhost');
define('DB_NAME', 'btt-software');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect' . mysqli_connect_error());

mysqli_set_charset($dbc, "utf8");

$idnum = $_REQUEST['idnum'];
$session = $_REQUEST['session'];

echo "idnum = " . $idnum;
echo "session = " . $session;

//echo var_dump($session);

/* $oba = mysqli_real_escape_string($dbc, $session);
echo $abu; */
$query = "Delete from usertour where tourID = $idnum and name LIKE '%" . trim($session) . "%' ";
//$query = "Delete from usertour where tourID = $idnum and name LIKE '%$session%' ";
//$query = "Delete from usertour where tourID = $idnum and name LIKE concat('%', '$session', '%') ";
//$query = "DELETE FROM `usertour` WHERE `tourID` = '" . $idnum . "' AND `name` LIKE '%" . mysqli_real_escape_string($dbc, $session) . "%' ";
echo "query:" . $query;
/* $query = "DELETE from usertour where tourID = $idnum and name like '$abu' "; */
$result = mysqli_query($dbc, $query);
if ($result) {
    echo ('Deleted');
    header("location: tourPlans");
} else {
    mysqli_error();
}
