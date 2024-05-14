<?php

require ('../../includes/init.php');
$Name = $_POST["Name"];
$query = "INSERT INTO role (Name) VALUES (?)";
$param = [$Name];
execute($query, $param);

?>