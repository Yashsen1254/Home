<?php

require ('../../includes/init.php');
$Name = $_POST["Name"];
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];
$query = "INSERT INTO client (Name,Phone,Email,Address) VALUES (?,?,?,?)";
$param = [$Name, $Phone, $Email, $Address];
execute($query, $param);

?>