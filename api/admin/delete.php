<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM admin WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/admin/index.php');

?>