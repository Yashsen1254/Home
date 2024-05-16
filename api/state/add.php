<?php

require ('../../includes/init.php');
$Name = $_POST["Name"];
$query = "INSERT INTO state (Name) VALUES (?)";
$param = [$Name];
execute($query, $param);

?>