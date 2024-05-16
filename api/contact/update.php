<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$ClientId = $_POST["ClientId"];
$propertyOwnerId = $_POST["PropertyOwnerId"];
$AgentId = $_POST["AgentId"];

$query = "UPDATE contact SET Phone=?, Email=?, ClientId=?, PropertyOwnerId=?, AgentId=? WHERE Id=?";
$param = [$Phone, $Email, $ClientId, $propertyOwnerId, $AgentId, $Id];
$result = execute($query,$param);

?>