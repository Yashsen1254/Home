<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$Date = $_POST["Date"];
$Time = $_POST["Time"];
$ClientId = $_POST["ClientId"];
$PropertyId = $_POST["PropertyId"];
$AgentId = $_POST["AgentId"];

$query = "UPDATE appointment SET Date=?, Time=?, ClientId=?, PropertyId=?, AgentId=? WHERE Id=?";
$param = [$Date, $Time , $ClientId, $PropertyId, $AgentId, $Id];
$result = execute($query, $param);

?>