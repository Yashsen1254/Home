<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Address = $_POST["Address"];
$StateId = $_POST["StateId"];

$query = "UPDATE branch SET Name=?,Address=?,StateId=? WHERE Id=?";
$param = [$Name, $Address, $StateId, $Id];
$result = execute($query,$param);

?>