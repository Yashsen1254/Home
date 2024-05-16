<?php

require ('../../includes/init.php');
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$ClientId = $_POST["ClientId"];
$propertyOwnerId = $_POST["PropertyOwnerId"];
$AgentId = $_POST["AgentId"];

$query = "INSERT INTO contact (Phone,Email,ClientId,PropertyOwnerId,AgentId) VALUES (?,?,?,?,?)";
$param = [$Phone, $Email, $ClientId, $propertyOwnerId, $AgentId];
execute($query, $param);

?>