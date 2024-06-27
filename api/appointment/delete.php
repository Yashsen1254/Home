<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM appointment WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/appointment/index.php');

?>