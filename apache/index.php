<?php
require"class/class_tpl.php";
include"configs.php";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbase);
$mysqli->set_charset('utf8mb4');

$today = date("d.m.Y");
$timestamp = strtotime($today." 7:0:0");
$start = intval($timestamp); 
$end = $start + 50400;

$tpl = new tpl('tpl');
echo $tpl->parse_tpl('head',['']);

$query="select * from $dbtab where timestamp >= $start and timestamp <= $end and peak > 0 order by timestamp asc";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) { $all[] = $row; }
}
if (empty($all)) {  echo "<span style=\"font-size:22px;margin-left:10px;color:#fafafa;font-weight:bold;font-face:mono-space\">No data yet - good night !</span>";
	                die(); }
$mysqli->close();

$i = 0;
$j = (count($all));

do {
$time = date ('H:i',$all[$i]['timestamp']);
$peak = $all[$i]['peak'];
$kwatt = $all[$i]['kwatt'];
echo $tpl->parse_tpl('stat1',['time' => $time, 'peak' =>$peak, 'kwatt' => $kwatt]);
$i++;
} while ($i < $j);

echo $tpl->parse_tpl('footer',['']);
?>
