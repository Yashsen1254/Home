<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$Rating = $_POST["Rating"];
$ClientId = $_POST["ClientId"];
$AgentId = $_POST["AgentId"];

$query = "UPDATE feedback SET Rating=?, ClientId=?, AgentId=? WHERE Id=?";
$param = [$Rating, $ClientId, $AgentId, $Id];
$result = execute($query,$param);

?>