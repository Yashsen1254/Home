<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];

$query = "UPDATE client SET Name=?, Phone=?, Email=?, Address=? WHERE Id=?";
$param = [$Name, $Phone , $Email, $Address, $Id];
$result = execute($query, $param);

?>