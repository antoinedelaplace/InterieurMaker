<?php
/**
 * Created by PhpStorm.
 * User: benoit-xavierhouvet
 * Date: 26/09/2016
 * Time: 18:47
 */
//error_reporting(-1);
//ini_set('display_errors', 'On');
function tryConnection()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd->query("USE symfony");
    }
    catch(PDOException $e)
    {
        return FALSE;
    }
    return $bdd;
}
$bdd = tryConnection();
if ($bdd != FALSE)
{
    $date = new DateTime();
    $date = $date->modify('-15min')->format('Y-m-d H:m:s');
    $tmp = $bdd->prepare("DELETE FROM `planning` WHERE Validation = 0 AND `HeureSaisie` < :date");
    $tmp->execute(array('date' => $date));
}


