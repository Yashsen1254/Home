<?php

require ('../../includes/init.php');
$Rating = $_POST["Rating"];
$ClientId = $_POST["ClientId"];
$AgentId = $_POST["AgentId"];

$query = "INSERT INTO feedback (Rating,ClientId,AgentId) VALUES (?,?,?)";
$param = [$Rating, $ClientId, $AgentId];
execute($query, $param);

?>