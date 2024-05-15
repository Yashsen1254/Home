<?php

require ('../../includes/init.php');
$Username = $_POST["Username"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$RoleId = $_POST["RoleId"];

$query = "INSERT INTO admin (Username,Email,Password,RoleId) VALUES (?,?,?,?)";
$param = [$Username, $Email, $Password, $RoleId];
execute($query, $param);

?>