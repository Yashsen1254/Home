<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM branch WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/branch/index.php');

?>