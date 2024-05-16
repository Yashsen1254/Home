<?php

require ('../../includes/init.php');
$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Phone = $_POST["Phone"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];
$License = $_POST["License"];
$BranchId = $_POST["BranchId"];

$query = "INSERT INTO agent (Name,Email,Phone,Address,Password,License,BranchId) VALUES (?,?,?,?,?,?,?)";
$param = [$Name, $Email, $Phone, $Address, $Password, $License, $BranchId];
execute($query, $param);

?>