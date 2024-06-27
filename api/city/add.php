<?php

require ('../../includes/init.php');
$Name = $_POST["Name"];
$StateId = $_POST["StateId"];
$BranchId = $_POST["BranchId"];

$query = "INSERT INTO city (Name,StateId,BranchId) VALUES (?,?,?)";
$param = [$Name, $StateId, $BranchId];
execute($query, $param);

?>