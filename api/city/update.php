<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$StateId = $_POST["StateId"];
$BranchId = $_POST["BranchId"];

$query = "UPDATE city SET Name=?,BranchId=?,StateId=? WHERE Id=?";
$param = [$Name, $BranchId, $StateId, $Id];
$result = execute($query,$param);

?>