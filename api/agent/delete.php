<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM agent WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/agent/index.php');

?>