<?php
 
// DATABASE SETUP   
/* HOST IS NIET JUIST?
define("DB_HOST", "montreal.leroydev.nl");
define("DB_USER", "root");
define("DB_PASS", "k9tCLTnZjcaX8aHXEQstMdBw");
define("DB_NAME", "itmobile");

global $dbh;
try
{
    $dbn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8';
    $dbh = new PDO($dbn, DB_USER, DB_PASS);
    echo 'test';
}
catch(PDOException $e)
{
    echo 'Error: '.$e.getMessage();
    die();
}
*/

/* Error reporting */
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>