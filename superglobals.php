<?php
/*
php super global variables list:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_SESSION
$_ENV
$_COOKIE

*/ 


//$GLOBALS

$x = 75;
$y = 25;
 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

    addition();
    echo $z;
    echo "<hr></hr>";
    




//$_SERVER
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];

?>