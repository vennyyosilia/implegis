<?php

require ('config.php');

$sql = mysql_query("SELECT nama,lat,lng from rs");

while ($row = mysql_fetch_assoc($sql)) 
$cabang[] = $row;

$json = json_encode($cabang);

echo $json;
?>