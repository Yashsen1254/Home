<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$RoleId = $_POST['RoleId'];

$query = "UPDATE admin SET Username=?, Password=?, Email=?, RoleId=? WHERE Id=?";
$param = [$Username, $Password, $Email, $RoleId, $Id];
$result = execute($query,$param);

?>