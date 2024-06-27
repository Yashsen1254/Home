<?php

require ('../../includes/init.php');
$Date = $_POST["Date"];
$Time = $_POST["Time"];
$ClientId = $_POST["ClientId"];
$PropertyId = $_POST["PropertyId"];
$AgentId = $_POST["AgentId"];

$query = "INSERT INTO appointment (Date,Time,ClientId,PropertyId,AgentId) VALUES (?,?,?,?,?)";
$param = [$Date, $Time, $ClientId, $PropertyId, $AgentId];
execute($query, $param);

?>