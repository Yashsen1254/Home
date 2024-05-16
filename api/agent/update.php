<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Email = $_POST["Email"];
$Phone = $_POST["Phone"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];
$License = $_POST["License"];
$BranchId = $_POST["BranchId"];

$query = "UPDATE agent SET Name=?,Email=?,Phone=?,Address=?,Password=?,License=?,BranchId=? WHERE Id=?";
$param = [$Name, $Email, $Phone, $Address, $Password, $License, $BranchId, $Id];
$result = execute($query,$param);

?>