<?php

include"configs.php";
require"class/deye.php";
require_once "vendor/autoload.php";

$DeyeObj = new Deye();
$DeyeObj->setCredentials($Credentials);
$DeyeObj->setInverterIp($InverterIp);

$resultset = $DeyeObj->inverterStatus();

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbase);
$mysqli->set_charset('utf8mb4');
// get last id
$query="select id from $dbtab order by id desc limit 1";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) { $id = $row['id']; }
}
// convert and write values to database
if (!isset($id)) {$id =0;}
$id = intval($id); 
$id++;
$timestamp = time();
$peak  = intval($resultset[5]["content"]); 
$kwatt = floatval($resultset[7]["content"]); 
$alarm = intval($resultset[8]["content"]);
$sql= "insert into $dbtab (id,peak,timestamp,kwatt,alarm) VALUES ($id,$peak,$timestamp,$kwatt,$alarm)";
$mysqli->query($sql);
$mysqli->close();
?>
