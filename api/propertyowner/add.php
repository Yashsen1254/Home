<?php

require ('../../includes/init.php');
$Name = $_POST["Name"];
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$query = "INSERT INTO propertyowner (Name,Phone,Email) VALUES (?,?,?)";
$param = [$Name, $Phone, $Email];
execute($query, $param);

?>