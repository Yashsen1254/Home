<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];

$query = "UPDATE propertyowner SET Name=?, Phone=?, Email=? WHERE Id=?";
$param = [$Name, $Phone , $Email, $Id];
$result = execute($query, $param);

?>