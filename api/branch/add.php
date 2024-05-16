<?php

require ('../../includes/init.php');
$Name = $_POST["Name"];
$Address = $_POST["Address"];
$StateId = $_POST["StateId"];

$query = "INSERT INTO branch (Name,Address,StateId) VALUES (?,?,?)";
$param = [$Name, $Address, $StateId];
execute($query, $param);

?>